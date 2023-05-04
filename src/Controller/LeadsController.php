<?php

namespace App\Controller;

use App\Entity\Leads;
use App\Repository\LeadsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LeadsController extends AbstractController
{
    private $leadsRepository;

    public function __construct(LeadsRepository $leadsRepository)
    {
        $this->leadsRepository = $leadsRepository;
    }

    #[Route('/leads/list', methods:['GET'], name: 'app_leads')]
    public function list(LeadsRepository $leadsRepository, Request $request): Response
    {
        $lead = $this->leadsRepository->findAll();

        return $this->render('leads/list.html.twig',[
            'leads' => $lead,
        ]);
    }

/*     #[Route('/leads', name: 'app_leads')]
    public function index(): Response
    {
        return $this->render('leads/index.html.twig', [
            'controller_name' => 'LeadsController',
        ]);
    } */
}
