<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217175616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cycles ADD etablissement_id INT NOT NULL, ADD designation VARCHAR(75) NOT NULL');
        $this->addSql('ALTER TABLE cycles ADD CONSTRAINT FK_72B88B24FF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissements (id)');
        $this->addSql('CREATE INDEX IDX_72B88B24FF631228 ON cycles (etablissement_id)');
        $this->addSql('ALTER TABLE niveaux ADD cycle_id INT NOT NULL, ADD designation VARCHAR(75) NOT NULL');
        $this->addSql('ALTER TABLE niveaux ADD CONSTRAINT FK_56F771A05EC1162 FOREIGN KEY (cycle_id) REFERENCES cycles (id)');
        $this->addSql('CREATE INDEX IDX_56F771A05EC1162 ON niveaux (cycle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE niveaux DROP FOREIGN KEY FK_56F771A05EC1162');
        $this->addSql('DROP INDEX IDX_56F771A05EC1162 ON niveaux');
        $this->addSql('ALTER TABLE niveaux DROP cycle_id, DROP designation');
        $this->addSql('ALTER TABLE cycles DROP FOREIGN KEY FK_72B88B24FF631228');
        $this->addSql('DROP INDEX IDX_72B88B24FF631228 ON cycles');
        $this->addSql('ALTER TABLE cycles DROP etablissement_id, DROP designation');
    }
}
