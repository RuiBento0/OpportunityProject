<?php

namespace App\Controller;


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

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Security;
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
use App\Form\LocationsFormType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;

class OptionsController extends AbstractController
{

    private $em;
    private $security;
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


    public function __construct(Security $security, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $em,LocationsRepository $locationsRepository, DepartmentsRepository $departmentsRepository, CategoriesRepository $categoriesRepository, EntitiesRepository $entitiesRepository, PrioritiesRepository $prioritiesRepository, StatusRepository $statusRepository, StagesRepository $stagesRepository, AreaRepository $areaRepository, AccountsTypeRepository $accountstypeRepository, CampaignRepository $campaignRepository, SourcesRepository $sourcesRepository)
    {
        $this->security = $security;
        $this->em = $em;
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
    }

    //                                    //
    //              locations            //
    //                                     //

    #[Route('/options/locations/show/{id}', name: 'locations_show')]
    public function showlocations($id): Response
    {
        $locations = $this->locationsRepository->find($id);

        return $this->render('locations/show.html.twig',[
            'locations' => $locations
        ]);
    }

    #[Route('/options/locations/edit/{id}', name: 'locations_edit')]
    public function editlocations($id, Request $request, Security $security): Response
    {
        $locations = $this->locationsRepository->find($id);
        $form = $this->createForm(LocationsFormType::class, $locations);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $locations=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $locations = $form->getData();

            $locations->setUpdatedAt(new \DateTimeImmutable($now));
            $locations->setUpdatedBy($loggedinUser);

            $this->em->persist($locations);
            $this->em->flush();

            return $this->redirectToRoute('app_options_locations');
        }

