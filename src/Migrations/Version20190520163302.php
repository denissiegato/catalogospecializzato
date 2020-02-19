<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190520163302 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, product_category INT DEFAULT NULL, anno INT DEFAULT NULL, data_emission DATETIME DEFAULT NULL, stampa VARCHAR(255) DEFAULT NULL, color VARCHAR(255) DEFAULT NULL, filigrana VARCHAR(255) DEFAULT NULL, dentellatura VARCHAR(255) DEFAULT NULL, tipo_dentellatura VARCHAR(255) DEFAULT NULL, nome VARCHAR(255) DEFAULT NULL, descrizione LONGTEXT DEFAULT NULL, numero_catalogo VARCHAR(255) DEFAULT NULL, numero_sassone VARCHAR(255) DEFAULT NULL, numero_unificato VARCHAR(255) DEFAULT NULL, immagine VARCHAR(255) DEFAULT NULL, attivazione TINYINT(1) NOT NULL, created_at DATETIME DEFAULT NULL, INDEX productCategory (product_category), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADCDFC7356 FOREIGN KEY (product_category) REFERENCES product_category (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE product');
    }
}
