<?php

namespace App\Controller;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Entity\Users;
use App\Repository\UsersRepository;
use App\Entity\Accounts;
use App\Repository\AccountsRepository;
use App\Entity\AccountsType;
use App\Repository\AccountsTypeRepository;
use App\Entity\Area;
use App\Repository\AreaRepository;
use App\Entity\Departments;
use App\Repository\DepartmentsRepository;
use App\Entity\Stages;
use App\Repository\StagesRepository;
use App\Entity\Sources;
use App\Repository\SourcesRepository;
use App\Entity\Contacts;
use App\Repository\ContactsRepository;
use App\Entity\Campaign;
use App\Repository\CampaignRepository;
use App\Entity\Status;
use App\Repository\StatusRepository;
use App\Repository\EmailsRepository;
use App\Repository\PhonesRepository;
use App\Entity\Opportunities;
use App\Entity\Leads;


use Symfony\Component\Validator\Constraints\DateTime;
use App\Repository\OpportunitiesRepository;
use App\Repository\LeadsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Doctrine\ORM\EntityManagerInterface;
 
class ExcelGeneratorController extends AbstractController
{
    private $em;
    private $accountsRepository;
    private $accountstypeRepository;
    private $areaRepository;
    private $departmentsRepository;
    private $stagesRepository;
    private $sourcesRepository;
    private $contactsRepository;
    private $usersRepository;
    private $emailsRepository;
    private $phonesRepository;
    private $security;
    private $opportunitiesRepository;
    private $leadsRepository;
    private $campaignRepository;
    private $statusRepository;

    public function __construct(EntityManagerInterface $em  ,Security $security, AccountsTypeRepository $accountstypeRepository, AreaRepository $areaRepository, AccountsRepository $accountsRepository, ContactsRepository $contactsRepository, UsersRepository $usersRepository, PhonesRepository $phonesRepository, EmailsRepository $emailsRepository, LeadsRepository $leadsRepository, OpportunitiesRepository $opportunitiesRepository, DepartmentsRepository $departmentsRepository, StagesRepository $stagesRepository, SourcesRepository $sourcesRepository, CampaignRepository $campaignRepository, StatusRepository $statusRepository)
        {
            $this->accountsRepository = $accountsRepository;
            $this->accountstypeRepository = $accountstypeRepository;
            $this->areaRepository = $areaRepository;
            $this->departmentsRepository = $departmentsRepository;
            $this->stagesRepository = $stagesRepository;
            $this->statusRepository = $statusRepository;
            $this->campaignRepository = $campaignRepository;
            $this->sourcesRepository = $sourcesRepository;
            $this->contactsRepository = $contactsRepository;
            $this->usersRepository = $usersRepository;
            $this->emailsRepository = $emailsRepository;
            $this->phonesRepository = $phonesRepository;
            $this->security = $security;
            $this->opportunitiesRepository = $opportunitiesRepository;
            $this->leadsRepository = $leadsRepository;
            $this->em = $em;
        }

        #[Route('/excel/generator/accounts', name: 'app_excel_generator_accounts')]
        public function excelgeneratoraccounts(Security $security): Response
        {
            $loggedinaccounts = $security->getUser()->getId();
            $spreadsheet = new Spreadsheet();

            $spreadsheet->getActiveSheet()->setCellValue('A1',"Id");
            $spreadsheet->getActiveSheet()->setCellValue('B1',"Name");

            $cellRange = 'A1:B1';

            $style = $spreadsheet->getActiveSheet()->getStyle($cellRange);
            $font = $style->getFont();
            $font->setBold(true);

            $accounts = $this->accountsRepository->findAll();
            $i = 2;

            foreach($accounts as $account) {

                $spreadsheet->getActiveSheet()->setCellValue('A'.$i, $account->getId());
                $spreadsheet->getActiveSheet()->setCellValue('B'.$i, $account->getName());
                $i++;
            }

            foreach ($spreadsheet->getActiveSheet()->getColumnIterator() as $column) {
                $spreadsheet->getActiveSheet()->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
            }
    
            $writer = new Xlsx($spreadsheet);
            $filename = "exportfile".$loggedinaccounts."-".date("H-i-s");

            $writer->save('uploads/excel/'.$filename.'.xlsx');

            $filePath = 'uploads/excel/'.$filename.'.xlsx'; // Replace with the actual file path

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;
        }

