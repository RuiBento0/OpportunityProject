<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use App\Repository\RolesRepository;
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
use App\Repository\ContactsRepository;
use App\Repository\AccountsRepository;
use App\Repository\LeadsRepository;
use App\Form\UserFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class MainController extends AbstractController
{
    private $em;
    private $userRepository;
    private $rolesRepository;
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
    private $accountsRepository;
    private $contactsRepository;
    private $leadsRepository;
    private $opportunitiesRepository;

    public function __construct(EntityManagerInterface $em, UsersRepository $usersRepository, RolesRepository $rolesRepository, DepartmentsRepository $departmentsRepository, CategoriesRepository $categoriesRepository, EntitiesRepository $entitiesRepository, PrioritiesRepository $prioritiesRepository, StatusRepository $statusRepository, StagesRepository $stagesRepository, AreaRepository $areaRepository, AccountsTypeRepository $accountstypeRepository, CampaignRepository $campaignRepository, SourcesRepository $sourcesRepository, LocationsRepository $locationsRepository, ContactsRepository $contactsRepository, AccountsRepository $accountsRepository, LeadsRepository $leadsRepository, OpportunitiesRepository $opportunitiesRepository)
    {
        $this->em = $em;
        $this->usersRepository = $usersRepository;
        $this->rolesRepository = $rolesRepository;
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
        $this->accountsRepository = $accountsRepository;
        $this->contactsRepository = $contactsRepository;
        $this->leadsRepository = $leadsRepository;
        $this->opportunitiesRepository = $opportunitiesRepository;
    }

    #[Route('/index', name: 'app_index')]
    public function index2(): Response
    {
        $accounts = $this->accountsRepository->findAll();
        $accountscount = $this->accountsRepository->countAccounts();
        $newcountaccounts = $this->accountsRepository->newcountAccounts();
        $newcountopportunities = $this->opportunitiesRepository->newcountOpportunities();
        $newcountleads = $this->leadsRepository->newcountLeads();
        $users = $this->usersRepository->findAll();

        return $this->render('/index.html.twig',[
            'users' => $users,
            'accounts' => $accounts,
            'accountscount' => $accountscount,
            'newcountaccounts' => $newcountaccounts,
            'newcountopportunities' => $newcountopportunities,
            'newcountleads' => $newcountleads
        ]);
    }

    #[Route('/options', methods:['GET'], name: 'app_options')]
    public function index(): Response
    {
        return $this->render('options/options.html.twig', [
      
        ]);
    }

    #[Route('/authentication/users', name: 'app_authentication_users')]
    public function listusers(): Response
    {
        $users = $this->usersRepository->findAll();

        return $this->render('authentication/users.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/authentication/roles', name: 'app_authentication_roles')]
    public function listroles(): Response
    {
        $roles = $this->rolesRepository->findAll();

        return $this->render('authentication/roles.html.twig', [
            'roles' => $roles,
        ]);
    }

    #[Route('/options/departments', methods:['GET'], name: 'app_options_departments')]
    public function listdepartments(): Response
    {
        $departments = $this->departmentsRepository->findAll();

        return $this->render('options/departments.html.twig', [
            'departments' => $departments,
        ]);
    }

    #[Route('/options/categories', methods:['GET'], name: 'app_options_categories')]
    public function listcategories(): Response
    {
        $categories = $this->categoriesRepository->findAll();

        return $this->render('options/categories.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/options/entities', methods:['GET'], name: 'app_options_entities')]
    public function listentities(): Response
    {
        $entities = $this->entitiesRepository->findAll();

        return $this->render('options/entities.html.twig', [
            'entities' => $entities,
        ]);
    }

    #[Route('/options/priorities', methods:['GET'], name: 'app_options_priorities')]
    public function listpriorities(): Response
    {
        $priorities = $this->prioritiesRepository->findAll();

        return $this->render('options/priorities.html.twig', [
            'priorities' => $priorities,
        ]);
    }

    #[Route('/options/status', methods:['GET'], name: 'app_options_status')]
    public function liststatus(): Response
    {
        $status = $this->statusRepository->findAll();

        return $this->render('options/status.html.twig', [
            'status' => $status,
        ]);
    }

    #[Route('/options/stages', methods:['GET'], name: 'app_options_stages')]
    public function liststages(): Response
    {
        $stages = $this->stagesRepository->findAll();

        return $this->render('options/stages.html.twig', [
            'stages' => $stages,
        ]);
    }

    #[Route('/options/area', methods:['GET'], name: 'app_options_area')]
    public function listarea(): Response
    {
        $area = $this->areaRepository->findAll();

        return $this->render('options/area.html.twig', [
            'area' => $area,
        ]);
    }

    #[Route('/options/accountstype', methods:['GET'], name: 'app_options_accountstype')]
    public function listaccountstype(): Response
    {
        $accountstype = $this->accountstypeRepository->findAll();

        return $this->render('options/accountstype.html.twig', [
            'accountstype' => $accountstype,
        ]);
    }

    #[Route('/options/campaign',  name: 'app_options_campaign')]
    public function listcampaign(): Response
    {
        $campaign = $this->campaignRepository->findAll();

        return $this->render('options/campaign.html.twig', [
            'campaign' => $campaign,
        ]);
    }

    #[Route('/options/source', name: 'app_options_sources')]
    public function listsources(): Response
    {
        $sources = $this->sourcesRepository->findAll();

        return $this->render('options/sources.html.twig', [
            'sources' => $sources,
        ]);
    }

    #[Route('/options/locations', name: 'app_options_locations')]
    public function listlocations(): Response
    {
        $locations = $this->locationsRepository->findAll();

        return $this->render('options/locations.html.twig', [
            'locations' => $locations,
        ]);
    }

    #[Route('/work', methods:['GET'], name: 'app_work')]
    public function listwork(): Response
    {
        $leads = $this->leadsRepository->findAll();
        $status = 1;
        $OppQualification = $this->opportunitiesRepository->findByStatus($status);
        $status = 2;
        $OppProposal = $this->opportunitiesRepository->findByStatus($status);
        $status = 3;
        $OppNegotiation = $this->opportunitiesRepository->findByStatus($status);
        $status = 4;
        $OppClosedWon = $this->opportunitiesRepository->findByStatus($status);
        $status = 5;
        $OppClosedLost = $this->opportunitiesRepository->findByStatus($status);

        return $this->render('work/index.html.twig', [
            'leads' => $leads,
            'OppQualification' => $OppQualification,
            'OppProposal' => $OppProposal,
            'OppNegotiation' => $OppNegotiation,
            'OppClosedWon' => $OppClosedWon,
            'OppClosedLost' => $OppClosedLost,
        ]);
    }

    #[Route('/business/contacts', methods:['GET'], name: 'app_business_contacts')]
    public function listcontacts(): Response
    {
        $contacts = $this->contactsRepository->listContacts();

        return $this->render('business/contacts.html.twig', [
            'contacts' => $contacts,

        ]);
    }

    #[Route('/business/accounts', methods:['GET'], name: 'app_business_accounts')]
    public function listaccounts(): Response
    {
        $accounts = $this->accountsRepository->listAccounts();

        return $this->render('business/accounts.html.twig', [
            'accounts' => $accounts,
        ]);
    }

    #[Route('/business/leads', methods:['GET'], name: 'app_business_leads')]
    public function listleads(): Response
    {
        $leads = $this->leadsRepository->findAll();

        return $this->render('business/leads.html.twig', [
            'leads' => $leads,
        ]);
    }

    #[Route('/business/opportunities', methods:['GET'], name: 'app_business_opportunities')]
    public function listopportunities(): Response
    {
        $opportunities = $this->opportunitiesRepository->findAll();
    
        return $this->render('business/opportunities.html.twig', [
            'opportunities' => $opportunities,
        ]);
    }

    #[Route('/profile/{id}', name: 'app_profile')]
    public function listprofile($id, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = $this->usersRepository->find($id);
        $form = $this->createForm(UserFormType::class, $user);

        if(isset($_POST["passwordOld"])){

            $DBPassword= $user->getPassword();

            $DBPassword = $userPasswordHasher->hashPassword(
                $user,
                $user->getPassword()
            );

            $oldpass = $userPasswordHasher->hashPassword(
                $user,
                $_POST["passwordOld"]
            );

            $newpassword = $userPasswordHasher->hashPassword(
                $user,
                $_POST["passwordNew"]
            );

            print_r($DBPassword);
            print_r('<br>');
            print_r($oldpass);


            if (!$userPasswordHasher->isPasswordValid($user, $oldpass)) {
                $user->setPassword($newpassword);
                $this->em->persist($user);
                $this->em->flush();
            }else{
                echo"error1";
                die();
            }
            
          echo "success";

        }


        if(isset($_POST["email"])){

            $email=$_POST["email"];
            $name=$_POST["name"];

            $user->setEmail($email);
            $user->setName($name);

            $this->em->persist($user);
            $this->em->flush();
        }

        if(isset($_POST["UserId"])){


            $now = date('mdY');

            $imgname = $_POST["UserId"].$now.$_FILES['imageToUpload']['name'];
            move_uploaded_file($_FILES['imageToUpload']['tmp_name'], "uploads/userimg/".$imgname);

            $user->setPhoto($imgname);
            $this->em->persist($user);
            $this->em->flush();
        }


        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/', methods:['GET'], name: 'app_main')]
    public function main(): Response
    {
        return $this->render('main/index.html.twig', [
      
        ]);
    }

    #[Route('/support/reports', methods:['GET'], name: 'app_support_reports')]
    public function reports(): Response
    {
        return $this->render('support/reports.html.twig', [
      
        ]);
    }
}