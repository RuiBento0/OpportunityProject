<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Entity\Phones;
use App\Entity\Emails;
use App\Entity\Addresses;
use App\Entity\Entities;


use App\Repository\ContactsRepository;
use App\Repository\PhonesRepository;
use App\Repository\EmailsRepository;
use App\Repository\AddressesRepository;
use App\Repository\EntitiesRepository;


use App\Form\ContactsFormType;

use Symfony\Component\Security\Core\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class ContactsController extends AbstractController
{
    private $em;
    private $security;
    private $contactsRepository;
    private $phonesRepository;
    private $emailsRepository;
    private $addressesRepository;
    private $entitiesRepository;
    

    public function __construct(Security $security, ContactsRepository $contactsRepository, EntityManagerInterface $em, PhonesRepository $phonesRepository, EmailsRepository $emailsRepository, AddressesRepository $addressesRepository, EntitiesRepository $entitiesRepository)
    {
        $this->em = $em;
        $this->security = $security;
        $this->contactsRepository = $contactsRepository;
        $this->phonesRepository = $phonesRepository;
        $this->emailsRepository = $emailsRepository;
        $this->addressesRepository = $addressesRepository;
        $this->entitiesRepository = $entitiesRepository;
        
    }


    #[Route('/business/contacts/show/{id}', name: 'contacts_show')]
    public function showcontacts($id): Response
    {
        $contacts = $this->contactsRepository->find($id);

        return $this->render('contacts/show.html.twig',[
            'contacts' => $contacts
        ]);
    }

    #[Route('/business/contacts/edit/{id}', name: 'contacts_edit')]
    public function editcontacts($id, Request $request, Security $security): Response
    {
        $entity = 4;
        $idinrelation = $id; 

        $phones = $this->phonesRepository->findPhonebyId($entity, $idinrelation);
       /*  print_r($phones);
        die(); */
        $emails = $this->emailsRepository->findEmailbyId($entity, $idinrelation);
        $addresses = $this->addressesRepository->findAddressbyId($entity, $idinrelation);

        $contacts = $this->contactsRepository->find($id);
        $form = $this->createForm(ContactsFormType::class, $contacts);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $contacts=$form->getData();
            $contactA = $this->contactsRepository->find($id);
            
            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $contacts = $form->getData();

            $contacts->setUpdatedAt(new \DateTimeImmutable($now));
            $contacts->setUpdatedBy($loggedinUser);

            $this->em->persist($contacts);
            $this->em->flush();

            $phones = $this->phonesRepository->deletePhonebyId($entity, $idinrelation);

            $CreatedEntity = $this->entitiesRepository->find(4);
            $CreatedEntityId = $contactA->getId();


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

            $emails = $this->emailsRepository->deleteEmailbyId($entity, $idinrelation);

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
            $addresses = $this->addressesRepository->deleteAddressbyId($entity, $idinrelation);


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

            return $this->redirectToRoute('app_business_contacts');
        }

        return $this->render('contacts/edit.html.twig',[
            'form' => $form->createView(),
            'contacts' => $contacts,
            'phones' => $phones,
            'emails' => $emails,
            'addresses' => $addresses
        ]);
    }

    #[Route('/business/contacts/create', name: 'contacts_create')]
    public function createcontacts(Request $request, Security $security): Response
    {
        $contacts = new Contacts();
        $form = $this->createForm(ContactsFormType::class, $contacts);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $contacts=$form->getData();

            $loggedinUser = $security->getUser();
            $now = date('m/d/Y h:i:s');

            $contacts = $form->getData();

            $contacts->setUpdatedAt(new \DateTimeImmutable($now));
            $contacts->setCreatedAt(new \DateTimeImmutable($now));
            $contacts->setCreatedBy($loggedinUser);
            $contacts->setUpdatedBy($loggedinUser);

            $this->em->persist($contacts);
            $this->em->flush();

            $CreatedEntity = $this->entitiesRepository->find(4); 
            $CreatedEntityId = $contacts->getId();

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

            return $this->redirectToRoute('app_business_contacts');
        }
        
        return $this->render('contacts/create.html.twig',[
            'form' => $form->createView()
            
        ]);
    }

    #[Route('/business/contacts/delete/{id}', methods:['GET'], name: 'contacts_delete')]
    public function deletecontacts($id): Response
    {
        $entity = 4 ;
        $deletephones = $this->phonesRepository->DeletePhonebyId($entity, $id);
        $setnullopp = $this->contactsRepository->SetNullOpp($id);

        $contacts = $this->contactsRepository->find($id);
        $this->em->remove($contacts);
        $this->em->flush();

        return $this->redirectToRoute('app_business_contacts');
    }

    
}
?>