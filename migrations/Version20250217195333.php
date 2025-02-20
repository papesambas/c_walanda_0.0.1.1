<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217195333 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE redoublements1 ADD niveau_id INT NOT NULL, ADD scolarite1_id INT DEFAULT NULL, ADD scolarite2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE redoublements1 ADD CONSTRAINT FK_2554EDA9B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveaux (id)');
        $this->addSql('ALTER TABLE redoublements1 ADD CONSTRAINT FK_2554EDA9F4C45000 FOREIGN KEY (scolarite1_id) REFERENCES scolarites1 (id)');
        $this->addSql('ALTER TABLE redoublements1 ADD CONSTRAINT FK_2554EDA9E671FFEE FOREIGN KEY (scolarite2_id) REFERENCES scolarites2 (id)');
        $this->addSql('CREATE INDEX IDX_2554EDA9B3E9C81 ON redoublements1 (niveau_id)');
        $this->addSql('CREATE INDEX IDX_2554EDA9F4C45000 ON redoublements1 (scolarite1_id)');
        $this->addSql('CREATE INDEX IDX_2554EDA9E671FFEE ON redoublements1 (scolarite2_id)');
        $this->addSql('ALTER TABLE redoublements2 ADD niveau_id INT NOT NULL, ADD redoublement1_id INT NOT NULL, ADD scolarite1_id INT DEFAULT NULL, ADD scolarite2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE redoublements2 ADD CONSTRAINT FK_BC5DBC13B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveaux (id)');
        $this->addSql('ALTER TABLE redoublements2 ADD CONSTRAINT FK_BC5DBC136D13ADFD FOREIGN KEY (redoublement1_id) REFERENCES redoublements1 (id)');
        $this->addSql('ALTER TABLE redoublements2 ADD CONSTRAINT FK_BC5DBC13F4C45000 FOREIGN KEY (scolarite1_id) REFERENCES scolarites1 (id)');
        $this->addSql('ALTER TABLE redoublements2 ADD CONSTRAINT FK_BC5DBC13E671FFEE FOREIGN KEY (scolarite2_id) REFERENCES scolarites2 (id)');
        $this->addSql('CREATE INDEX IDX_BC5DBC13B3E9C81 ON redoublements2 (niveau_id)');
        $this->addSql('CREATE INDEX IDX_BC5DBC136D13ADFD ON redoublements2 (redoublement1_id)');
        $this->addSql('CREATE INDEX IDX_BC5DBC13F4C45000 ON redoublements2 (scolarite1_id)');
        $this->addSql('CREATE INDEX IDX_BC5DBC13E671FFEE ON redoublements2 (scolarite2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE redoublements1 DROP FOREIGN KEY FK_2554EDA9B3E9C81');
        $this->addSql('ALTER TABLE redoublements1 DROP FOREIGN KEY FK_2554EDA9F4C45000');
        $this->addSql('ALTER TABLE redoublements1 DROP FOREIGN KEY FK_2554EDA9E671FFEE');
        $this->addSql('DROP INDEX IDX_2554EDA9B3E9C81 ON redoublements1');
        $this->addSql('DROP INDEX IDX_2554EDA9F4C45000 ON redoublements1');
        $this->addSql('DROP INDEX IDX_2554EDA9E671FFEE ON redoublements1');
        $this->addSql('ALTER TABLE redoublements1 DROP niveau_id, DROP scolarite1_id, DROP scolarite2_id');
        $this->addSql('ALTER TABLE redoublements2 DROP FOREIGN KEY FK_BC5DBC13B3E9C81');
        $this->addSql('ALTER TABLE redoublements2 DROP FOREIGN KEY FK_BC5DBC136D13ADFD');
        $this->addSql('ALTER TABLE redoublements2 DROP FOREIGN KEY FK_BC5DBC13F4C45000');
        $this->addSql('ALTER TABLE redoublements2 DROP FOREIGN KEY FK_BC5DBC13E671FFEE');
        $this->addSql('DROP INDEX IDX_BC5DBC13B3E9C81 ON redoublements2');
        $this->addSql('DROP INDEX IDX_BC5DBC136D13ADFD ON redoublements2');
        $this->addSql('DROP INDEX IDX_BC5DBC13F4C45000 ON redoublements2');
        $this->addSql('DROP INDEX IDX_BC5DBC13E671FFEE ON redoublements2');
        $this->addSql('ALTER TABLE redoublements2 DROP niveau_id, DROP redoublement1_id, DROP scolarite1_id, DROP scolarite2_id');
    }
}
