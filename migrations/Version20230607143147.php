<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230607143147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opportunities ADD lead_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE opportunities ADD CONSTRAINT FK_406D4DB019A353D8 FOREIGN KEY (lead_id_id) REFERENCES leads (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_406D4DB019A353D8 ON opportunities (lead_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opportunities DROP FOREIGN KEY FK_406D4DB019A353D8');
        $this->addSql('DROP INDEX UNIQ_406D4DB019A353D8 ON opportunities');
        $this->addSql('ALTER TABLE opportunities DROP lead_id_id');
    }
}
