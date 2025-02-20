<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217200019 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE redoublements3 ADD niveau_id INT NOT NULL, ADD redoublement2_id INT NOT NULL, ADD scolarite1_id INT DEFAULT NULL, ADD scolarite2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE redoublements3 ADD CONSTRAINT FK_CB5A8C85B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveaux (id)');
        $this->addSql('ALTER TABLE redoublements3 ADD CONSTRAINT FK_CB5A8C857FA60213 FOREIGN KEY (redoublement2_id) REFERENCES redoublements2 (id)');
        $this->addSql('ALTER TABLE redoublements3 ADD CONSTRAINT FK_CB5A8C85F4C45000 FOREIGN KEY (scolarite1_id) REFERENCES scolarites1 (id)');
        $this->addSql('ALTER TABLE redoublements3 ADD CONSTRAINT FK_CB5A8C85E671FFEE FOREIGN KEY (scolarite2_id) REFERENCES scolarites2 (id)');
        $this->addSql('CREATE INDEX IDX_CB5A8C85B3E9C81 ON redoublements3 (niveau_id)');
        $this->addSql('CREATE INDEX IDX_CB5A8C857FA60213 ON redoublements3 (redoublement2_id)');
        $this->addSql('CREATE INDEX IDX_CB5A8C85F4C45000 ON redoublements3 (scolarite1_id)');
        $this->addSql('CREATE INDEX IDX_CB5A8C85E671FFEE ON redoublements3 (scolarite2_id)');
        $this->addSql('ALTER TABLE santes ADD eleve_id INT DEFAULT NULL, ADD maladie VARCHAR(150) NOT NULL, ADD medecin VARCHAR(50) DEFAULT NULL, ADD numero_urgence VARCHAR(23) NOT NULL, ADD centre_sante VARCHAR(150) DEFAULT NULL');
        $this->addSql('ALTER TABLE santes ADD CONSTRAINT FK_C1A17FE9A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleves (id)');
        $this->addSql('CREATE INDEX IDX_C1A17FE9A6CC7B2 ON santes (eleve_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE redoublements3 DROP FOREIGN KEY FK_CB5A8C85B3E9C81');
        $this->addSql('ALTER TABLE redoublements3 DROP FOREIGN KEY FK_CB5A8C857FA60213');
        $this->addSql('ALTER TABLE redoublements3 DROP FOREIGN KEY FK_CB5A8C85F4C45000');
        $this->addSql('ALTER TABLE redoublements3 DROP FOREIGN KEY FK_CB5A8C85E671FFEE');
        $this->addSql('DROP INDEX IDX_CB5A8C85B3E9C81 ON redoublements3');
        $this->addSql('DROP INDEX IDX_CB5A8C857FA60213 ON redoublements3');
        $this->addSql('DROP INDEX IDX_CB5A8C85F4C45000 ON redoublements3');
        $this->addSql('DROP INDEX IDX_CB5A8C85E671FFEE ON redoublements3');
        $this->addSql('ALTER TABLE redoublements3 DROP niveau_id, DROP redoublement2_id, DROP scolarite1_id, DROP scolarite2_id');
        $this->addSql('ALTER TABLE santes DROP FOREIGN KEY FK_C1A17FE9A6CC7B2');
        $this->addSql('DROP INDEX IDX_C1A17FE9A6CC7B2 ON santes');
        $this->addSql('ALTER TABLE santes DROP eleve_id, DROP maladie, DROP medecin, DROP numero_urgence, DROP centre_sante');
    }
}
