<?php

namespace App\Controller;

use App\Entity\Accounts;
use App\Repository\AccountsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AccountsController extends AbstractController
{
    private $accountsRepository;

    public function __construct(AccountsRepository $accountsRepository)
    {
        $this->accountsRepository = $accountsRepository;
    }

    #[Route('/accounts/list', methods:['GET'], name: 'app_accounts')]
    public function list(AccountsRepository $accountsRepository, Request $request): Response
    {
        $account = $this->accountsRepository->findAll();

        return $this->render('accounts/list.html.twig',[
            'accounts' => $account,
        ]);
    }
}
?>