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

    #[Route(path: '/login', name: 'app_login')]
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
}
