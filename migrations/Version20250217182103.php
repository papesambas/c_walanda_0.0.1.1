<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217182103 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details_caisses ADD caisse_id INT NOT NULL, ADD author_id INT NOT NULL, ADD date_op DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', ADD designation VARCHAR(150) NOT NULL, ADD debit DOUBLE PRECISION DEFAULT NULL, ADD credit DOUBLE PRECISION DEFAULT NULL, ADD solde DOUBLE PRECISION NOT NULL, ADD solde_cumul DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE details_caisses ADD CONSTRAINT FK_68505FCB27B4FEBF FOREIGN KEY (caisse_id) REFERENCES caisses (id)');
        $this->addSql('ALTER TABLE details_caisses ADD CONSTRAINT FK_68505FCBF675F31B FOREIGN KEY (author_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_68505FCB27B4FEBF ON details_caisses (caisse_id)');
        $this->addSql('CREATE INDEX IDX_68505FCBF675F31B ON details_caisses (author_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE details_caisses DROP FOREIGN KEY FK_68505FCB27B4FEBF');
        $this->addSql('ALTER TABLE details_caisses DROP FOREIGN KEY FK_68505FCBF675F31B');
        $this->addSql('DROP INDEX IDX_68505FCB27B4FEBF ON details_caisses');
        $this->addSql('DROP INDEX IDX_68505FCBF675F31B ON details_caisses');
        $this->addSql('ALTER TABLE details_caisses DROP caisse_id, DROP author_id, DROP date_op, DROP designation, DROP debit, DROP credit, DROP solde, DROP solde_cumul');
    }
}
