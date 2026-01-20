<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260120133050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, numero INT NOT NULL, nom VARCHAR(100) NOT NULL, complementaire VARCHAR(20) DEFAULT NULL, postale VARCHAR(30) NOT NULL, ville VARCHAR(100) NOT NULL, pays VARCHAR(30) NOT NULL, ue TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE audit (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, type VARCHAR(30) NOT NULL, nom VARCHAR(30) NOT NULL, creation DATE NOT NULL, fin DATE DEFAULT NULL, statut VARCHAR(30) NOT NULL, INDEX IDX_9218FF7919EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE auditeur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, statut VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE auditeur_audit (auditeur_id INT NOT NULL, audit_id INT NOT NULL, INDEX IDX_B88C2A7CD8CACAB (auditeur_id), INDEX IDX_B88C2A7CBD29F359 (audit_id), PRIMARY KEY(auditeur_id, audit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, adresse_id INT NOT NULL, name VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, siret INT NOT NULL, telephone INT NOT NULL, UNIQUE INDEX UNIQ_C74404554DE7DC5C (adresse_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, audit_id INT DEFAULT NULL, numero INT NOT NULL, statut TINYINT(1) NOT NULL, prix_hors_taxe DOUBLE PRECISION NOT NULL, prix_toutes_taxes DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_FE866410BD29F359 (audit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture_taxe (facture_id INT NOT NULL, taxe_id INT NOT NULL, INDEX IDX_B03403257F2DEE08 (facture_id), INDEX IDX_B03403251AB947A4 (taxe_id), PRIMARY KEY(facture_id, taxe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rapport (id INT AUTO_INCREMENT NOT NULL, audit_id INT DEFAULT NULL, type VARCHAR(30) NOT NULL, nom VARCHAR(30) NOT NULL, chemin VARCHAR(150) NOT NULL, poids INT NOT NULL, creation DATE NOT NULL, INDEX IDX_BE34A09CBD29F359 (audit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taxe (id INT AUTO_INCREMENT NOT NULL, taux DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, role_id INT DEFAULT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, email VARCHAR(100) NOT NULL, mdp VARCHAR(30) NOT NULL, creation DATE NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur_audit (utilisateur_id INT NOT NULL, audit_id INT NOT NULL, INDEX IDX_54DDA7A7FB88E14F (utilisateur_id), INDEX IDX_54DDA7A7BD29F359 (audit_id), PRIMARY KEY(utilisateur_id, audit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE audit ADD CONSTRAINT FK_9218FF7919EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE auditeur_audit ADD CONSTRAINT FK_B88C2A7CD8CACAB FOREIGN KEY (auditeur_id) REFERENCES auditeur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE auditeur_audit ADD CONSTRAINT FK_B88C2A7CBD29F359 FOREIGN KEY (audit_id) REFERENCES audit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C74404554DE7DC5C FOREIGN KEY (adresse_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE866410BD29F359 FOREIGN KEY (audit_id) REFERENCES audit (id)');
        $this->addSql('ALTER TABLE facture_taxe ADD CONSTRAINT FK_B03403257F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE facture_taxe ADD CONSTRAINT FK_B03403251AB947A4 FOREIGN KEY (taxe_id) REFERENCES taxe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09CBD29F359 FOREIGN KEY (audit_id) REFERENCES audit (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE utilisateur_audit ADD CONSTRAINT FK_54DDA7A7FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur_audit ADD CONSTRAINT FK_54DDA7A7BD29F359 FOREIGN KEY (audit_id) REFERENCES audit (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE audit DROP FOREIGN KEY FK_9218FF7919EB6921');
        $this->addSql('ALTER TABLE auditeur_audit DROP FOREIGN KEY FK_B88C2A7CD8CACAB');
        $this->addSql('ALTER TABLE auditeur_audit DROP FOREIGN KEY FK_B88C2A7CBD29F359');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C74404554DE7DC5C');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE866410BD29F359');
        $this->addSql('ALTER TABLE facture_taxe DROP FOREIGN KEY FK_B03403257F2DEE08');
        $this->addSql('ALTER TABLE facture_taxe DROP FOREIGN KEY FK_B03403251AB947A4');
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09CBD29F359');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3D60322AC');
        $this->addSql('ALTER TABLE utilisateur_audit DROP FOREIGN KEY FK_54DDA7A7FB88E14F');
        $this->addSql('ALTER TABLE utilisateur_audit DROP FOREIGN KEY FK_54DDA7A7BD29F359');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE audit');
        $this->addSql('DROP TABLE auditeur');
        $this->addSql('DROP TABLE auditeur_audit');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE facture_taxe');
        $this->addSql('DROP TABLE rapport');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE taxe');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE utilisateur_audit');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
