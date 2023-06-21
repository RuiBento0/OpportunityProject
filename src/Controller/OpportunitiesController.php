<?php

namespace App\Controller;

use App\Entity\Opportunities;
use App\Entity\Users;
use App\Entity\Departments;
use App\Entity\Categories;
use App\Entity\Entities;
use App\Entity\Priorities;
use App\Entity\Status;
use App\Entity\Stages;
use App\Entity\AccountsType;
use App\Entity\Campaign;
use App\Entity\Sources;
use App\Entity\Locations;

use App\Repository\DepartmentsRepository;
use App\Repository\CategoriesRepository;
use App\Repository\EntitiesRepository;
use App\Repository\PrioritiesRepository;
use App\Repository\StatusRepository;
use App\Repository\StagesRepository;
use App\Repository\AccountsTypeRepository;
use App\Repository\CampaignRepository;
use App\Repository\SourcesRepository;
use App\Repository\LocationsRepository;
use App\Repository\OpportunitiesRepository;
use App\Repository\UsersRepository;


use App\Form\OpportunitiesFormType;
use App\Form\TypesFormType;
use App\Form\DepartmentsFormType;
use App\Form\EntitiesFormType;
use App\Form\PrioritiesFormType;
use App\Form\StagesFormType;
use App\Form\StatusFormType;
use App\Form\CategoriesFormType;
use App\Form\CampaignFormType;
use App\Form\SourceFormType;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class OpportunitiesController extends AbstractController
{
    private $opportunitiesRepository;
    private $usersRepository;
    private $departmentsRepository;
    private $categoriesRepository;
    private $entitiesRepository;
    private $prioritiesRepository;
    private $statusRepository;
    private $stagesRepository;
    private $accountstypeRepository;
    private $campaignRepository;
    private $sourcesRepository;
    private $locationsRepository;
    private $em;
    private $security;

    public function __construct(Security $security, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $em,LocationsRepository $locationsRepository, DepartmentsRepository $departmentsRepository, CategoriesRepository $categoriesRepository, EntitiesRepository $entitiesRepository, PrioritiesRepository $prioritiesRepository, StatusRepository $statusRepository, StagesRepository $stagesRepository, AccountsTypeRepository $accountstypeRepository, CampaignRepository $campaignRepository, SourcesRepository $sourcesRepository, OpportunitiesRepository $opportunitiesRepository, UsersRepository $usersRepository)
    {
        $this->opportunitiesRepository = $opportunitiesRepository;
        $this->usersRepository = $usersRepository;
        $this->departmentsRepository = $departmentsRepository;
        $this->categoriesRepository = $categoriesRepository;
        $this->entitiesRepository = $entitiesRepository;
        $this->prioritiesRepository = $prioritiesRepository;
        $this->statusRepository = $statusRepository;
        $this->stagesRepository = $stagesRepository;
        $this->accountstypeRepository = $accountstypeRepository;
        $this->campaignRepository = $campaignRepository;
        $this->sourcesRepository = $sourcesRepository;
        $this->locationsRepository = $locationsRepository;
        $this->security = $security;
        $this->em = $em;
    }


    #[Route('/opportunities/list', methods:['GET'], name: 'app_opportunities')]
    public function list(OpportunitiesRepository $opportunitiesRepository, Request $request): Response
    {
        $opportunities = $this->opportunitiesRepository->findAll();
       

        return $this->render('opportunities/list.html.twig',[
            'opportunities' => $opportunities,
        ]);
    }

    #[Route('/business/opportunities/show/{id}', methods:['GET'], name: 'opportunities_show')]
    public function showlead($id): Response
    {
        $opportunities = $this->opportunitiesRepository->find($id);

        $accountid = $opportunities->getIdAccount();
        
        $oldopp = $this->opportunitiesRepository->findByAccounts($accountid->getId());

        return $this->render('opportunities/show.html.twig',[
            'opportunities' => $opportunities,
            'oldopp' => $oldopp
        ]);
    }

    #[Route('/business/opportunities/edit/{id}',methods:['GET','POST'], name: 'opportunities_edit')]
    public function editlead($id, Request $request, Security $security): Response
    {
        $opportunities = $this->opportunitiesRepository->find($id);
        $form = $this->createForm(OpportunitiesFormType::class, $opportunities);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $opportunities=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $opportunities = $form->getData();

            $opportunities->setUpdatedAt(new \DateTimeImmutable($now));
            $opportunities->setUpdatedBy($loggedinUser);

            $this->em->persist($opportunities);
            $this->em->flush();

            return $this->redirectToRoute('app_business_opportunities');
        }

        return $this->render('opportunities/edit.html.twig',[
            'form' => $form->createView(),
            'opportunities' => $opportunities
        ]);
    }

    #[Route('/business/opportunities/create', name: 'opportunities_create')]
    public function createopportunities(Request $request, Security $security): Response
    {
        $opportunities = new Opportunities();
        $form = $this->createForm(OpportunitiesFormType::class, $opportunities);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            
            $opportunities=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $opportunities = $form->getData();

            $opportunities->setUpdatedAt(new \DateTimeImmutable($now));
            $opportunities->setCreatedAt(new \DateTimeImmutable($now));
            $opportunities->setCreatedBy($loggedinUser);
            $opportunities->setUpdatedBy($loggedinUser);

            $this->em->persist($opportunities);
            $this->em->flush();

            return $this->redirectToRoute('app_business_opportunities');
        }
        
        return $this->render('opportunities/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/business/opportunities/delete/{id}', name: 'opportunities_delete')]
    public function deleteopportunities($id): Response
    {
        $opportunities = $this->opportunitiesRepository->find($id);
        $form = $this->createForm(OpportunitiesFormType::class, $opportunities);

        $opportunities = $this->opportunitiesRepository->find($id);
        $this->em->remove($opportunities);
        $this->em->flush();

        return $this->redirectToRoute('app_business_opportunities');
    }

}
