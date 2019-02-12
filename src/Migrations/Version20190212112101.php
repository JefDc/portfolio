<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190212112101 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE extra DROP number_phone, DROP address, DROP email, DROP text_contact, DROP title_contact, DROP sub_title_contact, DROP img_contact');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE extra ADD number_phone VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD address VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD text_contact LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, ADD title_contact VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD sub_title_contact VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD img_contact LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
