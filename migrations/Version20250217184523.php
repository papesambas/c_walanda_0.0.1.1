<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217184523 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departs ADD eleves_id INT NOT NULL');
        $this->addSql('ALTER TABLE departs ADD CONSTRAINT FK_15CE7982C2140342 FOREIGN KEY (eleves_id) REFERENCES eleves (id)');
        $this->addSql('CREATE INDEX IDX_15CE7982C2140342 ON departs (eleves_id)');
        $this->addSql('ALTER TABLE eleves ADD nom_id INT NOT NULL, ADD prenom_id INT NOT NULL, ADD lieu_naissance_id INT NOT NULL, ADD classe_id INT DEFAULT NULL, ADD departement_id INT DEFAULT NULL, ADD scolarite1_id INT DEFAULT NULL, ADD scolarite2_id INT DEFAULT NULL, ADD redoublement1_id INT DEFAULT NULL, ADD redoublement2_id INT DEFAULT NULL, ADD redoublement3_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL, ADD parent_id INT NOT NULL, ADD matricule VARCHAR(10) NOT NULL, ADD sexe VARCHAR(2) NOT NULL, ADD statut_finance VARCHAR(8) NOT NULL, ADD date_naissance DATETIME NOT NULL, ADD date_extrait DATETIME NOT NULL, ADD num_extrait VARCHAR(15) NOT NULL, ADD is_admis TINYINT(1) NOT NULL, ADD is_actif TINYINT(1) NOT NULL, ADD is_allowed TINYINT(1) NOT NULL, ADD is_handicap TINYINT(1) NOT NULL, ADD nature_handicape VARCHAR(50) DEFAULT NULL, ADD date_inscription DATETIME NOT NULL, ADD date_recrutement DATETIME NOT NULL, ADD fullname VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1C8121CE9 FOREIGN KEY (nom_id) REFERENCES noms (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B158819F9E FOREIGN KEY (prenom_id) REFERENCES prenoms (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B138C8067D FOREIGN KEY (lieu_naissance_id) REFERENCES lieu_naissances (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B18F5EA509 FOREIGN KEY (classe_id) REFERENCES classes (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1CCF9E01E FOREIGN KEY (departement_id) REFERENCES departements (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1F4C45000 FOREIGN KEY (scolarite1_id) REFERENCES scolarites1 (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1E671FFEE FOREIGN KEY (scolarite2_id) REFERENCES scolarites2 (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B16D13ADFD FOREIGN KEY (redoublement1_id) REFERENCES redoublements1 (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B17FA60213 FOREIGN KEY (redoublement2_id) REFERENCES redoublements2 (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1C71A6576 FOREIGN KEY (redoublement3_id) REFERENCES redoublements3 (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1727ACA70 FOREIGN KEY (parent_id) REFERENCES parents (id)');
        $this->addSql('CREATE INDEX IDX_383B09B1C8121CE9 ON eleves (nom_id)');
        $this->addSql('CREATE INDEX IDX_383B09B158819F9E ON eleves (prenom_id)');
        $this->addSql('CREATE INDEX IDX_383B09B138C8067D ON eleves (lieu_naissance_id)');
        $this->addSql('CREATE INDEX IDX_383B09B18F5EA509 ON eleves (classe_id)');
        $this->addSql('CREATE INDEX IDX_383B09B1CCF9E01E ON eleves (departement_id)');
        $this->addSql('CREATE INDEX IDX_383B09B1F4C45000 ON eleves (scolarite1_id)');
        $this->addSql('CREATE INDEX IDX_383B09B1E671FFEE ON eleves (scolarite2_id)');
        $this->addSql('CREATE INDEX IDX_383B09B16D13ADFD ON eleves (redoublement1_id)');
        $this->addSql('CREATE INDEX IDX_383B09B17FA60213 ON eleves (redoublement2_id)');
        $this->addSql('CREATE INDEX IDX_383B09B1C71A6576 ON eleves (redoublement3_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_383B09B1A76ED395 ON eleves (user_id)');
        $this->addSql('CREATE INDEX IDX_383B09B1727ACA70 ON eleves (parent_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departs DROP FOREIGN KEY FK_15CE7982C2140342');
        $this->addSql('DROP INDEX IDX_15CE7982C2140342 ON departs');
        $this->addSql('ALTER TABLE departs DROP eleves_id');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1C8121CE9');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B158819F9E');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B138C8067D');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B18F5EA509');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1CCF9E01E');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1F4C45000');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1E671FFEE');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B16D13ADFD');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B17FA60213');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1C71A6576');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1A76ED395');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1727ACA70');
        $this->addSql('DROP INDEX IDX_383B09B1C8121CE9 ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B158819F9E ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B138C8067D ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B18F5EA509 ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B1CCF9E01E ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B1F4C45000 ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B1E671FFEE ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B16D13ADFD ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B17FA60213 ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B1C71A6576 ON eleves');
        $this->addSql('DROP INDEX UNIQ_383B09B1A76ED395 ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B1727ACA70 ON eleves');
        $this->addSql('ALTER TABLE eleves DROP nom_id, DROP prenom_id, DROP lieu_naissance_id, DROP classe_id, DROP departement_id, DROP scolarite1_id, DROP scolarite2_id, DROP redoublement1_id, DROP redoublement2_id, DROP redoublement3_id, DROP user_id, DROP parent_id, DROP matricule, DROP sexe, DROP statut_finance, DROP date_naissance, DROP date_extrait, DROP num_extrait, DROP is_admis, DROP is_actif, DROP is_allowed, DROP is_handicap, DROP nature_handicape, DROP date_inscription, DROP date_recrutement, DROP fullname');
    }
}
