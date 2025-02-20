<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217200740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE statuts_niveaux (statuts_id INT NOT NULL, niveaux_id INT NOT NULL, INDEX IDX_397C5DCBE0EA5904 (statuts_id), INDEX IDX_397C5DCBAAC4B70E (niveaux_id), PRIMARY KEY(statuts_id, niveaux_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE statuts_niveaux ADD CONSTRAINT FK_397C5DCBE0EA5904 FOREIGN KEY (statuts_id) REFERENCES statuts (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE statuts_niveaux ADD CONSTRAINT FK_397C5DCBAAC4B70E FOREIGN KEY (niveaux_id) REFERENCES niveaux (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE eleves ADD statuts_id INT NOT NULL');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1E0EA5904 FOREIGN KEY (statuts_id) REFERENCES statuts (id)');
        $this->addSql('CREATE INDEX IDX_383B09B1E0EA5904 ON eleves (statuts_id)');
        $this->addSql('ALTER TABLE scolarites1 ADD niveau_id INT NOT NULL, ADD scolarite INT NOT NULL');
        $this->addSql('ALTER TABLE scolarites1 ADD CONSTRAINT FK_328D2B44B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveaux (id)');
        $this->addSql('CREATE INDEX IDX_328D2B44B3E9C81 ON scolarites1 (niveau_id)');
        $this->addSql('ALTER TABLE scolarites2 ADD niveau_id INT NOT NULL, ADD scolarite1_id INT NOT NULL, ADD scolarite INT NOT NULL');
        $this->addSql('ALTER TABLE scolarites2 ADD CONSTRAINT FK_AB847AFEB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveaux (id)');
        $this->addSql('ALTER TABLE scolarites2 ADD CONSTRAINT FK_AB847AFEF4C45000 FOREIGN KEY (scolarite1_id) REFERENCES scolarites1 (id)');
        $this->addSql('CREATE INDEX IDX_AB847AFEB3E9C81 ON scolarites2 (niveau_id)');
        $this->addSql('CREATE INDEX IDX_AB847AFEF4C45000 ON scolarites2 (scolarite1_id)');
        $this->addSql('ALTER TABLE statuts ADD designation VARCHAR(150) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE statuts_niveaux DROP FOREIGN KEY FK_397C5DCBE0EA5904');
        $this->addSql('ALTER TABLE statuts_niveaux DROP FOREIGN KEY FK_397C5DCBAAC4B70E');
        $this->addSql('DROP TABLE statuts_niveaux');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1E0EA5904');
        $this->addSql('DROP INDEX IDX_383B09B1E0EA5904 ON eleves');
        $this->addSql('ALTER TABLE eleves DROP statuts_id');
        $this->addSql('ALTER TABLE scolarites1 DROP FOREIGN KEY FK_328D2B44B3E9C81');
        $this->addSql('DROP INDEX IDX_328D2B44B3E9C81 ON scolarites1');
        $this->addSql('ALTER TABLE scolarites1 DROP niveau_id, DROP scolarite');
        $this->addSql('ALTER TABLE scolarites2 DROP FOREIGN KEY FK_AB847AFEB3E9C81');
        $this->addSql('ALTER TABLE scolarites2 DROP FOREIGN KEY FK_AB847AFEF4C45000');
        $this->addSql('DROP INDEX IDX_AB847AFEB3E9C81 ON scolarites2');
        $this->addSql('DROP INDEX IDX_AB847AFEF4C45000 ON scolarites2');
        $this->addSql('ALTER TABLE scolarites2 DROP niveau_id, DROP scolarite1_id, DROP scolarite');
        $this->addSql('ALTER TABLE statuts DROP designation');
    }
}
