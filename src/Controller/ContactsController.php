<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Repository\ContactsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactsController extends AbstractController
{
    private $contactsRepository;

    public function __construct(ContactsRepository $contactsRepository)
    {
        $this->contactsRepository = $contactsRepository;
    }

    #[Route('/contacts/list', methods:['GET'], name: 'app_contacts')]
    public function list(ContactsRepository $contactsRepository, Request $request): Response
    {
        $contact = $this->contactsRepository->findAll();

        return $this->render('contacts/list.html.twig',[
            'contacts' => $contact,
        ]);
    }
}
?>