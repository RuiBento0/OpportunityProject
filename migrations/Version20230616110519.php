<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230616110519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accounts ADD contacts_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE accounts ADD CONSTRAINT FK_CAC89EAC719FB48E FOREIGN KEY (contacts_id) REFERENCES contacts (id)');
        $this->addSql('CREATE INDEX IDX_CAC89EAC719FB48E ON accounts (contacts_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accounts DROP FOREIGN KEY FK_CAC89EAC719FB48E');
        $this->addSql('DROP INDEX IDX_CAC89EAC719FB48E ON accounts');
        $this->addSql('ALTER TABLE accounts DROP contacts_id');
    }
}
