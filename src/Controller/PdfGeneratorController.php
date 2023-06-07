<?php
 
namespace App\Controller;
 
use App\Entity\Users;
use App\Repository\UsersRepository;
use App\Entity\Accounts;
use App\Repository\AccountsRepository;
use App\Entity\Contacts;
use App\Repository\ContactsRepository;
use App\Repository\EmailsRepository;
use App\Repository\PhonesRepository;
use App\Entity\Opportunities;
use App\Entity\Leads;
use App\Repository\OpportunitiesRepository;
use App\Repository\LeadsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
 
class PdfGeneratorController extends AbstractController
{
    private $accountsRepository;
    private $contactsRepository;
    private $usersRepository;
    private $emailsRepository;
    private $phonesRepository;
    private $opportunitiesRepository;
    private $leadssRepository;

public function __construct(AccountsRepository $accountsRepository, ContactsRepository $contactsRepository, UsersRepository $usersRepository, PhonesRepository $phonesRepository, EmailsRepository $emailsRepository, LeadsRepository $leadsRepository, OpportunitiesRepository $opportunitiesRepository)
{
    $this->accountsRepository = $accountsRepository;
    $this->contactsRepository = $contactsRepository;
    $this->usersRepository = $usersRepository;
    $this->emailsRepository = $emailsRepository;
    $this->phonesRepository = $phonesRepository;
    $this->opportunitiesRepository = $opportunitiesRepository;
    $this->leadsRepository = $leadsRepository;
}

    #[Route('/pdf/generator/{entity}', methods:['GET'], name: 'app_pdf_generator')]
    public function pdfgenerator($entity): Response
    {
            switch ($entity) {
            case 'accounts':

                $accounts = $this->accountsRepository->findAll();

                $data = [
                   'accounts' => $accounts,
                ];
                $html =  $this->renderView('pdf_generator/accounts.html.twig', $data);
                break;

            case 'contacts':

                $contacts = $this->contactsRepository->findAll();

                $data = [
                    'contacts' => $contacts,
                ];
                $html =  $this->renderView('pdf_generator/contacts.html.twig', $data);

                break;

            case 'users':

                $users = $this->usersRepository->findAll();

                $data = [
                    'users' => $users,
                ];
                $html =  $this->renderView('pdf_generator/users.html.twig', $data);

                break;

            case 'leads':
                $leads = $this->leadsRepository->findAll();

                $data = [
                    'leads' => $leads,
                ];
                $html =  $this->renderView('pdf_generator/leads.html.twig', $data);

                break;

            case 'opportunities':
                $opportunities = $this->opportunitiesRepository->findAll();

                $data = [
                    'opportunities' => $opportunities,
                ];
                $html =  $this->renderView('pdf_generator/opportunities.html.twig', $data);

                break;
            
            default:

                break;
        }

        
        $dompdf = new Dompdf();
        $dompdf->set_option("enable_remote", true);
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response (
            $dompdf->stream('resume', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    #[Route('/pdf/generator/accounts/{id}', methods:['GET'], name: 'app_pdf_generator_accounts')]
    public function pdfgeneratoraccounts($id): Response
    {
                $accounts = $this->accountsRepository->find($id);

                $data = [
                   'accounts' => $accounts,
                ];
                $html =  $this->renderView('pdf_generator/accountshow.html.twig', $data);

        

        $dompdf = new Dompdf();
        $dompdf->set_option("enable_remote", true);
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response (
            $dompdf->stream('Accounts', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    #[Route('/pdf/generator/contacts/{id}', methods:['GET'], name: 'app_pdf_generator_contacts')]
    public function pdfgeneratorcontacts($id): Response
    {
                $contacts = $this->contactsRepository->find($id);

                $data = [
                   'contacts' => $contacts,
                ];
                $html =  $this->renderView('pdf_generator/contactshow.html.twig', $data);

        
        $dompdf = new Dompdf();
        $dompdf->set_option("enable_remote", true);
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response (
            $dompdf->stream('Contacts', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    #[Route('/pdf/generator/leads/{id}', methods:['GET'], name: 'app_pdf_generator_leads')]
    public function pdfgeneratorleads($id): Response
    {
                $leads = $this->leadsRepository->find($id);

                $data = [
                   'leads' => $leads,
                ];
                $html =  $this->renderView('pdf_generator/leadshow.html.twig', $data);

        
        $dompdf = new Dompdf();
        $dompdf->set_option("enable_remote", true);
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response (
            $dompdf->stream('Leads', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    #[Route('/pdf/generator/opportunities/{id}', methods:['GET'], name: 'app_pdf_generator_opportunities')]
    public function pdfgeneratoropportunities($id): Response
    {
                $opportunities = $this->opportunitiesRepository->find($id);

                $data = [
                   'opportunities' => $opportunities,
                ];
                $html =  $this->renderView('pdf_generator/opportunitieshow.html.twig', $data);

        
        $dompdf = new Dompdf();
        $dompdf->set_option("enable_remote", true);
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response (
            $dompdf->stream('Opportunities', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }


 
    private function imageToBase64($path) {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }
}