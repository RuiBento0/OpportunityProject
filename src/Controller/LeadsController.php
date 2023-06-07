<?php

namespace App\Controller;

use App\Entity\Leads;
use App\Entity\Departments;
use App\Entity\Categories;
use App\Entity\Entities;
use App\Entity\Priorities;
use App\Entity\Status;
use App\Entity\Stages;
use App\Entity\Area;
use App\Entity\AccountsType;
use App\Entity\Campaign;
use App\Entity\Sources;
use App\Entity\Locations;
use App\Entity\Opportunities;
use App\Entity\Accounts;

use App\Repository\LeadsRepository;
use App\Repository\DepartmentsRepository;
use App\Repository\CategoriesRepository;
use App\Repository\EntitiesRepository;
use App\Repository\PrioritiesRepository;
use App\Repository\StatusRepository;
use App\Repository\StagesRepository;
use App\Repository\AreaRepository;
use App\Repository\AccountsTypeRepository;
use App\Repository\CampaignRepository;
use App\Repository\SourcesRepository;
use App\Repository\LocationsRepository;
use App\Repository\OpportunitiesRepository;
use App\Repository\AccountsRepository;

use App\Form\LeadsFormType;
use App\Form\TypesFormType;
use App\Form\AreaFormType;
use App\Form\DepartmentsFormType;
use App\Form\EntitiesFormType;
use App\Form\PrioritiesFormType;
use App\Form\StagesFormType;
use App\Form\StatusFormType;
use App\Form\CategoriesFormType;
use App\Form\CampaignFormType;
use App\Form\SourceFormType;
use App\Form\OpportunitiesFormType;
use App\Form\ConvertedFormType;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LeadsController extends AbstractController
{
    private $leadsRepository;
    private $departmentsRepository;
    private $categoriesRepository;
    private $entitiesRepository;
    private $prioritiesRepository;
    private $statusRepository;
    private $stagesRepository;
    private $areaRepository;
    private $accountstypeRepository;
    private $campaignRepository;
    private $sourcesRepository;
    private $locationsRepository;
    private $opportunitiesRepository;
    private $accountsRepository;
    private $em;
    private $security;

    public function __construct(Security $security, AccountsRepository $accountsRepository, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $em, OpportunitiesRepository $opportunitiesRepository,LocationsRepository $locationsRepository, DepartmentsRepository $departmentsRepository, CategoriesRepository $categoriesRepository, EntitiesRepository $entitiesRepository, PrioritiesRepository $prioritiesRepository, StatusRepository $statusRepository, StagesRepository $stagesRepository, AreaRepository $areaRepository, AccountsTypeRepository $accountstypeRepository, CampaignRepository $campaignRepository, SourcesRepository $sourcesRepository, LeadsRepository $leadsRepository)
    {
        $this->leadsRepository = $leadsRepository;
        $this->departmentsRepository = $departmentsRepository;
        $this->categoriesRepository = $categoriesRepository;
        $this->entitiesRepository = $entitiesRepository;
        $this->prioritiesRepository = $prioritiesRepository;
        $this->statusRepository = $statusRepository;
        $this->stagesRepository = $stagesRepository;
        $this->areaRepository = $areaRepository;
        $this->accountstypeRepository = $accountstypeRepository;
        $this->campaignRepository = $campaignRepository;
        $this->sourcesRepository = $sourcesRepository;
        $this->locationsRepository = $locationsRepository;
        $this->opportunitiesRepository = $opportunitiesRepository;
        $this->accountsRepository = $accountsRepository;
        $this->security = $security;
        $this->em = $em;
    }

    #[Route('/leads/list', methods:['GET'], name: 'app_leads')]
    public function list(LeadsRepository $leadsRepository, Request $request): Response
    {
        $lead = $this->leadsRepository->findAll();

        return $this->render('leads/list.html.twig',[
            'leads' => $lead,
        ]);
    }

    #[Route('/business/leads/show/{id}', methods:['GET'], name: 'leads_show')]
    public function showlead($id): Response
    {
        $leads = $this->leadsRepository->find($id);

        return $this->render('leads/show.html.twig',[
            'leads' => $leads
        ]);
    }

    #[Route('/business/leads/edit/{id}',methods:['GET','POST'], name: 'leads_edit')]
    public function editlead($id, Request $request, Security $security): Response
    {
        $leads = $this->leadsRepository->find($id);
        $form = $this->createForm(LeadsFormType::class, $leads);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $leads=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $leads = $form->getData();

            $leads->setUpdatedAt(new \DateTimeImmutable($now));
            $leads->setUpdatedBy($loggedinUser);

            $this->em->persist($leads);
            $this->em->flush();

            return $this->redirectToRoute('app_business_leads');
        }

        return $this->render('leads/edit.html.twig',[
            'form' => $form->createView(),
            'leads' => $leads
        ]);
    }

    #[Route('/business/leads/create', name: 'leads_create')]
    public function createleads(Request $request, Security $security): Response
    {
        $leads = new Leads();
        $form = $this->createForm(LeadsFormType::class, $leads);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            
            $leads=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $leads = $form->getData();

            $leads->setUpdatedAt(new \DateTimeImmutable($now));
            $leads->setCreatedAt(new \DateTimeImmutable($now));
            $leads->setCreatedBy($loggedinUser);
            $leads->setUpdatedBy($loggedinUser);

            $this->em->persist($leads);
            $this->em->flush();

            return $this->redirectToRoute('app_business_leads');
        }
        
        return $this->render('leads/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/business/leads/delete/{id}', name: 'leads_delete')]
    public function deleteleads($id): Response
    {
        $leads = $this->leadsRepository->find($id);
        $form = $this->createForm(LeadsFormType::class, $leads);

        $leads = $this->leadsRepository->find($id);
        $this->em->remove($leads);
        $this->em->flush();

        return $this->redirectToRoute('app_business_leads');
    }

    #[Route('business/convert/lead/{id}', name: 'leads_convert')]
    public function convertleads($id, Request $request, Security $security): Response
    {
        

        $lead = $this->leadsRepository->find($id);

        $opp = new Opportunities;

        $form = $this->createForm(ConvertedFormType::class, $opp);

       
        
        $form->handleRequest($request);
            if ($_POST)
            {
            $formdata = $form->getData();
              
             //6 = Converted
            $ConvertedStatus = $this->statusRepository->Find(6);

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');
            $stagedefault = $this->stagesRepository->Find(1);
    
            $lead->setIdStatus($ConvertedStatus);
    
            $this->em->persist($lead);
            $this->em->flush();
            
            $acc = new Accounts();
    
            $acc->setName($lead->getAccount());
            $acc->setDescription('');
            $acc->setIdUser($lead->getIdUser());
            $acc->setUpdatedAt(new \DateTimeImmutable($now));
            $acc->setCreatedAt(new \DateTimeImmutable($now));
            $acc->setCreatedBy($loggedinUser);
            $acc->setUpdatedBy($loggedinUser);
    
            $this->em->persist($acc);
            $this->em->flush();
    
            $opp->setName($lead->getName());
            $opp->setDescription($lead->getDescription());
            $opp->setAmount($lead->getAmount());
            $opp->setIdUser($lead->getIdUser());
            $opp->setIdAccount($acc);
            $opp->setProbability($formdata->getProbability());
            $opp->setProduct($formdata->getProduct());
            $opp->setIdStage($formdata->getIdStage());
            $opp->setCloseDate($formdata->getCloseDate());
            $opp->setIdDepartment($formdata->getIdDepartment());
            $opp->setIdContact($formdata->getIdContact());
            $opp->setIdSource($formdata->getIdSource());
            $opp->setUpdatedAt(new \DateTimeImmutable($now));
            $opp->setCreatedAt(new \DateTimeImmutable($now));
            $opp->setCreatedBy($loggedinUser);
            $opp->setUpdatedBy($loggedinUser);
            $opp->setLeadId($lead);
    
            $this->em->persist($opp);
            $this->em->flush();

            

            return $this->redirectToRoute('app_business_leads');
        }

        return $this->render('business/convertedoptions.html.twig',[
            'form' => $form->createView()
            
        ]);
    }
}
