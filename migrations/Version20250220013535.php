<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220013535 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B72523473336103A ON annee_scolaires (annee_debut)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B72523477B13567B ON annee_scolaires (annee_fin)');
        $this->addSql('ALTER TABLE eleves ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL, ADD image_name VARCHAR(255) DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE eleves ADD CONSTRAINT FK_383B09B1896DBBDE FOREIGN KEY (updated_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_383B09B1B03A8386 ON eleves (created_by_id)');
        $this->addSql('CREATE INDEX IDX_383B09B1896DBBDE ON eleves (updated_by_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_B72523473336103A ON annee_scolaires');
        $this->addSql('DROP INDEX UNIQ_B72523477B13567B ON annee_scolaires');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1B03A8386');
        $this->addSql('ALTER TABLE eleves DROP FOREIGN KEY FK_383B09B1896DBBDE');
        $this->addSql('DROP INDEX IDX_383B09B1B03A8386 ON eleves');
        $this->addSql('DROP INDEX IDX_383B09B1896DBBDE ON eleves');
        $this->addSql('ALTER TABLE eleves DROP created_by_id, DROP updated_by_id, DROP image_name, DROP created_at, DROP updated_at, DROP slug');
    }
}
