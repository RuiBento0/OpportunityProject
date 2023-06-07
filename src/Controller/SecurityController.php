<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\Roles;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SecurityController extends AbstractController
{
    public function __construct(private UsersRepository $UsersRepository)
    {

    }

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
      

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        
        
        if($_POST){
          
            $UserL = $this->UsersRepository->checktoken($userid);

            return $this->redirectToRoute('app_index');
            }
            
        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException();
    }

    #[Route(path: '/logint/{token}', name: 'app_login_token')]
    public function loginwithtoken($token, AuthenticationUtils $authenticationUtils): Response
    {
        $UsersRepository = $this->UsersRepository->findbyToken($token);

        foreach($UsersRepository as $Users){
            $userusername = $Users['email'];
            $userid = $Users['id'];
        }

        if($_POST){

        $UserL = $this->UsersRepository->removetoken($userid);

        return $this->redirectToRoute('app_index');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error, 'username' => $userusername]);
    }

    #[Route('/resetpassword', methods:['GET','POST'],name: 'app_reset_password')]
    public function resetpassword(MailerInterface $mailer, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $flag = 0;

        $token = new Users();
    
        $roles = new Roles();

        

        if (isset($_POST["email"])) {
                
            $email=$_POST["email"];

            $users = $this->UsersRepository->findbyEmail($email);

            foreach($users as $user1){
                $userid= $user1["id"];
            }


            function getTokens($len=32){
                return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
            }

            $token = getTokens(10);


            $user=$this->UsersRepository->find($userid);

            $user->setTokens($token);


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
                    Please change your password by clicking the link below.                                                             
                        <a href="http://127.0.0.1:8000/newpassword/'.$token.'" style="color: #608E34; font-size: 14px; text-decoration: none; line-height: 2em; font-weight: bold; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; border: none; padding: 10px 0px;">Change Password here</a>
                    <tr style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif">
                        <td class="content-block" style="font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; padding-top: 5px; vertical-align: top; margin: 0; text-align: right;" valign="top">
                            &mdash; <b>CRM</b> - Admin Dashboard
                        </td>
                    </tr>
                </table>
                    ');

            $mailer->send($confirmemail);

            $user->setTokens($token);

            $entityManager->persist($user);
            $entityManager->flush();
            
            $flag = 1;

            return $this->render('reset_password/check_email.html.twig', [
                'email'=>$email,
            ]);  
            
        }

        return $this->render('reset_password/request.html.twig', [
        ]);          
    }

    #[Route(path: '/newpassword/{token}',methods:['GET','POST'], name: 'app_newpassword')]
    public function newpassword($token, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {


        if(isset($_POST["newpassword"]))
        {

            $user = new Users;

            $UsersRepository = $this->UsersRepository->findbyToken($token);

            foreach($UsersRepository as $Users){
                $username=$Users['email'];
                $userid = $Users['id'];
            }

            $user=$this->UsersRepository->find($userid);
            
            print_r($user->getPassword());
            print_r("<br>");
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                        $user,
                        $_POST['newpassword']
                    )
                );

            print_r($user->getPassword());

            

            $entityManager->persist($user);
            $entityManager->flush();
                
                $user = $this->UsersRepository->removetoken($userid);

             
                return $this->redirectToRoute('app_login',[
                    
                ]);

              
        }


        return $this->render('reset_password/reset.html.twig', [
            'token'=>$token,
        ]);
    }

    #[Route(path: '/password/{token}',methods:['GET','POST'], name: 'app_password')]
    public function createpassword($token, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {


        if(isset($_POST["createpassword"]))
        {

            $user = new Users;

            $UsersRepository = $this->UsersRepository->findbyToken($token);

            foreach($UsersRepository as $Users){
                $username=$Users['email'];
                $userid = $Users['id'];
            }

            $user=$this->UsersRepository->find($userid);
            
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                        $user,
                        $_POST['createpassword']
                    )
                );

            print_r($user->getPassword());

            $entityManager->persist($user);
            $entityManager->flush();
                
                $user = $this->UsersRepository->removetoken($userid);
             
                return $this->redirectToRoute('app_login',[
                    
                ]);

              
        }


        return $this->render('reset_password/createpassword.html.twig', [
            'token'=>$token,
        ]);
    }
}
