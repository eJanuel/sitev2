<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190207100351 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE blocks (id INT AUTO_INCREMENT NOT NULL, pages_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, tag VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_CEED9578401ADD27 (pages_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, mail VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, power_level INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, pages_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, href LONGTEXT NOT NULL, src LONGTEXT NOT NULL, alt VARCHAR(255) NOT NULL, INDEX IDX_E01FBE6A401ADD27 (pages_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pages (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE blocks ADD CONSTRAINT FK_CEED9578401ADD27 FOREIGN KEY (pages_id) REFERENCES pages (id)');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A401ADD27 FOREIGN KEY (pages_id) REFERENCES pages (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE blocks DROP FOREIGN KEY FK_CEED9578401ADD27');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A401ADD27');
        $this->addSql('DROP TABLE blocks');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE pages');
    }
}
