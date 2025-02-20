<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217180857 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departements ADD designation VARCHAR(150) NOT NULL');
        $this->addSql('ALTER TABLE departs ADD ecole_depart_id INT DEFAULT NULL, ADD motif VARCHAR(255) NOT NULL, ADD ecole_destination VARCHAR(150) NOT NULL');
        $this->addSql('ALTER TABLE departs ADD CONSTRAINT FK_15CE7982739A71C5 FOREIGN KEY (ecole_depart_id) REFERENCES etablissements (id)');
        $this->addSql('CREATE INDEX IDX_15CE7982739A71C5 ON departs (ecole_depart_id)');
        $this->addSql('ALTER TABLE dossier_eleves ADD designation VARCHAR(150) NOT NULL');
        $this->addSql('ALTER TABLE lieu_naissances ADD designation VARCHAR(150) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lieu_naissances DROP designation');
        $this->addSql('ALTER TABLE departements DROP designation');
        $this->addSql('ALTER TABLE departs DROP FOREIGN KEY FK_15CE7982739A71C5');
        $this->addSql('DROP INDEX IDX_15CE7982739A71C5 ON departs');
        $this->addSql('ALTER TABLE departs DROP ecole_depart_id, DROP motif, DROP ecole_destination');
        $this->addSql('ALTER TABLE dossier_eleves DROP designation');
    }
}
