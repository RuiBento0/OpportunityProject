<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Roles;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

use App\Repository\RolesRepository;

class RegistrationController extends AbstractController
{
    public function __construct(RolesRepository $RolesRepository)
    {
        $this->RolesRepository = $RolesRepository;
    }

    #[Route('/register', name: 'app_register')]
    public function register(MailerInterface $mailer, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $flag = 0;

        $token = new Users();
        $user = new Users();
        $roles = new Roles();


        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            function getTokens($len=32){
                return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
            }

            $token = getTokens(10);

            $user->setTokens($token);

            $data = $form->getData();
            $email = $data->getEmail();

            $confirmemail = (new Email())
                ->from('ruiruibentobento@gmail.com')
                ->to($email)
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('test@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Business')
                ->text('Confirm Registration')
                ->html('<table width="100%" cellpadding="0" cellspacing="0" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                    <tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <td class="content-block" style="font-size: 14px; text-decoration: none; line-height: 2em; font-weight: bold">
                            Business
                        </td>
                    </tr>
                    Please confirm your email address by clicking the link below.                                                             
                        <a href="http://127.0.0.1:8000/logint/'.$token.'" style="color: #608E34; font-size: 14px; text-decoration: none; line-height: 2em; font-weight: bold; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; border: none; padding: 10px 0px;">Confirm email address</a>
                    <tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif">
                        <td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; padding-top: 5px; vertical-align: top; margin: 0; text-align: right;" valign="top">
                            &mdash; <b>CRM</b> - Admin Dashboard
                        </td>
                    </tr>
                </table>
                    ');

            $mailer->send($confirmemail);

            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $user->setActive(1);
            $user->setTokens($token);
            $userRole = $this->RolesRepository->find(3); // set automaticly user to "USER" role

            $user->setUserRole($userRole); 

            $entityManager->persist($user);
            $entityManager->flush();

            $flag = 1;
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'flag' => $flag,
        ]);

    }

    
}
