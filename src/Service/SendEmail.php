<?php
// src/Service/MessageGenerator.php
namespace App\Service;

class SendEmail
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    public function getToken(): string
    {
        $this->logger->info('About to find a happy message!');
        // ...
    }
}
?>