<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    public function __construct(private UsersRepository $UsersRepository)
    {

    }

    #[Route(path: '/login', name: 'app_login',methods:['POST','GET'])]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if($_POST){
                $UserL = $this->UsersRepository->checktoken($userid);
    
                return $this->redirectToRoute('app_index');
                }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/login/{token}', name: 'app_login_token')]
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
