<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217193626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ninas ADD peres_id INT DEFAULT NULL, ADD designation VARCHAR(15) NOT NULL');
        $this->addSql('ALTER TABLE ninas ADD CONSTRAINT FK_51AD1AF2E74E6A1C FOREIGN KEY (peres_id) REFERENCES peres (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_51AD1AF2E74E6A1C ON ninas (peres_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ninas DROP FOREIGN KEY FK_51AD1AF2E74E6A1C');
        $this->addSql('DROP INDEX UNIQ_51AD1AF2E74E6A1C ON ninas');
        $this->addSql('ALTER TABLE ninas DROP peres_id, DROP designation');
    }
}
