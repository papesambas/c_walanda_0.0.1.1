<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217192727 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE caisses ADD frais_scolarites_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE caisses ADD CONSTRAINT FK_8E0326DA5C8EF115 FOREIGN KEY (frais_scolarites_id) REFERENCES frais_scolarites (id)');
        $this->addSql('CREATE INDEX IDX_8E0326DA5C8EF115 ON caisses (frais_scolarites_id)');
        $this->addSql('ALTER TABLE frais_scolarites ADD eleves_id INT DEFAULT NULL, ADD annee_scolaires_id INT NOT NULL, ADD montant INT NOT NULL, ADD arrieres INT NOT NULL, ADD inscription INT NOT NULL, ADD carnet INT NOT NULL, ADD transfert INT NOT NULL, ADD septembre INT NOT NULL, ADD octobre INT NOT NULL, ADD novembre INT NOT NULL, ADD decembre INT NOT NULL, ADD janvier INT NOT NULL, ADD fevrier INT NOT NULL, ADD mars INT NOT NULL, ADD avril INT NOT NULL, ADD mai INT NOT NULL, ADD juin INT NOT NULL, ADD autre INT NOT NULL, ADD echeance_arrieres DATETIME DEFAULT NULL, ADD echeance_inscription DATETIME DEFAULT NULL, ADD echeance_carnet DATETIME DEFAULT NULL, ADD echeance_transfert DATETIME DEFAULT NULL, ADD echeance_septembre DATETIME DEFAULT NULL, ADD echeance_octobre DATETIME DEFAULT NULL, ADD echeance_novembre DATETIME DEFAULT NULL, ADD echeance_decembre DATETIME DEFAULT NULL, ADD echeance_janvier DATETIME DEFAULT NULL, ADD echeance_fevrier DATETIME DEFAULT NULL, ADD echeance_mars DATETIME DEFAULT NULL, ADD echeance_avril DATETIME DEFAULT NULL, ADD echeance_mai DATETIME DEFAULT NULL, ADD echeance_juin DATETIME DEFAULT NULL, ADD echeance_autre DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE frais_scolarites ADD CONSTRAINT FK_B130BF49C2140342 FOREIGN KEY (eleves_id) REFERENCES eleves (id)');
        $this->addSql('ALTER TABLE frais_scolarites ADD CONSTRAINT FK_B130BF49E639FDE4 FOREIGN KEY (annee_scolaires_id) REFERENCES annee_scolaires (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B130BF49C2140342 ON frais_scolarites (eleves_id)');
        $this->addSql('CREATE INDEX IDX_B130BF49E639FDE4 ON frais_scolarites (annee_scolaires_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE caisses DROP FOREIGN KEY FK_8E0326DA5C8EF115');
        $this->addSql('DROP INDEX IDX_8E0326DA5C8EF115 ON caisses');
        $this->addSql('ALTER TABLE caisses DROP frais_scolarites_id');
        $this->addSql('ALTER TABLE frais_scolarites DROP FOREIGN KEY FK_B130BF49C2140342');
        $this->addSql('ALTER TABLE frais_scolarites DROP FOREIGN KEY FK_B130BF49E639FDE4');
        $this->addSql('DROP INDEX UNIQ_B130BF49C2140342 ON frais_scolarites');
        $this->addSql('DROP INDEX IDX_B130BF49E639FDE4 ON frais_scolarites');
        $this->addSql('ALTER TABLE frais_scolarites DROP eleves_id, DROP annee_scolaires_id, DROP montant, DROP arrieres, DROP inscription, DROP carnet, DROP transfert, DROP septembre, DROP octobre, DROP novembre, DROP decembre, DROP janvier, DROP fevrier, DROP mars, DROP avril, DROP mai, DROP juin, DROP autre, DROP echeance_arrieres, DROP echeance_inscription, DROP echeance_carnet, DROP echeance_transfert, DROP echeance_septembre, DROP echeance_octobre, DROP echeance_novembre, DROP echeance_decembre, DROP echeance_janvier, DROP echeance_fevrier, DROP echeance_mars, DROP echeance_avril, DROP echeance_mai, DROP echeance_juin, DROP echeance_autre');
    }
}
