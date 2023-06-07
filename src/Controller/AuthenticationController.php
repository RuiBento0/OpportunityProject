<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Roles;

use App\Repository\UsersRepository;
use App\Repository\RolesRepository;

use App\Form\UserFormType;
use App\Form\RolesFormType;

use Symfony\Component\Security\Core\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class AuthenticationController extends AbstractController
{
    private $em;
    private $security;
    private $usersRepository;
    private $rolesRepository;

    public function __construct(Security $security, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $em, UsersRepository $usersRepository, RolesRepository $rolesRepository)
    {
        $this->security = $security;
        $this->em = $em;
        $this->usersRepository = $usersRepository;
        $this->rolesRepository = $rolesRepository;
    }

    //                              //
    //              USER            //
    //                              //

    #[Route('/authentication/users/show/{id}', name: 'user_show')]
    public function showuser($id): Response
    {
        $user = $this->usersRepository->find($id);

        return $this->render('users/show.html.twig',[
            'user' => $user
        ]);
    }

    #[Route('authentication/users/edit/{id}', name: 'user_edit')]
    public function edituser($id,Request $request, UserPasswordHasherInterface $userPasswordHasher,  Security $security): Response
    {
        $user = $this->usersRepository->find($id);
        $form = $this->createForm(UserFormType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $user=$form->getData();

            $user->setPassword(
                $userPasswordHasher->hashPassword(
                        $user,
                        $form->getData()->getPassword(),
                    )
                );

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');
            $user = $form->getData();

            $user->setUpdatedAt(new \DateTimeImmutable($now));

            $this->em->persist($user);
            $this->em->flush();

            return $this->redirectToRoute('app_authentication_users');
        }

        return $this->render('users/edit.html.twig',[
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    #[Route('authentication/users/create', name: 'user_create')]
    public function createuser(MailerInterface $mailer, Request $request, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = new Users();
        $form = $this->createForm(UserFormType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {   
            $user=$form->getData();

            $now = date('m/d/Y h:i:s');

            $user->setPassword(
                $userPasswordHasher->hashPassword(
                        $user,
                        $form->getData()->getPassword(),
                    )
                );

                function Token($len=32){
                    return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
                }
    
                $token = Token(10);
    
                $user->setTokens($token);
    
                $data = $form->getData();
                $email = $data->getEmail();

                $user = $form->getData();

                $user->setUpdatedAt(new \DateTimeImmutable($now));
                $user->setCreatedAt(new \DateTimeImmutable($now));
                $user->setPhoto('default.png');
                $user->setActive(0);
    
                $this->em->persist($user);
                $this->em->flush();
    
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
                        <a href="http://127.0.0.1:8000/password/'.$token.'" style="color: #608E34; font-size: 14px; text-decoration: none; line-height: 2em; font-weight: bold; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; border: none; padding: 10px 0px;">Confirm email address</a>
                    <tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif">
                        <td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; padding-top: 5px; vertical-align: top; margin: 0; text-align: right;" valign="top">
                            &mdash; <b>CRM</b> - Admin Dashboard
                        </td>
                    </tr>
                </table>
                    ');
    
                $mailer->send($confirmemail);

                $user->setActive(0);
                $user->setTokens($token);

                $this->em->persist($user);
                $this->em->flush();
                
            return $this->redirectToRoute('app_authentication_users');
        }

        return $this->render('users/create.html.twig',[
            'form' => $form->createView()
        ]);
    }

    #[Route('/authentication/users/delete/{id}', methods:['GET'], name: 'user_delete')]
    public function deleteuser($id): Response
    {
        $user = $this->usersRepository->find($id);
        $form = $this->createForm(UserFormType::class, $user);

        $user = $this->usersRepository->find($id);
        $this->em->remove($user);
        $this->em->flush();

        return $this->redirectToRoute('app_authentication_users');
    }


    //                              //
    //              ROLE            //
    //                              //

    #[Route('/authentication/role/show/{id}', name: 'role_show')]
    public function showrole($id): Response
    {
        $role = $this->rolesRepository->find($id);

        return $this->render('roles/show.html.twig',[
            'role' => $role
        ]);
    }

    #[Route('/authentication/role/edit/{id}', name: 'role_edit')]
    public function editrole($id, Request $request, Security $security): Response
    {
        $role = $this->rolesRepository->find($id);
        $form = $this->createForm(RolesFormType::class, $role);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $role=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $role = $form->getData();

            $role->setUpdateAt(new \DateTimeImmutable($now));

            $role->setUpdatedBy($loggedinUser); 

            $this->em->persist($role);
            $this->em->flush();

            return $this->redirectToRoute('app_authentication_roles');
        }

        return $this->render('roles/edit.html.twig',[
            'form' => $form->createView(),
            'role' => $role
        ]);
    }

    #[Route('/authentication/role/create', name: 'role_create')]
    public function createrole(Request $request, Security $security): Response
    {
        $role = new Roles();
        $form = $this->createForm(RolesFormType::class, $role);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $role=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $role = $form->getData();

            $role->setUpdateAt(new \DateTimeImmutable($now));
            $role->setCreatedAt(new \DateTimeImmutable($now));
            $role->setCreatedBy($loggedinUser);
            $role->setUpdatedBy($loggedinUser); 

            $this->em->persist($role);
            $this->em->flush();

            return $this->redirectToRoute('app_authentication_roles');
        }
        
        return $this->render('roles/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/authentication/role/delete/{id}', methods:['GET'], name: 'role_delete')]
    public function deleterole($id): Response
    {
        $role = $this->rolesRepository->find($id);
        $form = $this->createForm(RolesFormType::class, $role);

        $role = $this->rolesRepository->find($id);
        $this->em->remove($role);
        $this->em->flush();

        return $this->redirectToRoute('app_authentication_roles');
    }
}
