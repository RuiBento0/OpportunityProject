<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230523100448 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opportunities_product DROP FOREIGN KEY FK_B8B163034584665A');
        $this->addSql('ALTER TABLE opportunities_product DROP FOREIGN KEY FK_B8B16303D5CB17CD');
        $this->addSql('DROP TABLE opportunities_product');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE opportunities_product (opportunities_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_B8B16303D5CB17CD (opportunities_id), INDEX IDX_B8B163034584665A (product_id), PRIMARY KEY(opportunities_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE opportunities_product ADD CONSTRAINT FK_B8B163034584665A FOREIGN KEY (product_id) REFERENCES product (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE opportunities_product ADD CONSTRAINT FK_B8B16303D5CB17CD FOREIGN KEY (opportunities_id) REFERENCES opportunities (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
