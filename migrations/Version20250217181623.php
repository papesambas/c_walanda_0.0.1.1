<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217181623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE departements_cycles (departements_id INT NOT NULL, cycles_id INT NOT NULL, INDEX IDX_27A2CF611DB279A6 (departements_id), INDEX IDX_27A2CF6144C85140 (cycles_id), PRIMARY KEY(departements_id, cycles_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE departements_cycles ADD CONSTRAINT FK_27A2CF611DB279A6 FOREIGN KEY (departements_id) REFERENCES departements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE departements_cycles ADD CONSTRAINT FK_27A2CF6144C85140 FOREIGN KEY (cycles_id) REFERENCES cycles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE caisses ADD annee_scolaires_id INT NOT NULL');
        $this->addSql('ALTER TABLE caisses ADD CONSTRAINT FK_8E0326DAE639FDE4 FOREIGN KEY (annee_scolaires_id) REFERENCES annee_scolaires (id)');
        $this->addSql('CREATE INDEX IDX_8E0326DAE639FDE4 ON caisses (annee_scolaires_id)');
        $this->addSql('ALTER TABLE departs ADD date_depart DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departements_cycles DROP FOREIGN KEY FK_27A2CF611DB279A6');
        $this->addSql('ALTER TABLE departements_cycles DROP FOREIGN KEY FK_27A2CF6144C85140');
        $this->addSql('DROP TABLE departements_cycles');
        $this->addSql('ALTER TABLE caisses DROP FOREIGN KEY FK_8E0326DAE639FDE4');
        $this->addSql('DROP INDEX IDX_8E0326DAE639FDE4 ON caisses');
        $this->addSql('ALTER TABLE caisses DROP annee_scolaires_id');
        $this->addSql('ALTER TABLE departs DROP date_depart');
    }
}