        #[Route('/excel/generator/users',  name: 'app_excel_generator_users')]
        public function excelgeneratorusers(Security $security): Response
        {
            $loggedinuser = $security->getUser()->getId();
            $spreadsheet = new Spreadsheet();

            $spreadsheet->getActiveSheet()->setCellValue('A1',"Id");
            $spreadsheet->getActiveSheet()->setCellValue('B1',"Name");
            $spreadsheet->getActiveSheet()->setCellValue('C1',"Email");
            $spreadsheet->getActiveSheet()->setCellValue('D1',"Role");
            
            $cellRange = 'A1:D1';

            $style = $spreadsheet->getActiveSheet()->getStyle($cellRange);
            $font = $style->getFont();
            $font->setBold(true);

            $users = $this->usersRepository->findAll();
            $i = 2;

            foreach($users as $user) {

                $spreadsheet->getActiveSheet()->setCellValue('A'.$i, $user->getId());
                $spreadsheet->getActiveSheet()->setCellValue('B'.$i, $user->getName());
                $spreadsheet->getActiveSheet()->setCellValue('C'.$i, $user->getEmail());
                $spreadsheet->getActiveSheet()->setCellValue('D'.$i, $user->getUserRole()->getRole());
                $i++;
            }

            foreach ($spreadsheet->getActiveSheet()->getColumnIterator() as $column) {
                $spreadsheet->getActiveSheet()->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
            }
    
            $writer = new Xlsx($spreadsheet);
            $filename = "exportfile".$loggedinuser."-".date("H-i-s");
            

            $writer->save('uploads/excel/'.$filename.'.xlsx');
    
            $filePath = 'uploads/excel/'.$filename.'.xlsx'; // Replace with the actual file path

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;
        }

        #[Route('/excel/generator/contacts',  name: 'app_excel_generator_contacts')]
        public function excelgeneratorcontacts(Security $security): Response
        {
            $loggedincontacts = $security->getUser()->getId();
            $spreadsheet = new Spreadsheet();

            $spreadsheet->getActiveSheet()->setCellValue('A1', "Id");
            $spreadsheet->getActiveSheet()->setCellValue('B1', "Name");

            $cellRange = 'A1:B1'; // Define o intervalo de células

            $style = $spreadsheet->getActiveSheet()->getStyle($cellRange);
            $font = $style->getFont();
            $font->setBold(true);
            
            $contacts = $this->contactsRepository->findAll();
            $i = 2;

            foreach($contacts as $contact) {

                $spreadsheet->getActiveSheet()->setCellValue('A'.$i, $contact->getId());
                $spreadsheet->getActiveSheet()->setCellValue('B'.$i, $contact->getName());
                $i++;
            }

            foreach ($spreadsheet->getActiveSheet()->getColumnIterator() as $column) {
                $spreadsheet->getActiveSheet()->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
            }
    
            $writer = new Xlsx($spreadsheet);
            $filename = "exportfile".$loggedincontacts."-".date("H-i-s");

            $writer->save('uploads/excel/'.$filename.'.xlsx');

            $filePath = 'uploads/excel/'.$filename.'.xlsx'; // Replace with the actual file path

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;
        }

