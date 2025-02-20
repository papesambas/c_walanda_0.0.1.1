<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217191407 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE frais_scolaires_frais_scolarites (frais_scolaires_id INT NOT NULL, frais_scolarites_id INT NOT NULL, INDEX IDX_DDB628D3D031BFA8 (frais_scolaires_id), INDEX IDX_DDB628D35C8EF115 (frais_scolarites_id), PRIMARY KEY(frais_scolaires_id, frais_scolarites_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE frais_scolaires_annee_scolaires (frais_scolaires_id INT NOT NULL, annee_scolaires_id INT NOT NULL, INDEX IDX_37275413D031BFA8 (frais_scolaires_id), INDEX IDX_37275413E639FDE4 (annee_scolaires_id), PRIMARY KEY(frais_scolaires_id, annee_scolaires_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE frais_scolaires_frais_scolarites ADD CONSTRAINT FK_DDB628D3D031BFA8 FOREIGN KEY (frais_scolaires_id) REFERENCES frais_scolaires (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE frais_scolaires_frais_scolarites ADD CONSTRAINT FK_DDB628D35C8EF115 FOREIGN KEY (frais_scolarites_id) REFERENCES frais_scolarites (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE frais_scolaires_annee_scolaires ADD CONSTRAINT FK_37275413D031BFA8 FOREIGN KEY (frais_scolaires_id) REFERENCES frais_scolaires (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE frais_scolaires_annee_scolaires ADD CONSTRAINT FK_37275413E639FDE4 FOREIGN KEY (annee_scolaires_id) REFERENCES annee_scolaires (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frais_scolaires_frais_scolarites DROP FOREIGN KEY FK_DDB628D3D031BFA8');
        $this->addSql('ALTER TABLE frais_scolaires_frais_scolarites DROP FOREIGN KEY FK_DDB628D35C8EF115');
        $this->addSql('ALTER TABLE frais_scolaires_annee_scolaires DROP FOREIGN KEY FK_37275413D031BFA8');
        $this->addSql('ALTER TABLE frais_scolaires_annee_scolaires DROP FOREIGN KEY FK_37275413E639FDE4');
        $this->addSql('DROP TABLE frais_scolaires_frais_scolarites');
        $this->addSql('DROP TABLE frais_scolaires_annee_scolaires');
    }
}
