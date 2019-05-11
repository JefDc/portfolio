<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190209073859 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE extra ADD title_contact VARCHAR(255) NOT NULL, ADD sub_title_contact VARCHAR(255) NOT NULL, ADD title_soft_skill VARCHAR(255) NOT NULL, ADD sub_title_soft_skill VARCHAR(255) NOT NULL, ADD title_skill VARCHAR(255) NOT NULL, ADD sub_title_about_us VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE extra DROP title_contact, DROP sub_title_contact, DROP title_soft_skill, DROP sub_title_soft_skill, DROP title_skill, DROP sub_title_about_us');
    }
}
