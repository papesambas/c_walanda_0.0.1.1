<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220021942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE caisses ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE caisses ADD CONSTRAINT FK_8E0326DAB03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE caisses ADD CONSTRAINT FK_8E0326DA896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_8E0326DAB03A8386 ON caisses (created_by_id)');
        $this->addSql('CREATE INDEX IDX_8E0326DA896DBBDE ON caisses (updated_by_id)');
        $this->addSql('ALTER TABLE cercles ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE cercles ADD CONSTRAINT FK_45C1718DB03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE cercles ADD CONSTRAINT FK_45C1718D896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_45C1718DB03A8386 ON cercles (created_by_id)');
        $this->addSql('CREATE INDEX IDX_45C1718D896DBBDE ON cercles (updated_by_id)');
        $this->addSql('ALTER TABLE classes ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE classes ADD CONSTRAINT FK_2ED7EC5B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE classes ADD CONSTRAINT FK_2ED7EC5896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_2ED7EC5B03A8386 ON classes (created_by_id)');
        $this->addSql('CREATE INDEX IDX_2ED7EC5896DBBDE ON classes (updated_by_id)');
        $this->addSql('ALTER TABLE communes ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE communes ADD CONSTRAINT FK_5C5EE2A5B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE communes ADD CONSTRAINT FK_5C5EE2A5896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_5C5EE2A5B03A8386 ON communes (created_by_id)');
        $this->addSql('CREATE INDEX IDX_5C5EE2A5896DBBDE ON communes (updated_by_id)');
        $this->addSql('ALTER TABLE cycles ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE cycles ADD CONSTRAINT FK_72B88B24B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE cycles ADD CONSTRAINT FK_72B88B24896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_72B88B24B03A8386 ON cycles (created_by_id)');
        $this->addSql('CREATE INDEX IDX_72B88B24896DBBDE ON cycles (updated_by_id)');
        $this->addSql('ALTER TABLE departements ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE departements ADD CONSTRAINT FK_CF7489B2B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE departements ADD CONSTRAINT FK_CF7489B2896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CF7489B28947610D ON departements (designation)');
        $this->addSql('CREATE INDEX IDX_CF7489B2B03A8386 ON departements (created_by_id)');
        $this->addSql('CREATE INDEX IDX_CF7489B2896DBBDE ON departements (updated_by_id)');
        $this->addSql('ALTER TABLE departs ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE departs ADD CONSTRAINT FK_15CE7982B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE departs ADD CONSTRAINT FK_15CE7982896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_15CE7982B03A8386 ON departs (created_by_id)');
        $this->addSql('CREATE INDEX IDX_15CE7982896DBBDE ON departs (updated_by_id)');
        $this->addSql('ALTER TABLE details_caisses ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE details_caisses ADD CONSTRAINT FK_68505FCBB03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE details_caisses ADD CONSTRAINT FK_68505FCB896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_68505FCBB03A8386 ON details_caisses (created_by_id)');
        $this->addSql('CREATE INDEX IDX_68505FCB896DBBDE ON details_caisses (updated_by_id)');
        $this->addSql('ALTER TABLE echeances ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE echeances ADD CONSTRAINT FK_AA45FFA6B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE echeances ADD CONSTRAINT FK_AA45FFA6896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_AA45FFA6B03A8386 ON echeances (created_by_id)');
        $this->addSql('CREATE INDEX IDX_AA45FFA6896DBBDE ON echeances (updated_by_id)');
        $this->addSql('ALTER TABLE ecole_provenances ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE ecole_provenances ADD CONSTRAINT FK_59378F8CB03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE ecole_provenances ADD CONSTRAINT FK_59378F8C896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_59378F8CB03A8386 ON ecole_provenances (created_by_id)');
        $this->addSql('CREATE INDEX IDX_59378F8C896DBBDE ON ecole_provenances (updated_by_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_383B09B112B2DC9C ON eleves (matricule)');
        $this->addSql('ALTER TABLE enseignements ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE enseignements ADD CONSTRAINT FK_89D79280B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE enseignements ADD CONSTRAINT FK_89D79280896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_89D792808947610D ON enseignements (designation)');
        $this->addSql('CREATE INDEX IDX_89D79280B03A8386 ON enseignements (created_by_id)');
        $this->addSql('CREATE INDEX IDX_89D79280896DBBDE ON enseignements (updated_by_id)');
        $this->addSql('ALTER TABLE etablissements ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE etablissements ADD CONSTRAINT FK_29F65EB1B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE etablissements ADD CONSTRAINT FK_29F65EB1896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29F65EB1388113D1 ON etablissements (num_decision_creation)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29F65EB1E595265A ON etablissements (num_decision_ouverture)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29F65EB1C840B63F ON etablissements (num_social)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29F65EB1499502FE ON etablissements (num_fiscal)');
        $this->addSql('CREATE INDEX IDX_29F65EB1B03A8386 ON etablissements (created_by_id)');
        $this->addSql('CREATE INDEX IDX_29F65EB1896DBBDE ON etablissements (updated_by_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE caisses DROP FOREIGN KEY FK_8E0326DAB03A8386');
        $this->addSql('ALTER TABLE caisses DROP FOREIGN KEY FK_8E0326DA896DBBDE');
        $this->addSql('DROP INDEX IDX_8E0326DAB03A8386 ON caisses');
        $this->addSql('DROP INDEX IDX_8E0326DA896DBBDE ON caisses');
        $this->addSql('ALTER TABLE caisses DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at');
        $this->addSql('ALTER TABLE cercles DROP FOREIGN KEY FK_45C1718DB03A8386');
        $this->addSql('ALTER TABLE cercles DROP FOREIGN KEY FK_45C1718D896DBBDE');
        $this->addSql('DROP INDEX IDX_45C1718DB03A8386 ON cercles');
        $this->addSql('DROP INDEX IDX_45C1718D896DBBDE ON cercles');
        $this->addSql('ALTER TABLE cercles DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
        $this->addSql('ALTER TABLE classes DROP FOREIGN KEY FK_2ED7EC5B03A8386');
        $this->addSql('ALTER TABLE classes DROP FOREIGN KEY FK_2ED7EC5896DBBDE');
        $this->addSql('DROP INDEX IDX_2ED7EC5B03A8386 ON classes');
        $this->addSql('DROP INDEX IDX_2ED7EC5896DBBDE ON classes');
        $this->addSql('ALTER TABLE classes DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
        $this->addSql('ALTER TABLE communes DROP FOREIGN KEY FK_5C5EE2A5B03A8386');
        $this->addSql('ALTER TABLE communes DROP FOREIGN KEY FK_5C5EE2A5896DBBDE');
        $this->addSql('DROP INDEX IDX_5C5EE2A5B03A8386 ON communes');
        $this->addSql('DROP INDEX IDX_5C5EE2A5896DBBDE ON communes');
        $this->addSql('ALTER TABLE communes DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
        $this->addSql('ALTER TABLE cycles DROP FOREIGN KEY FK_72B88B24B03A8386');
        $this->addSql('ALTER TABLE cycles DROP FOREIGN KEY FK_72B88B24896DBBDE');
        $this->addSql('DROP INDEX IDX_72B88B24B03A8386 ON cycles');
        $this->addSql('DROP INDEX IDX_72B88B24896DBBDE ON cycles');
        $this->addSql('ALTER TABLE cycles DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
        $this->addSql('ALTER TABLE departements DROP FOREIGN KEY FK_CF7489B2B03A8386');
        $this->addSql('ALTER TABLE departements DROP FOREIGN KEY FK_CF7489B2896DBBDE');
        $this->addSql('DROP INDEX UNIQ_CF7489B28947610D ON departements');
        $this->addSql('DROP INDEX IDX_CF7489B2B03A8386 ON departements');
        $this->addSql('DROP INDEX IDX_CF7489B2896DBBDE ON departements');
        $this->addSql('ALTER TABLE departements DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
        $this->addSql('ALTER TABLE departs DROP FOREIGN KEY FK_15CE7982B03A8386');
        $this->addSql('ALTER TABLE departs DROP FOREIGN KEY FK_15CE7982896DBBDE');
        $this->addSql('DROP INDEX IDX_15CE7982B03A8386 ON departs');
        $this->addSql('DROP INDEX IDX_15CE7982896DBBDE ON departs');
        $this->addSql('ALTER TABLE departs DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
        $this->addSql('ALTER TABLE details_caisses DROP FOREIGN KEY FK_68505FCBB03A8386');
        $this->addSql('ALTER TABLE details_caisses DROP FOREIGN KEY FK_68505FCB896DBBDE');
        $this->addSql('DROP INDEX IDX_68505FCBB03A8386 ON details_caisses');
        $this->addSql('DROP INDEX IDX_68505FCB896DBBDE ON details_caisses');
        $this->addSql('ALTER TABLE details_caisses DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at');
        $this->addSql('ALTER TABLE echeances DROP FOREIGN KEY FK_AA45FFA6B03A8386');
        $this->addSql('ALTER TABLE echeances DROP FOREIGN KEY FK_AA45FFA6896DBBDE');
        $this->addSql('DROP INDEX IDX_AA45FFA6B03A8386 ON echeances');
        $this->addSql('DROP INDEX IDX_AA45FFA6896DBBDE ON echeances');
        $this->addSql('ALTER TABLE echeances DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
        $this->addSql('ALTER TABLE ecole_provenances DROP FOREIGN KEY FK_59378F8CB03A8386');
        $this->addSql('ALTER TABLE ecole_provenances DROP FOREIGN KEY FK_59378F8C896DBBDE');
        $this->addSql('DROP INDEX IDX_59378F8CB03A8386 ON ecole_provenances');
        $this->addSql('DROP INDEX IDX_59378F8C896DBBDE ON ecole_provenances');
        $this->addSql('ALTER TABLE ecole_provenances DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
        $this->addSql('DROP INDEX UNIQ_383B09B112B2DC9C ON eleves');
        $this->addSql('ALTER TABLE enseignements DROP FOREIGN KEY FK_89D79280B03A8386');
        $this->addSql('ALTER TABLE enseignements DROP FOREIGN KEY FK_89D79280896DBBDE');
        $this->addSql('DROP INDEX UNIQ_89D792808947610D ON enseignements');
        $this->addSql('DROP INDEX IDX_89D79280B03A8386 ON enseignements');
        $this->addSql('DROP INDEX IDX_89D79280896DBBDE ON enseignements');
        $this->addSql('ALTER TABLE enseignements DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
        $this->addSql('ALTER TABLE etablissements DROP FOREIGN KEY FK_29F65EB1B03A8386');
        $this->addSql('ALTER TABLE etablissements DROP FOREIGN KEY FK_29F65EB1896DBBDE');
        $this->addSql('DROP INDEX UNIQ_29F65EB1388113D1 ON etablissements');
        $this->addSql('DROP INDEX UNIQ_29F65EB1E595265A ON etablissements');
        $this->addSql('DROP INDEX UNIQ_29F65EB1C840B63F ON etablissements');
        $this->addSql('DROP INDEX UNIQ_29F65EB1499502FE ON etablissements');
        $this->addSql('DROP INDEX IDX_29F65EB1B03A8386 ON etablissements');
        $this->addSql('DROP INDEX IDX_29F65EB1896DBBDE ON etablissements');
        $this->addSql('ALTER TABLE etablissements DROP created_by_id, DROP updated_by_id, DROP created_at, DROP updated_at, DROP slug');
    }
}
