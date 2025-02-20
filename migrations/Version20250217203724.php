<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217203724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD etablissements_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9D23B76CD FOREIGN KEY (etablissements_id) REFERENCES etablissements (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9D23B76CD ON users (etablissements_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9D23B76CD');
        $this->addSql('DROP INDEX IDX_1483A5E9D23B76CD ON users');
        $this->addSql('ALTER TABLE users DROP etablissements_id');
    }
}
