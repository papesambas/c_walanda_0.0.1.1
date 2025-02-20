<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217202917 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier_eleves ADD eleves_id INT NOT NULL');
        $this->addSql('ALTER TABLE dossier_eleves ADD CONSTRAINT FK_D04A5D98C2140342 FOREIGN KEY (eleves_id) REFERENCES eleves (id)');
        $this->addSql('CREATE INDEX IDX_D04A5D98C2140342 ON dossier_eleves (eleves_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dossier_eleves DROP FOREIGN KEY FK_D04A5D98C2140342');
        $this->addSql('DROP INDEX IDX_D04A5D98C2140342 ON dossier_eleves');
        $this->addSql('ALTER TABLE dossier_eleves DROP eleves_id');
    }
}