        return $this->render('locations/edit.html.twig',[
            'form' => $form->createView(),
            'locations' => $locations
        ]);
    }

    #[Route('/options/locations/create', name: 'locations_create')]
    public function createlocations(Request $request, Security $security): Response
    {
        $locations = new Locations();
        $form = $this->createForm(LocationsFormType::class, $locations);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $locations=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $locations = $form->getData();

            $locations->setUpdatedAt(new \DateTimeImmutable($now));
            $locations->setCreatedAt(new \DateTimeImmutable($now));
            $locations->setCreatedBy($loggedinUser);
            $locations->setUpdatedBy($loggedinUser);

            $this->em->persist($locations);
            $this->em->flush();

            return $this->redirectToRoute('app_options_locations');
        }
        
        return $this->render('locations/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/locations/delete/{id}', methods:['GET'], name: 'locations_delete')]
    public function deletelocations($id): Response
    {
        $locations = $this->locationsRepository->find($id);
        $form = $this->createForm(LocationsFormType::class, $locations);

        $locations = $this->locationsRepository->find($id);
        $this->em->remove($locations);
        $this->em->flush();

        return $this->redirectToRoute('app_options_locations');
    }


     //                                    //
    //              DEPARTMENTS            //
    //                                     //

    #[Route('/options/departments/show/{id}', name: 'departments_show')]
    public function showdepartments($id): Response
    {
        $department = $this->departmentsRepository->find($id);

        return $this->render('departments/show.html.twig',[
            'department' => $department
        ]);
    }

    #[Route('/options/departments/edit/{id}', name: 'departments_edit')]
    public function editdepartments($id, Request $request, Security $security): Response
    {
        $department = $this->departmentsRepository->find($id);
        $form = $this->createForm(DepartmentsFormType::class, $department);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $department=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $department = $form->getData();

            $department->setUpdatedAt(new \DateTimeImmutable($now));
            $department->setUpdatedBy($loggedinUser);

            $this->em->persist($department);
            $this->em->flush();

            return $this->redirectToRoute('app_options_departments');
        }

        return $this->render('departments/edit.html.twig',[
            'form' => $form->createView(),
            'department' => $department
        ]);
    }

    #[Route('/options/departments/create', name: 'departments_create')]
    public function createdepartments(Request $request, Security $security): Response
    {
        $department = new Departments();
        $form = $this->createForm(DepartmentsFormType::class, $department);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $department=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $department = $form->getData();

            $department->setUpdatedAt(new \DateTimeImmutable($now));
            $department->setCreatedAt(new \DateTimeImmutable($now));
            $department->setCreatedBy($loggedinUser);
            $department->setUpdatedBy($loggedinUser);

            $this->em->persist($department);
            $this->em->flush();

            return $this->redirectToRoute('app_options_departments');
        }
        
        return $this->render('departments/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/departments/delete/{id}', methods:['GET'], name: 'departments_delete')]
    public function deletedepartments($id): Response
    {
        $department = $this->departmentsRepository->find($id);
        $form = $this->createForm(DepartmentsFormType::class, $department);

        $department = $this->departmentsRepository->find($id);
        $this->em->remove($department);
        $this->em->flush();

        return $this->redirectToRoute('app_options_departments');
    }

    //                                    //
    //              CATEGORIES            //
    //                                     //

    #[Route('/options/categories/show/{id}', name: 'categories_show')]
    public function showcategories($id): Response
    {
        $categories = $this->categoriesRepository->find($id);

        return $this->render('categories/show.html.twig',[
            'categories' => $categories
        ]);
    }

    #[Route('/options/categories/edit/{id}', name: 'categories_edit')]
    public function editcategories($id, Request $request, Security $security): Response
    {
        $categories = $this->categoriesRepository->find($id);
        $form = $this->createForm(CategoriesFormType::class, $categories);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $categories=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $categories = $form->getData();

            $categories->setUpdatedAt(new \DateTimeImmutable($now));
            $categories->setUpdatedBy($loggedinUser);

            $this->em->persist($categories);
            $this->em->flush();

            return $this->redirectToRoute('app_options_categories');
        }

        return $this->render('categories/edit.html.twig',[
            'form' => $form->createView(),
            'categories' => $categories
        ]);
    }

    #[Route('/options/categories/create', name: 'categories_create')]
    public function createcategories(Request $request, Security $security): Response
    {
        $categories = new Categories();
        $form = $this->createForm(CategoriesFormType::class, $categories);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $categories=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $categories = $form->getData();

            $categories->setUpdatedAt(new \DateTimeImmutable($now));
            $categories->setCreatedAt(new \DateTimeImmutable($now));
            $categories->setCreatedBy($loggedinUser);
            $categories->setUpdatedBy($loggedinUser);

            $this->em->persist($categories);
            $this->em->flush();

            return $this->redirectToRoute('app_options_categories');
        }
        
        return $this->render('categories/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/categories/delete/{id}', methods:['GET'], name: 'categories_delete')]
    public function deletecategories($id): Response
    {
        $categories = $this->categoriesRepository->find($id);
        $form = $this->createForm(CategoriesFormType::class, $categories);

        $categories = $this->categoriesRepository->find($id);
        $this->em->remove($categories);
        $this->em->flush();

        return $this->redirectToRoute('app_options_categories');
    }

    //                                  //
    //              ENTITIES            //
    //                                  //

    #[Route('/options/entities/show/{id}', name: 'entities_show')]
    public function showentities($id): Response
    {
        $entity = $this->entitiesRepository->find($id);

        return $this->render('entities/show.html.twig',[
            'entity' => $entity
        ]);
    }

    #[Route('/options/entities/edit/{id}', name: 'entities_edit')]
    public function editentities($id, Request $request, Security $security): Response
    {
        $entities = $this->entitiesRepository->find($id);
        $form = $this->createForm(EntitiesFormType::class, $entities);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entities=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $entities = $form->getData();

            $entities->setUpdatedAt(new \DateTimeImmutable($now));
            $entities->setUpdatedBy($loggedinUser);

            $this->em->persist($entities);
            $this->em->flush();

            return $this->redirectToRoute('app_options_entities');
        }

        return $this->render('entities/edit.html.twig',[
            'form' => $form->createView(),
            'entities' => $entities
        ]);
    }

    #[Route('/options/entities/create', name: 'entities_create')]
    public function createentities(Request $request,  Security $security): Response
    {
        $entities = new Entities();
        $form = $this->createForm(EntitiesFormType::class, $entities);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entities=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $entities = $form->getData();

            $entities->setUpdatedAt(new \DateTimeImmutable($now));
            $entities->setCreatedAt(new \DateTimeImmutable($now));
            $entities->setCreatedBy($loggedinUser);
            $entities->setUpdatedBy($loggedinUser);

            $this->em->persist($entities);
            $this->em->flush();

            return $this->redirectToRoute('app_options_entities');
        }
        
        return $this->render('entities/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/entities/delete/{id}', methods:['GET'], name: 'entities_delete')]
    public function deleteentities($id): Response
    {
        $entities = $this->entitiesRepository->find($id);
        $form = $this->createForm(EntitiesFormType::class, $entities);

        $entities = $this->entitiesRepository->find($id);
        $this->em->remove($entities);
        $this->em->flush();

        return $this->redirectToRoute('app_options_entities');
    }

    //                                    //
    //              PRIORITIES            //
    //                                     //

    #[Route('/options/priorities/show/{id}', name: 'priorities_show')]
    public function showpriorities($id): Response
    {
        $priority = $this->prioritiesRepository->find($id);

        return $this->render('priorities/show.html.twig',[
            'priority' => $priority
        ]);
    }

    #[Route('/options/priorities/edit/{id}', name: 'priorities_edit')]
    public function editpriorities($id, Request $request, Security $security): Response
    {
        $priorities = $this->prioritiesRepository->find($id);
        $form = $this->createForm(PrioritiesFormType::class, $priorities);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $priorities=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $priorities = $form->getData();

            $priorities->setUpdatedAt(new \DateTimeImmutable($now));
            $priorities->setUpdatedBy($loggedinUser);

            $this->em->persist($priorities);
            $this->em->flush();

            return $this->redirectToRoute('app_options_priorities');
        }

        return $this->render('priorities/edit.html.twig',[
            'form' => $form->createView(),
            'priorities' => $priorities
        ]);
    }

    #[Route('/options/priorities/create', name: 'priorities_create')]
    public function createpriorities(Request $request, Security $security): Response
    {
        $priorities = new Priorities();
        $form = $this->createForm(PrioritiesFormType::class, $priorities);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $priorities=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $priorities = $form->getData();

            $priorities->setUpdatedAt(new \DateTimeImmutable($now));
            $priorities->setCreatedAt(new \DateTimeImmutable($now));
            $priorities->setCreatedBy($loggedinUser);
            $priorities->setUpdatedBy($loggedinUser);

            $this->em->persist($priorities);
            $this->em->flush();

            return $this->redirectToRoute('app_options_priorities');
        }
        
        return $this->render('priorities/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/priorities/delete/{id}', methods:['GET'], name: 'priorities_delete')]
    public function deletepriorities($id): Response
    {
        $priorities = $this->prioritiesRepository->find($id);
        $form = $this->createForm(PrioritiesFormType::class, $priorities);

        $priorities = $this->prioritiesRepository->find($id);
        $this->em->remove($priorities);
        $this->em->flush();

        return $this->redirectToRoute('app_options_priorities');
    }

    //                                //
    //              STATUS            //
    //                                 //

    #[Route('/options/status/show/{id}', name: 'status_show')]
    public function showstatus($id): Response
    {
        $status = $this->statusRepository->find($id);

        return $this->render('status/show.html.twig',[
            'status' => $status
        ]);
    }

    #[Route('/options/status/edit/{id}', name: 'status_edit')]
    public function editstatus($id, Request $request, Security $security): Response
    {
        $status = $this->statusRepository->find($id);
        $form = $this->createForm(StatusFormType::class, $status);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $status=$form->getData();

            $priorities = $form->getData();

            $priorities->setUpdateAt(new \DateTimeImmutable($now));
            $priorities->setUpdatedBy($loggedinUser);

            $this->em->persist($status);
            $this->em->flush();

            return $this->redirectToRoute('app_options_status');
        }

        return $this->render('status/edit.html.twig',[
            'form' => $form->createView(),
            'status' => $status
        ]);
    }

    #[Route('/options/status/create', name: 'status_create')]
    public function createstatus(Request $request, Security $security): Response
    {
        $status = new Status();
        $form = $this->createForm(StatusFormType::class, $status);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $status=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $status = $form->getData();

            $status->setUpdateAt(new \DateTimeImmutable($now));
            $status->setCreatedAt(new \DateTimeImmutable($now));
            $status->setCreatedBy($loggedinUser);
            $status->setUpdatedBy($loggedinUser);

            $this->em->persist($status);
            $this->em->flush();

            return $this->redirectToRoute('app_options_status');
        }
        
        return $this->render('status/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/status/delete/{id}', methods:['GET'], name: 'status_delete')]
    public function deletestatus($id): Response
    {
        $status = $this->statusRepository->find($id);
        $form = $this->createForm(StatusFormType::class, $status);

        $status = $this->statusRepository->find($id);
        $this->em->remove($status);
        $this->em->flush();

        return $this->redirectToRoute('app_options_status');
    }

    //                                //
    //              STAGES            //
    //                                //

    #[Route('/options/stages/show/{id}', name: 'stages_show')]
    public function showstages($id): Response
    {
        $stages = $this->stagesRepository->find($id);

        return $this->render('stages/show.html.twig',[
            'stages' => $stages
        ]);
    }

    #[Route('/options/stages/edit/{id}', name: 'stages_edit')]
    public function editstages($id, Request $request, Security $security): Response
    {
        $stages = $this->stagesRepository->find($id);
        $form = $this->createForm(StagesFormType::class, $stages);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $stages=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $stages = $form->getData();

            $stages->setUpdatedAt(new \DateTimeImmutable($now));
            $stages->setUpdatedBy($loggedinUser);

            $this->em->persist($stages);
            $this->em->flush();

            return $this->redirectToRoute('app_options_stages');
        }

        return $this->render('stages/edit.html.twig',[
            'form' => $form->createView(),
            'stages' => $stages
        ]);
    }

    #[Route('/options/stages/create', name: 'stages_create')]
    public function createstages(Request $request, Security $security): Response
    {
        $stages = new Stages();
        $form = $this->createForm(StagesFormType::class, $stages);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $stages=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $stages = $form->getData();

            $stages->setUpdatedAt(new \DateTimeImmutable($now));
            $stages->setCreatedAt(new \DateTimeImmutable($now));
            $stages->setCreatedBy($loggedinUser);
            $stages->setUpdatedBy($loggedinUser);

            $this->em->persist($stages);
            $this->em->flush();

            return $this->redirectToRoute('app_options_stages');
        }
        
        return $this->render('stages/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/stages/delete/{id}', methods:['GET'], name: 'stages_delete')]
    public function deletestages($id): Response
    {
        $stages = $this->stagesRepository->find($id);
        $form = $this->createForm(StagesFormType::class, $stages);

        $stages = $this->stagesRepository->find($id);
        $this->em->remove($stages);
        $this->em->flush();

        return $this->redirectToRoute('app_options_stages');
    }

    //                              //
    //              AREA            //
    //                               //

    #[Route('/options/area/show/{id}', name: 'area_show')]
    public function showarea($id): Response
    {
        $area = $this->areaRepository->find($id);

        return $this->render('area/show.html.twig',[
            'area' => $area
        ]);
    }

    #[Route('/options/area/edit/{id}', name: 'area_edit')]
    public function editarea($id, Request $request, Security $security): Response
    {
        $area = $this->areaRepository->find($id);
        $form = $this->createForm(AreaFormType::class, $area);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $area=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $area = $form->getData();

            $area->setUpdatedAt(new \DateTimeImmutable($now));
            $area->setUpdatedBy($loggedinUser);

            $this->em->persist($area);
            $this->em->flush();

            return $this->redirectToRoute('app_options_area');
        }

        return $this->render('area/edit.html.twig',[
            'form' => $form->createView(),
            'area' => $area
        ]);
    }

    #[Route('/options/area/create', name: 'area_create')]
    public function createarea(Request $request, Security $security): Response
    {
        $area = new Area();
        $form = $this->createForm(AreaFormType::class, $area);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $area=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $area = $form->getData();

            $area->setUpdatedAt(new \DateTimeImmutable($now));
            $area->setCreatedAt(new \DateTimeImmutable($now));
            $area->setCreatedBy($loggedinUser);
            $area->setUpdatedBy($loggedinUser);

            $this->em->persist($area);
            $this->em->flush();

            return $this->redirectToRoute('app_options_area');
        }
        
        return $this->render('area/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/area/delete/{id}', methods:['GET'], name: 'area_delete')]
    public function deletearea($id): Response
    {
        $area = $this->areaRepository->find($id);
        $form = $this->createForm(AreaFormType::class, $area);

        $area = $this->areaRepository->find($id);
        $this->em->remove($area);
        $this->em->flush();

        return $this->redirectToRoute('app_options_area');
    }

     //                                    //
    //              ACCOUNT TYPE           //
    //                                     //

    #[Route('/options/accountstype/show/{id}', name: 'accountstype_show')]
    public function showaccountstype($id): Response
    {
        $accountstype = $this->accountstypeRepository->find($id);

        return $this->render('accountstype/show.html.twig',[
            'accountstype' => $accountstype
        ]);
    }

    #[Route('/options/accountstype/edit/{id}', name: 'accountstype_edit')]
    public function editaccountstype($id, Request $request, Security $security): Response
    {
        $accountstype = $this->accountstypeRepository->find($id);
        $form = $this->createForm(TypesFormType::class, $accountstype);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $accountstype=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $accountstype = $form->getData();

            $accountstype->setUpdatedAt(new \DateTimeImmutable($now));
            $accountstype->setUpdatedBy($loggedinUser);

            $this->em->persist($accountstype);
            $this->em->flush();

            return $this->redirectToRoute('app_options_accountstype');
        }

        return $this->render('accountstype/edit.html.twig',[
            'form' => $form->createView(),
            'accountstype' => $accountstype
        ]);
    }

    #[Route('/options/accountstype/create', name: 'accountstype_create')]
    public function createaccountstype(Request $request, Security $security): Response
    {
        $accountstype = new AccountsType();
        $form = $this->createForm(TypesFormType::class, $accountstype);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $accountstype=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $accountstype = $form->getData();

            $accountstype->setUpdatedAt(new \DateTimeImmutable($now));
            $accountstype->setCreatedAt(new \DateTimeImmutable($now));
            $accountstype->setCreatedBy($loggedinUser);
            $accountstype->setUpdatedBy($loggedinUser);

            $this->em->persist($accountstype);
            $this->em->flush();

            return $this->redirectToRoute('app_options_accountstype');
        }
        
        return $this->render('accountstype/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/accountstype/delete/{id}', methods:['GET'], name: 'accountstype_delete')]
    public function deleteaccountstype($id): Response
    {
        $accountstype = $this->accountstypeRepository->find($id);
        $form = $this->createForm(TypesFormType::class, $accountstype);

        $accountstype = $this->accountstypeRepository->find($id);
        $this->em->remove($accountstype);
        $this->em->flush();

        return $this->redirectToRoute('app_options_accountstype');
    }


     //                                 //
    //              CAMPAIGN           //
    //                                 //

    #[Route('/options/campaign/show/{id}', name: 'campaign_show')]
    public function showcampaign($id): Response
    {
        $campaign = $this->campaignRepository->find($id);

        return $this->render('campaign/show.html.twig',[
            'campaign' => $campaign
        ]);
    }

    #[Route('/options/campaign/edit/{id}', name: 'campaign_edit')]
    public function editcampaign($id, Request $request, Security $security): Response
    {
        $campaign = $this->campaignRepository->find($id);
        $form = $this->createForm(CampaignFormType::class, $campaign);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $campaign=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $campaign = $form->getData();

            $campaign->setUpdatedAt(new \DateTimeImmutable($now));
            $campaign->setUpdatedBy($loggedinUser);

            $this->em->persist($campaign);
            $this->em->flush();

            return $this->redirectToRoute('app_options_campaign');
        }

        return $this->render('campaign/edit.html.twig',[
            'form' => $form->createView(),
            'campaign' => $campaign
        ]);
    }

    #[Route('/options/campaign/create', name: 'campaign_create')]
    public function createcampaign(Request $request, Security $security): Response
    {
        $campaign = new Campaign();
        $form = $this->createForm(CampaignFormType::class, $campaign);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $campaign=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $campaign = $form->getData();

            $campaign->setUpdatedAt(new \DateTimeImmutable($now));
            $campaign->setCreatedAt(new \DateTimeImmutable($now));
            $campaign->setCreatedBy($loggedinUser);
            $campaign->setUpdatedBy($loggedinUser);

            $this->em->persist($campaign);
            $this->em->flush();

            return $this->redirectToRoute('app_options_campaign');
        }
        
        return $this->render('campaign/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/campaign/delete/{id}', methods:['GET'], name: 'campaign_delete')]
    public function deletecampaign($id): Response
    {
        $campaign = $this->campaignRepository->find($id);
        $form = $this->createForm(CampaignFormType::class, $campaign);

        $campaign = $this->campaignRepository->find($id);
        $this->em->remove($campaign);
        $this->em->flush();

        return $this->redirectToRoute('app_options_campaign');
    }

     //                                 //
    //              SOURCE           //
    //                                 //

    #[Route('/options/sources/show/{id}', name: 'sources_show')]
    public function showcsource($id): Response
    {
        $sources = $this->sourcesRepository->find($id);

        return $this->render('sources/show.html.twig',[
            'sources' => $sources
        ]);
    }

    #[Route('/options/sources/edit/{id}', name: 'sources_edit')]
    public function editcsource($id, Request $request, Security $security): Response
    {
        $sources = $this->sourcesRepository->find($id);
        $form = $this->createForm(SourceFormType::class, $sources);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $sources=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $sources = $form->getData();

            $sources->setUpdatedAt(new \DateTimeImmutable($now));
            $sources->setUpdatedBy($loggedinUser);

            $this->em->persist($sources);
            $this->em->flush();

            return $this->redirectToRoute('app_options_sources');
        }

        return $this->render('sources/edit.html.twig',[
            'form' => $form->createView(),
            'sources' => $sources
        ]);
    }

    #[Route('/options/sources/create', name: 'sources_create')]
    public function createsources(Request $request, Security $security): Response
    {
        $sources = new Sources();
        $form = $this->createForm(SourceFormType::class, $sources);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $sources=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $sources = $form->getData();

            $sources->setUpdatedAt(new \DateTimeImmutable($now));
            $sources->setCreatedAt(new \DateTimeImmutable($now));
            $sources->setCreatedBy($loggedinUser);
            $sources->setUpdatedBy($loggedinUser);

            $this->em->persist($sources);
            $this->em->flush();

            return $this->redirectToRoute('app_options_sources');
        }
        
        return $this->render('sources/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/options/sources/delete/{id}', name: 'sources_delete')]
    public function deletesources($id): Response
    {
        $sources = $this->sourcesRepository->find($id);
        $form = $this->createForm(SourceFormType::class, $sources);

        $sources = $this->sourceRepository->find($id);
        $this->em->remove($sources);
        $this->em->flush();

        return $this->redirectToRoute('app_options_sources');
    }

}