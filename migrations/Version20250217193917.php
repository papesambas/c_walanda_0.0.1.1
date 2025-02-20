<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217193917 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parents ADD pere_id INT NOT NULL');
        $this->addSql('ALTER TABLE parents ADD CONSTRAINT FK_FD501D6A3FD73900 FOREIGN KEY (pere_id) REFERENCES peres (id)');
        $this->addSql('CREATE INDEX IDX_FD501D6A3FD73900 ON parents (pere_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parents DROP FOREIGN KEY FK_FD501D6A3FD73900');
        $this->addSql('DROP INDEX IDX_FD501D6A3FD73900 ON parents');
        $this->addSql('ALTER TABLE parents DROP pere_id');
    }
}
