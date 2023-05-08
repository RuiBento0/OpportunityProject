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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
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

    public function __construct(UsersRepository $usersRepository, RolesRepository $rolesRepository, DepartmentsRepository $departmentsRepository, CategoriesRepository $categoriesRepository, EntitiesRepository $entitiesRepository, PrioritiesRepository $prioritiesRepository, StatusRepository $statusRepository, StagesRepository $stagesRepository, AreaRepository $areaRepository, AccountsTypeRepository $accountstypeRepository)
    {
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
    }

    #[Route('/options', methods:['GET'], name: 'app_options')]
    public function index(): Response
    {
        return $this->render('options/options.html.twig', [
      
        ]);
    }

    #[Route('/options/users', methods:['GET'], name: 'app_options_users')]
    public function listusers(): Response
    {
        $users = $this->usersRepository->findAll();

        return $this->render('options/users.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/options/roles', methods:['GET'], name: 'app_options_roles')]
    public function listroles(): Response
    {
        $roles = $this->rolesRepository->findAll();

        return $this->render('options/roles.html.twig', [
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


}