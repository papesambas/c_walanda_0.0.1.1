<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217191047 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frais_scolaires ADD echeance_id INT NOT NULL, ADD frais_types_id INT NOT NULL, ADD designation VARCHAR(150) NOT NULL, ADD montant INT NOT NULL');
        $this->addSql('ALTER TABLE frais_scolaires ADD CONSTRAINT FK_45A17205B318673 FOREIGN KEY (echeance_id) REFERENCES echeances (id)');
        $this->addSql('ALTER TABLE frais_scolaires ADD CONSTRAINT FK_45A1720BC67A04F FOREIGN KEY (frais_types_id) REFERENCES frais_types (id)');
        $this->addSql('CREATE INDEX IDX_45A17205B318673 ON frais_scolaires (echeance_id)');
        $this->addSql('CREATE INDEX IDX_45A1720BC67A04F ON frais_scolaires (frais_types_id)');
        $this->addSql('ALTER TABLE frais_scolarites ADD frais_types_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE frais_scolarites ADD CONSTRAINT FK_B130BF49BC67A04F FOREIGN KEY (frais_types_id) REFERENCES frais_types (id)');
        $this->addSql('CREATE INDEX IDX_B130BF49BC67A04F ON frais_scolarites (frais_types_id)');
        $this->addSql('ALTER TABLE frais_types ADD statut_id INT NOT NULL, ADD niveau_id INT NOT NULL, ADD periode VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE frais_types ADD CONSTRAINT FK_1AAC98FCF6203804 FOREIGN KEY (statut_id) REFERENCES statuts (id)');
        $this->addSql('ALTER TABLE frais_types ADD CONSTRAINT FK_1AAC98FCB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveaux (id)');
        $this->addSql('CREATE INDEX IDX_1AAC98FCF6203804 ON frais_types (statut_id)');
        $this->addSql('CREATE INDEX IDX_1AAC98FCB3E9C81 ON frais_types (niveau_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frais_scolaires DROP FOREIGN KEY FK_45A17205B318673');
        $this->addSql('ALTER TABLE frais_scolaires DROP FOREIGN KEY FK_45A1720BC67A04F');
        $this->addSql('DROP INDEX IDX_45A17205B318673 ON frais_scolaires');
        $this->addSql('DROP INDEX IDX_45A1720BC67A04F ON frais_scolaires');
        $this->addSql('ALTER TABLE frais_scolaires DROP echeance_id, DROP frais_types_id, DROP designation, DROP montant');
        $this->addSql('ALTER TABLE frais_scolarites DROP FOREIGN KEY FK_B130BF49BC67A04F');
        $this->addSql('DROP INDEX IDX_B130BF49BC67A04F ON frais_scolarites');
        $this->addSql('ALTER TABLE frais_scolarites DROP frais_types_id');
        $this->addSql('ALTER TABLE frais_types DROP FOREIGN KEY FK_1AAC98FCF6203804');
        $this->addSql('ALTER TABLE frais_types DROP FOREIGN KEY FK_1AAC98FCB3E9C81');
        $this->addSql('DROP INDEX IDX_1AAC98FCF6203804 ON frais_types');
        $this->addSql('DROP INDEX IDX_1AAC98FCB3E9C81 ON frais_types');
        $this->addSql('ALTER TABLE frais_types DROP statut_id, DROP niveau_id, DROP periode');
    }
}
