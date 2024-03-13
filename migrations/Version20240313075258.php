<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240313075258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lego ADD collection_id INT NOT NULL');
        $this->addSql('ALTER TABLE lego ADD CONSTRAINT FK_E9191FC5514956FD FOREIGN KEY (collection_id) REFERENCES lego_collection (id)');
        $this->addSql('CREATE INDEX IDX_E9191FC5514956FD ON lego (collection_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lego DROP FOREIGN KEY FK_E9191FC5514956FD');
        $this->addSql('DROP INDEX IDX_E9191FC5514956FD ON lego');
        $this->addSql('ALTER TABLE lego DROP collection_id');
    }
}
