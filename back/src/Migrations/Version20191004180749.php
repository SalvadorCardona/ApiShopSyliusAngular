<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191004180749 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE sylius_admin_user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL, username_canonical VARCHAR(255) DEFAULT NULL, enabled BOOLEAN NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, encoder_name VARCHAR(255) DEFAULT NULL, last_login DATETIME DEFAULT NULL, password_reset_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, email_verification_token VARCHAR(255) DEFAULT NULL, verified_at DATETIME DEFAULT NULL, locked BOOLEAN NOT NULL, expires_at DATETIME DEFAULT NULL, credentials_expire_at DATETIME DEFAULT NULL, roles CLOB NOT NULL --(DC2Type:array)
        , email VARCHAR(255) DEFAULT NULL, email_canonical VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE TABLE sylius_shop_user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL, username_canonical VARCHAR(255) DEFAULT NULL, enabled BOOLEAN NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, encoder_name VARCHAR(255) DEFAULT NULL, last_login DATETIME DEFAULT NULL, password_reset_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, email_verification_token VARCHAR(255) DEFAULT NULL, verified_at DATETIME DEFAULT NULL, locked BOOLEAN NOT NULL, expires_at DATETIME DEFAULT NULL, credentials_expire_at DATETIME DEFAULT NULL, roles CLOB NOT NULL --(DC2Type:array)
        , email VARCHAR(255) DEFAULT NULL, email_canonical VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE TABLE sylius_user_oauth (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER DEFAULT NULL, provider VARCHAR(255) NOT NULL, identifier VARCHAR(255) NOT NULL, access_token VARCHAR(255) DEFAULT NULL, refresh_token VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_C3471B78A76ED395 ON sylius_user_oauth (user_id)');
        $this->addSql('CREATE UNIQUE INDEX user_provider ON sylius_user_oauth (user_id, provider)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE sylius_admin_user');
        $this->addSql('DROP TABLE sylius_shop_user');
        $this->addSql('DROP TABLE sylius_user_oauth');
    }
}
