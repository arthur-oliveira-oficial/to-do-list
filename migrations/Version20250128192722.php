<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250128192722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lista (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, nome VARCHAR(255) NOT NULL, INDEX IDX_FB9FEEEDDB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lista_usuario (lista_id INT NOT NULL, usuario_id INT NOT NULL, INDEX IDX_CEB379006736D68F (lista_id), INDEX IDX_CEB37900DB38439E (usuario_id), PRIMARY KEY(lista_id, usuario_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarefa (id INT AUTO_INCREMENT NOT NULL, lista_id INT NOT NULL, descricao VARCHAR(255) NOT NULL, concluida TINYINT(1) NOT NULL, data_criacao DATETIME NOT NULL, data_conclusao DATETIME DEFAULT NULL, INDEX IDX_31B4CBA6736D68F (lista_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_2265B05DE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE lista ADD CONSTRAINT FK_FB9FEEEDDB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE lista_usuario ADD CONSTRAINT FK_CEB379006736D68F FOREIGN KEY (lista_id) REFERENCES lista (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lista_usuario ADD CONSTRAINT FK_CEB37900DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tarefa ADD CONSTRAINT FK_31B4CBA6736D68F FOREIGN KEY (lista_id) REFERENCES lista (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lista DROP FOREIGN KEY FK_FB9FEEEDDB38439E');
        $this->addSql('ALTER TABLE lista_usuario DROP FOREIGN KEY FK_CEB379006736D68F');
        $this->addSql('ALTER TABLE lista_usuario DROP FOREIGN KEY FK_CEB37900DB38439E');
        $this->addSql('ALTER TABLE tarefa DROP FOREIGN KEY FK_31B4CBA6736D68F');
        $this->addSql('DROP TABLE lista');
        $this->addSql('DROP TABLE lista_usuario');
        $this->addSql('DROP TABLE tarefa');
        $this->addSql('DROP TABLE usuario');
    }
}
