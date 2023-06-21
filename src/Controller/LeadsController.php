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
use App\Entity\Contacts;
use App\Entity\Phones;
use App\Entity\Emails;
use App\Entity\Addresses;

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
use App\Repository\PhonesRepository;
use App\Repository\EmailsRepository;
use App\Repository\AddressesRepository;

use App\Form\LeadsFormType;
use App\Form\TypesFormType;
use App\Form\AreaFormType;
use App\Form\AccountsFormType;
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
use App\Form\ContactsFormType;
use App\Form\ConvertedContactFormType;
use App\Form\ConvertedAccountsFormType;

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
    private $phonesRepository;
    private $emailsRepository;
    private $addressesRepository;
    private $em;
    private $security;

    public function __construct(Security $security, AccountsRepository $accountsRepository, PhonesRepository $phonesRepository, EmailsRepository $emailsRepository, AddressesRepository $addressesRepository, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $em, OpportunitiesRepository $opportunitiesRepository,LocationsRepository $locationsRepository, DepartmentsRepository $departmentsRepository, CategoriesRepository $categoriesRepository, EntitiesRepository $entitiesRepository, PrioritiesRepository $prioritiesRepository, StatusRepository $statusRepository, StagesRepository $stagesRepository, AreaRepository $areaRepository, AccountsTypeRepository $accountstypeRepository, CampaignRepository $campaignRepository, SourcesRepository $sourcesRepository, LeadsRepository $leadsRepository)
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
        $this->phonesRepository = $phonesRepository;
        $this->emailsRepository = $emailsRepository;
        $this->addressesRepository = $addressesRepository;
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

        $StatusLead=$leads->getIdStatus()->getId();
        if($StatusLead == 6)
        {
            return $this->redirectToRoute('app_business_leads');
        }
        
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

            $leads->setIdUser($loggedinUser);
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

        $accounts = new Accounts();
        $form2 = $this->createForm(ConvertedAccountsFormType::class, $accounts);

        $contacts = new Contacts();
        $form3 = $this->createForm(ConvertedContactFormType::class, $contacts);

        $lead = $this->leadsRepository->find($id);

        $opp = new Opportunities;

        $form = $this->createForm(ConvertedFormType::class, $opp);

        $leadsFIND = $this->leadsRepository->find($id);
        $leadsFindNamelead  = $leadsFIND->getName();
        $leadsFindNameacc  = $leadsFIND->getAccount();
        $leadsFindDescriptionlead = $leadsFIND->getDescription();
        
       
       
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
      
           
            $FormConverted = $form->getData();
            $FormConverted = $_POST["converted_form"];
            $FormAccountsConverted = $_POST["converted_accounts_form"];
            $FormContactsConverted = $_POST["converted_contact_form"];

             //6 = Converted
            $ConvertedStatus = $this->statusRepository->Find(6);

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');
            $stagedefault = $this->stagesRepository->Find(1);
    
            $lead->setIdStatus($ConvertedStatus);
    
            $this->em->persist($lead);
            $this->em->flush();
            
            
            $acc = new Accounts();
    
            $acc->setName($FormAccountsConverted["name"]);
            if($FormAccountsConverted["idtype"]){
                $type = $this->accountstypeRepository->find($FormAccountsConverted["idtype"]);
                $acc->setIdType($type);
            }
            if($FormAccountsConverted["idarea"]){
                $area = $this->areaRepository->find($FormAccountsConverted["idarea"]);
                $acc->getIdArea($area);
            }

            $acc->setDescription($FormAccountsConverted["description"]);
            $acc->setIdUser($loggedinUser);
            $acc->setNif($FormAccountsConverted["NIF"]);
            $acc->setUpdatedAt(new \DateTimeImmutable($now));
            $acc->setCreatedAt(new \DateTimeImmutable($now));
            $acc->setCreatedBy($loggedinUser);
            $acc->setUpdatedBy($loggedinUser);
    
            $this->em->persist($acc);
            $this->em->flush();

               


           /*  if($FormContactsConverted["name"] != ""){
                echo 1;
                die();
            }else{
                echo 2;
                die();
            } */

            if($FormContactsConverted["name"] != "" && $FormContactsConverted["name"] != NULL){

                $contacts->setName($FormContactsConverted["name"]);
                $contacts->setSurname($FormContactsConverted["surname"]);
                $contacts->setDescription($FormContactsConverted["description"]);
                $contacts->setIdUser($loggedinUser);
                $contacts->setUpdatedAt(new \DateTimeImmutable($now));
                $contacts->setCreatedAt(new \DateTimeImmutable($now));
                $contacts->setCreatedBy($loggedinUser);
                $contacts->setUpdatedBy($loggedinUser);
    
                $this->em->persist($contacts);
                $this->em->flush();
                $hasContact = True;
            }else{
                $hasContact = False;
            }
            
          

            $EntityAccount = $this->entitiesRepository->find(3);
            $EntityContact = $this->entitiesRepository->find(4);
            // insert phone / email / address acount

            if(isset($_POST["phoneacc"]))
            {
            $countArrayPhone= count($_POST["phoneacc"]);
                for ($i=0; $i<$countArrayPhone ; $i++) { 
                    $newphone = new Phones();
                    $newphone->setIdEntity($EntityAccount);
                    $newphone->setIdInRelation($acc->getId());
                    $newphone->setPhone($_POST["phoneacc"][$i]);
                    $this->em->persist($newphone);
                    $this->em->flush();
                }
            }

            if(isset($_POST["emailacc"]))
            {
            $countArrayEmail= count($_POST["emailacc"]);
                for ($i=0; $i<$countArrayEmail ; $i++) { 
                    $newemail = new Emails();
                    $newemail->setIdEntity($EntityAccount);
                    $newemail->setIdInRelation($acc->getId());
                    $newemail->setEmail($_POST["emailacc"][$i]);
                    $this->em->persist($newemail);
                    $this->em->flush();
                }
            }

            if(isset($_POST["addressaccaddress"]))
            {
            $countArrayAddress= count($_POST["addressaccaddress"]);

                for ($i=0; $i<$countArrayAddress ; $i++) { 
                    $newaddress = new Addresses();
                    $newaddress->setIdEntity($EntityAccount);
                    $newaddress->setIdInRelation($acc->getId());
                    $newaddress->setAddress($_POST["addressaccaddress"][$i]);
                    $newaddress->setCity($_POST["addressacccity"][$i]);
                    $newaddress->setPostalCode($_POST["addressaccpostalcode"][$i]);
                    $this->em->persist($newaddress);
                    $this->em->flush();
                }
            }

            
         
            //Insert phone email address in contact~

            if(isset($_POST["phonecont"]))
            {
            $countArrayPhone= count($_POST["phonecont"]);
                for ($i=0; $i<$countArrayPhone ; $i++) { 
                    $newphone = new Phones();
                    $newphone->setIdEntity($EntityContact);
                    $newphone->setIdInRelation($contacts->getId());
                    $newphone->setPhone($_POST["phonecont"][$i]);
                    $this->em->persist($newphone);
                    $this->em->flush();
                }
            }

            if(isset($_POST["emailcont"]))
            {
            $countArrayEmail= count($_POST["emailcont"]);
                for ($i=0; $i<$countArrayEmail ; $i++) { 
                    $newemail = new Emails();
                    $newemail->setIdEntity($EntityContact);
                    $newemail->setIdInRelation($contacts->getId());
                    $newemail->setEmail($_POST["emailcont"][$i]);
                    $this->em->persist($newemail);
                    $this->em->flush();
                }
            }

            if(isset($_POST["addresscontaddress"]))
            {
            $countArrayAddress= count($_POST["addresscontaddress"]);

                for ($i=0; $i<$countArrayAddress ; $i++) { 
                    $newaddress = new Addresses();
                    $newaddress->setIdEntity($EntityContact);
                    $newaddress->setIdInRelation($contacts->getId());
                    $newaddress->setAddress($_POST["addresscontaddress"][$i]);
                    $newaddress->setCity($_POST["addresscontcity"][$i]);
                    $newaddress->setPostalCode($_POST["addresscontpostalcode"][$i]);
                    $this->em->persist($newaddress);
                    $this->em->flush();
                }
            }


            $FormatedDateInsertDB = $FormConverted["closedate"];


            $dateTime = \DateTime::createFromFormat('m/d/Y H:i:s', '06/15/2023 01:43:46');
            $dateTime->setDate($FormatedDateInsertDB['year'], $FormatedDateInsertDB['month'], $FormatedDateInsertDB['day']);
            $formattedDateTime = $dateTime->format('m/d/Y H:i:s');

            

            $opp->setName("1fooose");
            $opp->setDescription($lead->getDescription());
            $opp->setAmount($lead->getAmount());
            $opp->setIdUser($loggedinUser);
            $opp->setIdAccount($acc);
            $opp->setProbability($FormConverted["probability"]);
            $opp->setProduct($FormConverted["product"]);
            $stageopp = $this->stagesRepository->find($FormConverted["id_stage"]);
            $opp->setIdStage($stageopp);
            $opp->setCloseDate(new \DateTimeImmutable($formattedDateTime));


            
            $department = $this->departmentsRepository->find($FormConverted["id_department"]);
            $opp->setIdDepartment($department);

            
            if($hasContact == True){
                $opp->setIdContact($contacts);
            }
            

            $source = $this->sourcesRepository->find($FormConverted["id_source"]);
            $opp->setIdSource($source);
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
            'form' => $form->createView(),
            'form2' => $form2->createView(),
            'form3' => $form3->createView(),
            'namelead' => $leadsFindNamelead,
            'nameacc' => $leadsFindNameacc,
            'descriptionlead' =>$leadsFindDescriptionlead
        ]);
    }
}
