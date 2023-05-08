<?php

namespace App\Controller;

use App\Entity\Opportunities;
use App\Repository\OpportunitiesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class OpportunitiesController extends AbstractController
{
    private $opportunitiesRepository;

    public function __construct(OpportunitiesRepository $opportunitiesRepository)
    {
        $this->opportunitiesRepository = $opportunitiesRepository;
    }


    #[Route('/opportunities/list', methods:['GET'], name: 'app_opportunities')]
    public function list(OpportunitiesRepository $opportunitiesRepository, Request $request): Response
    {
        $opportunity = $this->opportunitiesRepository->findAll();

        return $this->render('opportunities/list.html.twig',[
            'opportunities' => $opportunity,
        ]);
    }

    #[Route('/opportunities/create', methods:['GET'], name: 'app_opportunities_new')]
    public function new(OpportunitiesRepository $opportunitiesRepository, Request $request): Response
    {
        return $this->render('opportunities/new.html.twig',[
            
        ]);
    }


   #[Route('/index', name: 'app_index')]
    public function index2(): Response
    {
        return $this->render('index.html.twig');
    }
}