        #[Route('/excel/generator/leads', name: 'app_excel_generator_leads')]
        public function excelgeneratorleads(Security $security): Response
        {
            $loggedinleads = $security->getUser()->getId();
            $spreadsheet = new Spreadsheet();

            $spreadsheet->getActiveSheet()->setCellValue('A1',"Id");
            $spreadsheet->getActiveSheet()->setCellValue('B1',"Name");
            $spreadsheet->getActiveSheet()->setCellValue('C1', "Account");
            $spreadsheet->getActiveSheet()->setCellValue('D1', "User");
            $spreadsheet->getActiveSheet()->setCellValue('E1', "Area");
            $spreadsheet->getActiveSheet()->setCellValue('F1', "Status");
            $spreadsheet->getActiveSheet()->setCellValue('G1', "Source");
            $spreadsheet->getActiveSheet()->setCellValue('H1', "Department");
            $spreadsheet->getActiveSheet()->setCellValue('I1', "Amount");
            $spreadsheet->getActiveSheet()->setCellValue('J1', "Created At");
            $spreadsheet->getActiveSheet()->setCellValue('K1', "Created By");
            $spreadsheet->getActiveSheet()->setCellValue('L1', "Updated At");
            $spreadsheet->getActiveSheet()->setCellValue('M1', "Updated By");
            $spreadsheet->getActiveSheet()->setCellValue('N1', "Description");

            $cellRange = 'A1:N1'; // Define o intervalo de células

            $style = $spreadsheet->getActiveSheet()->getStyle($cellRange);
            $font = $style->getFont();
            $font->setBold(true);

            $leads = $this->leadsRepository->findAll();
            $i = 2;

            foreach($leads as $lead) {

                $spreadsheet->getActiveSheet()->setCellValue('A'.$i, $lead->getId());
                $spreadsheet->getActiveSheet()->setCellValue('B'.$i, $lead->getName());
                $spreadsheet->getActiveSheet()->setCellValue('C'.$i, $lead->getAccount());
                $spreadsheet->getActiveSheet()->setCellValue('D'.$i, $lead->getIdUser()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('E'.$i, $lead->getIdArea()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('F'.$i, $lead->getIdStatus()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('G'.$i, $lead->getIdSource()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('H'.$i, $lead->getIdDepartment()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('I'.$i, $lead->getAmount());
                $spreadsheet->getActiveSheet()->setCellValue('J'.$i, $lead->getCreatedAt());
                $spreadsheet->getActiveSheet()->setCellValue('K'.$i, $lead->getCreatedBy()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('L'.$i, $lead->getUpdatedAt());
                $spreadsheet->getActiveSheet()->setCellValue('M'.$i, $lead->getUpdatedBy()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('N'.$i, $lead->getDescription());
                $i++;
            }

            foreach ($spreadsheet->getActiveSheet()->getColumnIterator() as $column) {
                $spreadsheet->getActiveSheet()->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
            }
    
            $writer = new Xlsx($spreadsheet);
            $filename = "exportfile".$loggedinleads."-".date("H-i-s");

            $writer->save('uploads/excel/'.$filename.'.xlsx');

            $filePath = 'uploads/excel/'.$filename.'.xlsx'; // Replace with the actual file path

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;
        }

        #[Route('/excel/generator/opportunities', name: 'app_excel_generator_opportunities')]
        public function excelgeneratoropportunities(Security $security): Response
        {
            $loggedinopportunities = $security->getUser()->getId();
            $spreadsheet = new Spreadsheet();

            $spreadsheet->getActiveSheet()->setCellValue('A1', "Id");
            $spreadsheet->getActiveSheet()->setCellValue('B1', "Name");
            $spreadsheet->getActiveSheet()->setCellValue('C1', "Account");
            $spreadsheet->getActiveSheet()->setCellValue('D1', "User");
            $spreadsheet->getActiveSheet()->setCellValue('E1', "Contact");
            $spreadsheet->getActiveSheet()->setCellValue('F1', "Stage");
            $spreadsheet->getActiveSheet()->setCellValue('G1', "Source");
            $spreadsheet->getActiveSheet()->setCellValue('H1', "Close Date");
            $spreadsheet->getActiveSheet()->setCellValue('I1', "Department");
            $spreadsheet->getActiveSheet()->setCellValue('J1', "Amount");
            $spreadsheet->getActiveSheet()->setCellValue('K1', "Probability");
            $spreadsheet->getActiveSheet()->setCellValue('L1', "Created At");
            $spreadsheet->getActiveSheet()->setCellValue('M1', "Created By");
            $spreadsheet->getActiveSheet()->setCellValue('N1', "Updated At");
            $spreadsheet->getActiveSheet()->setCellValue('O1', "Updated By");
            $spreadsheet->getActiveSheet()->setCellValue('P1', "Description");

            $cellRange = 'A1:P1'; // Define o intervalo de células

            $style = $spreadsheet->getActiveSheet()->getStyle($cellRange);
            $font = $style->getFont();
            $font->setBold(true);

            $opportunities = $this->opportunitiesRepository->findAll();
            $i = 2;

            foreach($opportunities as $opportunity) {

                $spreadsheet->getActiveSheet()->setCellValue('A'.$i, $opportunity->getId());
                $spreadsheet->getActiveSheet()->setCellValue('B'.$i, $opportunity->getName());
                $spreadsheet->getActiveSheet()->setCellValue('C'.$i, $opportunity->getIdAccount()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('D'.$i, $opportunity->getIdUser()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('E'.$i, $opportunity->getIdContact()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('F'.$i, $opportunity->getIdStage()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('G'.$i, $opportunity->getIdSource()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('H'.$i, $opportunity->getCloseDate());
                $spreadsheet->getActiveSheet()->setCellValue('I'.$i, $opportunity->getIdDepartment()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('J'.$i, $opportunity->getAmount());
                $spreadsheet->getActiveSheet()->setCellValue('K'.$i, $opportunity->getProbability());
                $spreadsheet->getActiveSheet()->setCellValue('L'.$i, $opportunity->getCreatedAt());
                $spreadsheet->getActiveSheet()->setCellValue('M'.$i, $opportunity->getCreatedBy()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('N'.$i, $opportunity->getUpdatedAt());
                $spreadsheet->getActiveSheet()->setCellValue('O'.$i, $opportunity->getUpdatedBy()->getName());
                $spreadsheet->getActiveSheet()->setCellValue('P'.$i, $opportunity->getDescription());
                $i++;
            }

            foreach ($spreadsheet->getActiveSheet()->getColumnIterator() as $column) {
                $spreadsheet->getActiveSheet()->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
            }
    
            $writer = new Xlsx($spreadsheet);
            $filename = "exportfile".$loggedinopportunities."-".date("H-i-s");

            $writer->save('uploads/excel/'.$filename.'.xlsx');

            $filePath = 'uploads/excel/'.$filename.'.xlsx'; // Replace with the actual file path

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;
        }

        #[Route('/excel/import/accounts', name: 'app_excel_import_accounts')]
        public function excelimportaccounts(Request $request): Response
        {
            $iduser = $_POST['iduser'];
            $now = date('Y-m-d H:i:s');
    
            if(!isset($_FILES['file'])){
                return new Response('No file uploaded.');
            }

            $filename = $_FILES['file']['name'];
    
            $location = "uploads/excel/".$filename;
    
            if ($request->files->count() > 0) {
    
                $uploadedFile = $request->files->get('file');
    
                $filePath = 'uploads/excel/' . $uploadedFile->getClientOriginalName();
                $uploadedFile->move('uploads/excel/', $uploadedFile->getClientOriginalName());
    
                $spreadsheet = IOFactory::load($filePath);
                $worksheet = $spreadsheet->getActiveSheet();
                $highestRow = $worksheet->getHighestRow();
    
                for ($row = 2; $row <= $highestRow; $row++) {
                    $accountName = $worksheet->getCell('A'.$row)->getValue();
                    $accountType = $worksheet->getCell('B'.$row)->getValue();
                    $accountArea = $worksheet->getCell('C'.$row)->getValue();
                    $accountDescription = $worksheet->getCell('D'.$row)->getValue();
    
                    // permite ter os estados ao lado direito no ficheiro de importação
                    if(empty($accountName)){
                        continue;
                    }
    
                    $account = new Accounts();
                    $accountT = new AccountsType();
                    $accountA = new Area();
    
                    $account->setName($accountName);
    
                    $accountT = $this->accountstypeRepository->find($accountType); 
                    $account->setIdType($accountT);
    
                    $accountA = $this->areaRepository->find($accountArea);
                    $account->setIdArea($accountA);
    
                    $userid = $this->usersRepository->find($iduser);
    
                    $account->setDescription($accountDescription);
    
                    $account->setIdUser($userid);
                    $account->setUpdatedAt(new \DateTimeImmutable($now));
                    $account->setCreatedAt(new \DateTimeImmutable($now));
                    $account->setCreatedBy($userid);
                    $account->setUpdatedBy($userid);
    
                    $this->em->persist($account);
                    $this->em->flush();
                }
                    
    
                unlink($filePath);
    
                return new Response('Accounts imported successfully!');
            }
    
            return new Response('No file uploaded.');
        }

        #[Route('/excel/import/accounts/template', name: 'app_excel_import_template')]
        public function exceluploadaccountstemplate(Request $request): Response
        {

            $filePath = 'uploads/excel/accounts.xlsx';

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;

            return $this->redirectToRoute('app_excel_import_accounts');
        }

        #[Route('/excel/upload/accounts', name: 'app_excel_upload_accounts')]
        public function exceluploadaccounts(Security $security): Response
        { 
            $iduser = $security->getUser()->getId();

                return $this->render('import/accounts.html.twig',[
                    'iduser' => $iduser
            ]);
        }


        

        #[Route('/excel/import/contacts', name: 'app_excel_import_contacts')]
        public function excelimportcontacts(Request $request): Response
        {


            $iduser = $_POST['iduser'];
            $now = date('Y-m-d H:i:s');

            $filename = $_FILES['file']['name'];
    
            $location = "uploads/excel/".$filename;
    
            if ($request->files->count() > 0) {
    
                $uploadedFile = $request->files->get('file');
    
                $filePath = 'uploads/excel/' . $uploadedFile->getClientOriginalName();
                $uploadedFile->move('uploads/excel/', $uploadedFile->getClientOriginalName());
    
                $spreadsheet = IOFactory::load($filePath);
                $worksheet = $spreadsheet->getActiveSheet();
                $highestRow = $worksheet->getHighestRow();
    
                for ($row = 2; $row <= $highestRow; $row++) {
                    $contactName = $worksheet->getCell('A'.$row)->getValue();
                    $contactSurName = $worksheet->getCell('B'.$row)->getValue();
                    $contactDescription = $worksheet->getCell('C'.$row)->getValue();
    
                    // permite ter os estados ao lado direito no ficheiro de importação
                    if(empty($contactName)){
                        continue;
                    }
    
                    $contact = new Contacts();
    
                    $contact->setName($contactName);
                    $contact->setSurName($contactSurName);

                    $userid = $this->usersRepository->find($iduser);
    
                    $contact->setDescription($contactDescription);
    
                    $contact->setIdUser($userid);
                    $contact->setUpdatedAt(new \DateTimeImmutable($now));
                    $contact->setCreatedAt(new \DateTimeImmutable($now));
                    $contact->setCreatedBy($userid);
                    $contact->setUpdatedBy($userid);
    
                    $this->em->persist($contact);
                    $this->em->flush();
                }
                    
    
                unlink($filePath);
    
                return new Response('Accounts imported successfully!');
            }
    
            return new Response('No file uploaded.');
        }

        #[Route('/excel/import/contacts/template', name: 'app_excel_import_template')]
        public function exceluploadcontactstemplate(Request $request): Response
        {

            $filePath = 'uploads/excel/contacts.xlsx';

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;

            return $this->redirectToRoute('app_excel_import_contacts');
        }

        #[Route('/excel/upload/contacts', name: 'app_excel_upload_contacts')]
        public function exceluploadcontacts(Security $security): Response
        { 
            $iduser = $security->getUser()->getId();

                return $this->render('import/contacts.html.twig',[
                    'iduser' => $iduser
            ]);
        }



        #[Route('/excel/import/opportunities', name: 'app_excel_import_opportunities')]
        public function excelimportopportunities(Request $request): Response
        {


            $iduser = $_POST['iduser'];
            $now = date('Y-m-d H:i:s');

            $filename = $_FILES['file']['name'];
    
            $location = "uploads/excel/".$filename;
    
            if ($request->files->count() > 0) {
    
                $uploadedFile = $request->files->get('file');
    
                $filePath = 'uploads/excel/' . $uploadedFile->getClientOriginalName();
                $uploadedFile->move('uploads/excel/', $uploadedFile->getClientOriginalName());
    
                $spreadsheet = IOFactory::load($filePath);
                $worksheet = $spreadsheet->getActiveSheet();
                $highestRow = $worksheet->getHighestRow();
    
                for ($row = 2; $row <= $highestRow; $row++) {
                    $opportunityName = $worksheet->getCell('A'.$row)->getValue();
                    $opportunityProduct = $worksheet->getCell('B'.$row)->getValue();
                    $opportunityAmount = $worksheet->getCell('C'.$row)->getValue();
                    $opportunityProbability = $worksheet->getCell('D'.$row)->getValue();
                    $opportunityContacts = $worksheet->getCell('E'.$row)->getValue();
                    $opportunityDepartments = $worksheet->getCell('F'.$row)->getValue();
                    $opportunityStages = $worksheet->getCell('G'.$row)->getValue();
                    $opportunitySources = $worksheet->getCell('H'.$row)->getValue();
                    $opportunityDescription = $worksheet->getCell('I'.$row)->getValue();
                    $opportunityCloseDate = $worksheet->getCell('J'.$row)->getValue();
                    $opportunityCloseDate = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($opportunityCloseDate);
                    
                    // permite ter os estados ao lado direito no ficheiro de importação
                    if(empty($opportunityName)){
                        continue;
                    }
    
                    $opportunity = new Opportunities();
                    $opportunityC = new Contacts();
                    $opportunityD = new Departments();
                    $opportunitySt = new Stages();
                    $opportunityS = new Sources();

    
                    $opportunity->setName($opportunityName);
                    $opportunity->setProduct($opportunityProduct);
                    $opportunity->setAmount($opportunityAmount);
                    $opportunity->setProbability($opportunityProbability);
                    
                    $userid = $this->usersRepository->find($iduser);

                    $opportunityC = $this->contactsRepository->find($opportunityContacts); 
                    $opportunity->setIdContact($opportunityC);

                    $opportunityD = $this->departmentsRepository->find($opportunityDepartments); 
                    $opportunity->setIdDepartment($opportunityD);

                    $opportunitySt = $this->stagesRepository->find($opportunityStages); 
                    $opportunity->setIdStage($opportunitySt);

                    $opportunityS = $this->sourcesRepository->find($opportunitySources); 
                    $opportunity->setIdSource($opportunityS);
    
                    $opportunity->setDescription($opportunityDescription);
                    $opportunity->setCloseDate($opportunityCloseDate);
    
                    $opportunity->setIdUser($userid);
                    $opportunity->setUpdatedAt(new \DateTimeImmutable($now));
                    $opportunity->setCreatedAt(new \DateTimeImmutable($now));
                    $opportunity->setCreatedBy($userid);
                    $opportunity->setUpdatedBy($userid);
    
                    $this->em->persist($opportunity);
                    $this->em->flush();
                }
                    
    
                unlink($filePath);
    
                return new Response('Opportunity imported successfully!');
            }
    
            return new Response('No file uploaded.');
        }

        #[Route('/excel/import/opportunities/template', name: 'app_excel_import_template')]
        public function exceluploadopportunitiestemplate(Request $request): Response
        {

            $filePath = 'uploads/excel/opportunities.xlsx';

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;

            return $this->redirectToRoute('app_excel_import_opportunities');
        }

        #[Route('/excel/upload/opportunities', name: 'app_excel_upload_opportunities')]
        public function exceluploadopportunities(Security $security): Response
        { 
            $iduser = $security->getUser()->getId();

                return $this->render('import/opportunities.html.twig',[
                    'iduser' => $iduser
            ]);
        }

        #[Route('/excel/import/leads', name: 'app_excel_import_leads')]
        public function excelimportleads(Request $request): Response
        {


            $iduser = $_POST['iduser'];
            $now = date('Y-m-d H:i:s');

            $filename = $_FILES['file']['name'];
    
            $location = "uploads/excel/".$filename;
    
            if ($request->files->count() > 0) {
    
                $uploadedFile = $request->files->get('file');
    
                $filePath = 'uploads/excel/' . $uploadedFile->getClientOriginalName();
                $uploadedFile->move('uploads/excel/', $uploadedFile->getClientOriginalName());
    
                $spreadsheet = IOFactory::load($filePath);
                $worksheet = $spreadsheet->getActiveSheet();
                $highestRow = $worksheet->getHighestRow();
    
                for ($row = 2; $row <= $highestRow; $row++) {
                    $leadsName = $worksheet->getCell('A'.$row)->getValue();
                    $leadsAccount = $worksheet->getCell('B'.$row)->getValue();
                    $leadsAmount = $worksheet->getCell('C'.$row)->getValue();
                    $leadsCampaign = $worksheet->getCell('D'.$row)->getValue();
                    $leadsArea = $worksheet->getCell('E'.$row)->getValue();
                    $leadsDepartments = $worksheet->getCell('F'.$row)->getValue();
                    $leadsStatus = $worksheet->getCell('G'.$row)->getValue();
                    $leadsSources = $worksheet->getCell('H'.$row)->getValue();
                    $leadsDescription = $worksheet->getCell('I'.$row)->getValue();
                    $leadsAmount =  floatval($leadsAmount);

                    
                    // permite ter os estados ao lado direito no ficheiro de importação
                    if(empty($leadsName)){
                        continue;
                    }
    
                    $leads = new Leads();
                    $leadsA = new Area();
                    $leadsC = new Campaign();
                    $leadsD = new Departments();
                    $leadsSt = new Status();
                    $leadsS = new Sources();

    
                    $leads->setName($leadsName);
                    $leads->setAccount($leadsAccount);
                    $leads->setAmount($leadsAmount);
                    
                    $userid = $this->usersRepository->find($iduser);

                    $leadsC = $this->campaignRepository->find($leadsCampaign); 
                    $leads->setIdCampaign($leadsC);

                    $leadsA = $this->areaRepository->find($leadsArea); 
                    $leads->setIdArea($leadsA);

                    $leadsD = $this->departmentsRepository->find($leadsDepartments); 
                    $leads->setIdDepartment($leadsD);

                    $leadsSt = $this->statusRepository->find($leadsStatus); 
                    $leads->setIdStatus($leadsSt);

                    $leadsS = $this->sourcesRepository->find($leadsSources); 
                    $leads->setIdSource($leadsS);
    
                    $leads->setDescription($leadsDescription);

    
                    $leads->setIdUser($userid);
                    $leads->setUpdatedAt(new \DateTimeImmutable($now));
                    $leads->setCreatedAt(new \DateTimeImmutable($now));
                    $leads->setCreatedBy($userid);
                    $leads->setUpdatedBy($userid);
    
                    $this->em->persist($leads);
                    $this->em->flush();
                }
                    
    
                unlink($filePath);
    
                return new Response('Lead imported successfully!');
            }
    
            return new Response('No file uploaded.');
        }

        #[Route('/excel/import/leads/template', name: 'app_excel_import_template')]
        public function exceluploadleadstemplate(Request $request): Response
        {

            $filePath = 'uploads/excel/leads.xlsx';

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;

            return $this->redirectToRoute('app_excel_import_leads');
        }

        #[Route('/excel/upload/leads', name: 'app_excel_upload_leads')]
        public function exceluploadleads(Security $security): Response
        { 
            $iduser = $security->getUser()->getId();

                return $this->render('import/leads.html.twig',[
                    'iduser' => $iduser
            ]);
        }

        #[Route('/reports/accounts',  name: 'app_reports_accounts')]
        public function reportexcelaccounts(Security $security): Response
        {
            $loggedincontacts = $security->getUser()->getId();
            $spreadsheet = new Spreadsheet();

            $spreadsheet->getActiveSheet()->setCellValue('A1', "Id Account");
            $spreadsheet->getActiveSheet()->setCellValue('B1', "Name Account");
            $spreadsheet->getActiveSheet()->setCellValue('C1', "Id Opportunity");
            $spreadsheet->getActiveSheet()->setCellValue('D1', "Name Opportunity");
            $spreadsheet->getActiveSheet()->setCellValue('E1', "Product");
            $spreadsheet->getActiveSheet()->setCellValue('F1', "Description");
            $spreadsheet->getActiveSheet()->setCellValue('G1', "Created At");
            $spreadsheet->getActiveSheet()->setCellValue('H1', "Updated At");

            $cellRange = 'A1:Z1'; // Define o intervalo de células

            $style = $spreadsheet->getActiveSheet()->getStyle($cellRange);
            $font = $style->getFont();
            $font->setBold(true);
            
            $accounts = $this->accountsRepository->findAll();
            $i = 2;

            foreach($accounts as $account) {

                $spreadsheet->getActiveSheet()->setCellValue('A'.$i, $account->getId());
                $spreadsheet->getActiveSheet()->setCellValue('B'.$i, $account->getName());
                $aa = "C";
                $opps = $this->opportunitiesRepository->findByAccounts($account->getId());
                if($opps){
                    foreach($opps as $opp) {
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getId());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getName());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getProduct());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getDescription());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getCreatedAt());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getUpdatedAt());$aa++;
                    }
                }
               

                $i++;
            }

            foreach ($spreadsheet->getActiveSheet()->getColumnIterator() as $column) {
                $spreadsheet->getActiveSheet()->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
            }
    
            $writer = new Xlsx($spreadsheet);
            $filename = "exportfile".$loggedincontacts."-".date("H-i-s");

            $writer->save('uploads/excel/'.$filename.'.xlsx');

            $filePath = 'uploads/excel/'.$filename.'.xlsx'; // Replace with the actual file path

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;
        }


        #[Route('/reports/converted',  name: 'app_reports_converted')]
        public function reportexcelconverted(Security $security): Response
        {
            $loggedincontacts = $security->getUser()->getId();
            $spreadsheet = new Spreadsheet();

            $spreadsheet->getActiveSheet()->setCellValue('A1', "Id");
            $spreadsheet->getActiveSheet()->setCellValue('B1', "Name");
            $spreadsheet->getActiveSheet()->setCellValue('C1', "Description");
            $spreadsheet->getActiveSheet()->setCellValue('D1', "Area");
            $spreadsheet->getActiveSheet()->setCellValue('E1', "Department");
            $spreadsheet->getActiveSheet()->setCellValue('F1', "Id Opportunity");
            $spreadsheet->getActiveSheet()->setCellValue('G1', "Description Opportunity");
            $spreadsheet->getActiveSheet()->setCellValue('H1', "Created At Opportunity");
            $spreadsheet->getActiveSheet()->setCellValue('I1', "Updated At Opportunity");

            $cellRange = 'A1:Z1'; // Define o intervalo de células

            $style = $spreadsheet->getActiveSheet()->getStyle($cellRange);
            $font = $style->getFont();
            $font->setBold(true);
            
            $leads = $this->leadsRepository->findByConverted();
            $i = 2;

            foreach($leads as $lead) {

                $spreadsheet->getActiveSheet()->setCellValue('A'.$i, $lead->getId());
                $spreadsheet->getActiveSheet()->setCellValue('B'.$i, $lead->getName());
                $aa = "C";
                $opps = $this->opportunitiesRepository->findByLead($lead->getId());
                if($opps){
                    foreach($opps as $opp) {
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getId());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getName());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getProduct());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getDescription());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getCreatedAt());$aa++;
                        $spreadsheet->getActiveSheet()->setCellValue($aa.$i, $opp->getUpdatedAt());$aa++;
                    }
                }
               

                $i++;
            }

            foreach ($spreadsheet->getActiveSheet()->getColumnIterator() as $column) {
                $spreadsheet->getActiveSheet()->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
            }
    
            $writer = new Xlsx($spreadsheet);
            $filename = "exportfile".$loggedincontacts."-".date("H-i-s");

            $writer->save('uploads/excel/'.$filename.'.xlsx');

            $filePath = 'uploads/excel/'.$filename.'.xlsx'; // Replace with the actual file path

            $response = new BinaryFileResponse($filePath);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;
        }
}