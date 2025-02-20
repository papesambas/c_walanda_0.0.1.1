<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217194343 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE peres ADD nom_id INT NOT NULL, ADD prenom_id INT NOT NULL, ADD profession_id INT NOT NULL, ADD telephone1_id INT NOT NULL, ADD telephone2_id INT DEFAULT NULL, ADD fullname VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE peres ADD CONSTRAINT FK_B5FB13B9C8121CE9 FOREIGN KEY (nom_id) REFERENCES noms (id)');
        $this->addSql('ALTER TABLE peres ADD CONSTRAINT FK_B5FB13B958819F9E FOREIGN KEY (prenom_id) REFERENCES prenoms (id)');
        $this->addSql('ALTER TABLE peres ADD CONSTRAINT FK_B5FB13B9FDEF8996 FOREIGN KEY (profession_id) REFERENCES professions (id)');
        $this->addSql('ALTER TABLE peres ADD CONSTRAINT FK_B5FB13B99420D165 FOREIGN KEY (telephone1_id) REFERENCES telephones1 (id)');
        $this->addSql('ALTER TABLE peres ADD CONSTRAINT FK_B5FB13B986957E8B FOREIGN KEY (telephone2_id) REFERENCES telephones2 (id)');
        $this->addSql('CREATE INDEX IDX_B5FB13B9C8121CE9 ON peres (nom_id)');
        $this->addSql('CREATE INDEX IDX_B5FB13B958819F9E ON peres (prenom_id)');
        $this->addSql('CREATE INDEX IDX_B5FB13B9FDEF8996 ON peres (profession_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B5FB13B99420D165 ON peres (telephone1_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B5FB13B986957E8B ON peres (telephone2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE peres DROP FOREIGN KEY FK_B5FB13B9C8121CE9');
        $this->addSql('ALTER TABLE peres DROP FOREIGN KEY FK_B5FB13B958819F9E');
        $this->addSql('ALTER TABLE peres DROP FOREIGN KEY FK_B5FB13B9FDEF8996');
        $this->addSql('ALTER TABLE peres DROP FOREIGN KEY FK_B5FB13B99420D165');
        $this->addSql('ALTER TABLE peres DROP FOREIGN KEY FK_B5FB13B986957E8B');
        $this->addSql('DROP INDEX IDX_B5FB13B9C8121CE9 ON peres');
        $this->addSql('DROP INDEX IDX_B5FB13B958819F9E ON peres');
        $this->addSql('DROP INDEX IDX_B5FB13B9FDEF8996 ON peres');
        $this->addSql('DROP INDEX UNIQ_B5FB13B99420D165 ON peres');
        $this->addSql('DROP INDEX UNIQ_B5FB13B986957E8B ON peres');
        $this->addSql('ALTER TABLE peres DROP nom_id, DROP prenom_id, DROP profession_id, DROP telephone1_id, DROP telephone2_id, DROP fullname');
    }
}
