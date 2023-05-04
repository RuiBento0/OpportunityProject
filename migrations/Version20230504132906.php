<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230504132906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD user_role_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E98E0E3CA6 FOREIGN KEY (user_role_id) REFERENCES roles (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E98E0E3CA6 ON users (user_role_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E98E0E3CA6');
        $this->addSql('DROP INDEX IDX_1483A5E98E0E3CA6 ON users');
        $this->addSql('ALTER TABLE users DROP user_role_id');
    }
}
