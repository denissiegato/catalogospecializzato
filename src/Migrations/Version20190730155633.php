<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190730155633 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX parentId ON product_category');
        $this->addSql('ALTER TABLE product_category CHANGE parent_id parent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product_category ADD CONSTRAINT FK_CDFC73563D8E604F FOREIGN KEY (parent) REFERENCES product_category (id)');
        $this->addSql('CREATE INDEX parent ON product_category (parent)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product_category DROP FOREIGN KEY FK_CDFC73563D8E604F');
        $this->addSql('DROP INDEX parent ON product_category');
        $this->addSql('ALTER TABLE product_category CHANGE parent parent_id INT DEFAULT NULL');
        $this->addSql('CREATE INDEX parentId ON product_category (parent_id)');
    }
}
