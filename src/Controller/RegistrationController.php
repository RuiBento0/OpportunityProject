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

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(MailerInterface $mailer, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
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
            ->from('ruibento@sosconsultoria.pt')
            ->to($email)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Welcome to CRM Central!')
            ->text('Sending emails is fun again!')
            ->html('<a href="http://127.0.0.1:8000/login/' . $token . '">Confirm email</a>');

            $mailer->send($confirmemail);

            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $user->setActive(1);
            $user->setTokens($token);
/*             $userRole = $this->RolesRepository->find(3); // set automaticly user to "USER" role

            $user->setUserRole($userRole); */

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_index');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);

    }

    
}
