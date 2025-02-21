<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220201357 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE meres ADD nina_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE meres ADD CONSTRAINT FK_2D8B408A5586F33C FOREIGN KEY (nina_id) REFERENCES ninas (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2D8B408A5586F33C ON meres (nina_id)');
        $this->addSql('ALTER TABLE ninas DROP FOREIGN KEY FK_51AD1AF2E74E6A1C');
        $this->addSql('ALTER TABLE ninas DROP FOREIGN KEY FK_51AD1AF2F04EE6');
        $this->addSql('DROP INDEX UNIQ_51AD1AF2E74E6A1C ON ninas');
        $this->addSql('DROP INDEX UNIQ_51AD1AF2F04EE6 ON ninas');
        $this->addSql('ALTER TABLE ninas DROP peres_id, DROP meres_id');
        $this->addSql('ALTER TABLE peres ADD nina_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE peres ADD CONSTRAINT FK_B5FB13B95586F33C FOREIGN KEY (nina_id) REFERENCES ninas (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B5FB13B95586F33C ON peres (nina_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE meres DROP FOREIGN KEY FK_2D8B408A5586F33C');
        $this->addSql('DROP INDEX UNIQ_2D8B408A5586F33C ON meres');
        $this->addSql('ALTER TABLE meres DROP nina_id');
        $this->addSql('ALTER TABLE ninas ADD peres_id INT DEFAULT NULL, ADD meres_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ninas ADD CONSTRAINT FK_51AD1AF2E74E6A1C FOREIGN KEY (peres_id) REFERENCES peres (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ninas ADD CONSTRAINT FK_51AD1AF2F04EE6 FOREIGN KEY (meres_id) REFERENCES meres (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_51AD1AF2E74E6A1C ON ninas (peres_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_51AD1AF2F04EE6 ON ninas (meres_id)');
        $this->addSql('ALTER TABLE peres DROP FOREIGN KEY FK_B5FB13B95586F33C');
        $this->addSql('DROP INDEX UNIQ_B5FB13B95586F33C ON peres');
        $this->addSql('ALTER TABLE peres DROP nina_id');
    }
}
