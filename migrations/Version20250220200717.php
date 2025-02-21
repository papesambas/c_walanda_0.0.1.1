<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220200717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE meres DROP FOREIGN KEY FK_2D8B408A5586F33C');
        $this->addSql('DROP INDEX UNIQ_2D8B408A5586F33C ON meres');
        $this->addSql('ALTER TABLE meres DROP nina_id');
        $this->addSql('ALTER TABLE ninas ADD meres_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ninas ADD CONSTRAINT FK_51AD1AF2F04EE6 FOREIGN KEY (meres_id) REFERENCES meres (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_51AD1AF2F04EE6 ON ninas (meres_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE meres ADD nina_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE meres ADD CONSTRAINT FK_2D8B408A5586F33C FOREIGN KEY (nina_id) REFERENCES ninas (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2D8B408A5586F33C ON meres (nina_id)');
        $this->addSql('ALTER TABLE ninas DROP FOREIGN KEY FK_51AD1AF2F04EE6');
        $this->addSql('DROP INDEX UNIQ_51AD1AF2F04EE6 ON ninas');
        $this->addSql('ALTER TABLE ninas DROP meres_id');
    }
}
