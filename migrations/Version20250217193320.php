<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217193320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE meres ADD nom_id INT NOT NULL, ADD prenom_id INT NOT NULL, ADD profession_id INT NOT NULL, ADD nina_id INT DEFAULT NULL, ADD telephone1_id INT NOT NULL, ADD telephone2_id INT DEFAULT NULL, ADD fullname VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE meres ADD CONSTRAINT FK_2D8B408AC8121CE9 FOREIGN KEY (nom_id) REFERENCES noms (id)');
        $this->addSql('ALTER TABLE meres ADD CONSTRAINT FK_2D8B408A58819F9E FOREIGN KEY (prenom_id) REFERENCES prenoms (id)');
        $this->addSql('ALTER TABLE meres ADD CONSTRAINT FK_2D8B408AFDEF8996 FOREIGN KEY (profession_id) REFERENCES professions (id)');
        $this->addSql('ALTER TABLE meres ADD CONSTRAINT FK_2D8B408A5586F33C FOREIGN KEY (nina_id) REFERENCES ninas (id)');
        $this->addSql('ALTER TABLE meres ADD CONSTRAINT FK_2D8B408A9420D165 FOREIGN KEY (telephone1_id) REFERENCES telephones1 (id)');
        $this->addSql('ALTER TABLE meres ADD CONSTRAINT FK_2D8B408A86957E8B FOREIGN KEY (telephone2_id) REFERENCES telephones2 (id)');
        $this->addSql('CREATE INDEX IDX_2D8B408AC8121CE9 ON meres (nom_id)');
        $this->addSql('CREATE INDEX IDX_2D8B408A58819F9E ON meres (prenom_id)');
        $this->addSql('CREATE INDEX IDX_2D8B408AFDEF8996 ON meres (profession_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2D8B408A5586F33C ON meres (nina_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2D8B408A9420D165 ON meres (telephone1_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2D8B408A86957E8B ON meres (telephone2_id)');
        $this->addSql('ALTER TABLE parents ADD meres_id INT NOT NULL');
        $this->addSql('ALTER TABLE parents ADD CONSTRAINT FK_FD501D6AF04EE6 FOREIGN KEY (meres_id) REFERENCES meres (id)');
        $this->addSql('CREATE INDEX IDX_FD501D6AF04EE6 ON parents (meres_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE meres DROP FOREIGN KEY FK_2D8B408AC8121CE9');
        $this->addSql('ALTER TABLE meres DROP FOREIGN KEY FK_2D8B408A58819F9E');
        $this->addSql('ALTER TABLE meres DROP FOREIGN KEY FK_2D8B408AFDEF8996');
        $this->addSql('ALTER TABLE meres DROP FOREIGN KEY FK_2D8B408A5586F33C');
        $this->addSql('ALTER TABLE meres DROP FOREIGN KEY FK_2D8B408A9420D165');
        $this->addSql('ALTER TABLE meres DROP FOREIGN KEY FK_2D8B408A86957E8B');
        $this->addSql('DROP INDEX IDX_2D8B408AC8121CE9 ON meres');
        $this->addSql('DROP INDEX IDX_2D8B408A58819F9E ON meres');
        $this->addSql('DROP INDEX IDX_2D8B408AFDEF8996 ON meres');
        $this->addSql('DROP INDEX UNIQ_2D8B408A5586F33C ON meres');
        $this->addSql('DROP INDEX UNIQ_2D8B408A9420D165 ON meres');
        $this->addSql('DROP INDEX UNIQ_2D8B408A86957E8B ON meres');
        $this->addSql('ALTER TABLE meres DROP nom_id, DROP prenom_id, DROP profession_id, DROP nina_id, DROP telephone1_id, DROP telephone2_id, DROP fullname');
        $this->addSql('ALTER TABLE parents DROP FOREIGN KEY FK_FD501D6AF04EE6');
        $this->addSql('DROP INDEX IDX_FD501D6AF04EE6 ON parents');
        $this->addSql('ALTER TABLE parents DROP meres_id');
    }
}
