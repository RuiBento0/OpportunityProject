<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230616110331 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contacts DROP FOREIGN KEY FK_334015733EE1DF6D');
        $this->addSql('DROP INDEX IDX_334015733EE1DF6D ON contacts');
        $this->addSql('ALTER TABLE contacts DROP id_account_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contacts ADD id_account_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contacts ADD CONSTRAINT FK_334015733EE1DF6D FOREIGN KEY (id_account_id) REFERENCES accounts (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_334015733EE1DF6D ON contacts (id_account_id)');
    }
}
