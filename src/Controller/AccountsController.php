<?php

namespace App\Controller;

use App\Entity\Accounts;
use App\Entity\Phones;
use App\Entity\Emails;
use App\Entity\Addresses;
use App\Entity\Entities;
use App\Entity\Departments;

use App\Repository\AccountsRepository;
use App\Repository\PhonesRepository;
use App\Repository\EmailsRepository;
use App\Repository\AddressesRepository;
use App\Repository\EntitiesRepository;
use App\Repository\DepartmentsRepository;

use App\Form\AccountsFormType;
use App\Form\DepartmentsFormType;

use Symfony\Component\Security\Core\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class AccountsController extends AbstractController
{
    private $em;
    private $security;
    private $accountsRepository;
    private $phonesRepository;
    private $emailsRepository;
    private $addressesRepository;
    private $entitiesRepository;
    private $departmentsRepository;


    public function __construct(Security $security, AccountsRepository $accountsRepository, EntityManagerInterface $em, PhonesRepository $phonesRepository, EmailsRepository $emailsRepository, AddressesRepository $addressesRepository, EntitiesRepository $entitiesRepository, DepartmentsRepository $departmentsRepository)
    {
        $this->em = $em;
        $this->security = $security;
        $this->accountsRepository = $accountsRepository;
        $this->phonesRepository = $phonesRepository;
        $this->emailsRepository = $emailsRepository;
        $this->addressesRepository = $addressesRepository;
        $this->entitiesRepository = $entitiesRepository;
        $this->departmentsRepository = $departmentsRepository;
    }


    #[Route('/business/accounts/show/{id}', name: 'accounts_show')]
    public function showaccounts($id): Response
    {
        $accounts = $this->accountsRepository->find($id);

        return $this->render('accounts/show.html.twig',[
            'accounts' => $accounts
        ]);
    }

    #[Route('/business/accounts/edit/{id}', name: 'accounts_edit')]
    public function editaccounts($id, Request $request, Security $security): Response
    {
        $entity = 3;
        $idinrelation = $id; 

        $phones = $this->phonesRepository->findPhonebyId($entity, $idinrelation);       
        $emails = $this->emailsRepository->findEmailbyId($entity, $idinrelation);
        $addresses = $this->addressesRepository->findAddressbyId($entity, $idinrelation);

        $accounts = $this->accountsRepository->find($id);
        $form = $this->createForm(AccountsFormType::class, $accounts);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $accounts=$form->getData();
            $accountA = $this->accountsRepository->find($id);
            
            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $accounts = $form->getData();

            $accounts->setUpdatedAt(new \DateTimeImmutable($now));
            $accounts->setUpdatedBy($loggedinUser);

            $this->em->persist($accounts);
            $this->em->flush();

            $emails = $this->emailsRepository->deleteEmailbyId($entity, $idinrelation);
            $addresses = $this->addressesRepository->deleteAddressbyId($entity, $idinrelation);
            $phones = $this->phonesRepository->deletePhonebyId($entity, $idinrelation);

            $CreatedEntity = $this->entitiesRepository->find(3);
            $CreatedEntityId = $accountA->getId();

            if(isset($_POST["phone"]))
            {
            $countArrayPhone= count($_POST["phone"]);
                for ($i=0; $i<$countArrayPhone ; $i++) { 
                    $newphone = new Phones();
                    $newphone->setIdEntity($CreatedEntity);
                    $newphone->setIdInRelation($CreatedEntityId);
                    $newphone->setPhone($_POST["phone"][$i]);
                    $this->em->persist($newphone);
                    $this->em->flush();
                }
            }

            if(isset($_POST["email"]))
            {
                $countArrayEmail= count($_POST["email"]);
                for ($i=0; $i<$countArrayEmail ; $i++) { 
                    $newemail = new Emails();
                    $newemail->setIdEntity($CreatedEntity);
                    $newemail->setIdInRelation($CreatedEntityId);
                    $newemail->setEmail($_POST["email"][$i]);
                    $this->em->persist($newemail);
                    $this->em->flush();
                }
            }


            if(isset($_POST["addressaddress"]))
            {
            $countArrayAddress= count($_POST["addressaddress"]);

                for ($i=0; $i<$countArrayAddress ; $i++) { 
                    $newaddress = new Addresses();
                    $newaddress->setIdEntity($CreatedEntity);
                    $newaddress->setIdInRelation($CreatedEntityId);
                    $newaddress->setAddress($_POST["addressaddress"][$i]);
                    $newaddress->setCity($_POST["addresscity"][$i]);
                    $newaddress->setPostalCode($_POST["addresspostalcode"][$i]);
                    $this->em->persist($newaddress);
                    $this->em->flush();
                }
            }

            return $this->redirectToRoute('app_business_accounts');
        }

        return $this->render('accounts/edit.html.twig',[
            'form' => $form->createView(),
            'accounts' => $accounts,
            'phones' => $phones,
            'emails' => $emails,
            'addresses' => $addresses
        ]);
     }
    

    #[Route('/business/accounts/create', name: 'accounts_create')]
    public function createaccounts(Request $request, Security $security): Response
    {
        $accounts = new Accounts();
        $form = $this->createForm(AccountsFormType::class, $accounts);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $accounts=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $newAccount = $form->getData();

            $newAccount->setUpdatedAt(new \DateTimeImmutable($now));
            $newAccount->setCreatedAt(new \DateTimeImmutable($now));
            $newAccount->setCreatedBy($loggedinUser);
            $newAccount->setUpdatedBy($loggedinUser);

            $this->em->persist($accounts);
            $this->em->flush();

            $CreatedEntity = $this->entitiesRepository->find(3); 
            $CreatedEntityId = $newAccount->getId();

            if(isset($_POST["phone"]))
            {
            $countArrayPhone= count($_POST["phone"]);
                for ($i=0; $i<$countArrayPhone ; $i++) { 
                    $newphone = new Phones();
                    $newphone->setIdEntity($CreatedEntity);
                    $newphone->setIdInRelation($CreatedEntityId);
                    $newphone->setPhone($_POST["phone"][$i]);
                    $this->em->persist($newphone);
                    $this->em->flush();
                }
            }

            if(isset($_POST["email"]))
            {
            $countArrayEmail= count($_POST["email"]);
                for ($i=0; $i<$countArrayEmail ; $i++) { 
                    $newemail = new Emails();
                    $newemail->setIdEntity($CreatedEntity);
                    $newemail->setIdInRelation($CreatedEntityId);
                    $newemail->setEmail($_POST["email"][$i]);
                    $this->em->persist($newemail);
                    $this->em->flush();
                }
            }

            if(isset($_POST["addressaddress"]))
            {
            $countArrayAddress= count($_POST["addressaddress"]);

                for ($i=0; $i<$countArrayAddress ; $i++) { 
                    $newaddress = new Addresses();
                    $newaddress->setIdEntity($CreatedEntity);
                    $newaddress->setIdInRelation($CreatedEntityId);
                    $newaddress->setAddress($_POST["addressaddress"][$i]);
                    $newaddress->setCity($_POST["addresscity"][$i]);
                    $newaddress->setPostalCode($_POST["addresspostalcode"][$i]);
                    $this->em->persist($newaddress);
                    $this->em->flush();
                }
            }

            return $this->redirectToRoute('app_business_accounts');
        }
        
        return $this->render('accounts/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/business/accounts/delete/{id}', methods:['GET'], name: 'accounts_delete')]
    public function deletecontacts($id): Response
    {
        $entity = 3 ;
        $deletephones = $this->phonesRepository->DeletePhonebyId($entity, $id);
        $setnullopp = $this->accountsRepository->SetNullOpp($id);

        $accounts = $this->accountsRepository->find($id);
        $this->em->remove($accounts);
        $this->em->flush();

        return $this->redirectToRoute('app_business_accounts');
    }
}
?>