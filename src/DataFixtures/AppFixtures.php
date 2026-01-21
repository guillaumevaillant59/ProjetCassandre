<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\Adresse;
use App\Entity\Utilisateur;
use App\Entity\Role;
use App\Entity\Audit;
use App\Entity\Auditeur;
use App\Entity\Facture;
use App\Entity\Taxe;
use App\Entity\Rapport;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $client0 = new Client();
        $client0->setName('Acme Corporation');
        $client0->setEmail('acme@example.com');
        $client0->setTelephone('0123456789');
        $client0->setSiret(12345678901234);
        $adresse0 = new Adresse();
        $adresse0->setNumero(10);
        $adresse0->setNom('Rue de la Paix'); 
        $adresse0->setComplementaire('Bâtiment A');
        $adresse0->setPostale('75002');
        $adresse0->setVille('Paris');
        $adresse0->setPays('France');
        $adresse0->setUe(true);
        $manager->persist($adresse0);
        $client0->setAdresse($adresse0);        
        $manager->persist($client0);

        $client1 = new Client();
        $client1->setName('Warhammer Corporation');
        $client1->setEmail('warhammer@example.com');
        $client1->setTelephone('0123456790');
        $client1->setSiret(12345678901235);
        $adresse1 = new Adresse();
        $adresse1->setNumero(45);
        $adresse1->setNom('Rue de la Fortune'); 
        $adresse1->setPostale('50025');
        $adresse1->setVille('Caen');
        $adresse1->setPays('France');
        $adresse1->setUe(true);
        $manager->persist($adresse1);
        $client1->setAdresse($adresse1);
        $manager->persist($client1);

        $client2 = new Client();
        $client2->setName('Ageofsigmar Corporation');
        $client2->setEmail('aos@example.com');
        $client2->setTelephone('0123456791');
        $client2->setSiret(12345678901236);
        $adresse2 = new Adresse();
        $adresse2->setNumero(78);   
        $adresse2->setNom('Avenue des Champs');
        $adresse2->setComplementaire('Appartement 5B');
        $adresse2->setPostale('69003');
        $adresse2->setVille('Lyon');
        $adresse2->setPays('France');   
        $adresse2->setUe(true);
        $manager->persist($adresse2);
        $client2->setAdresse($adresse2);
        $manager->persist($client2);

        $client3 = new Client();
        $client3->setName('Maurice Corporation');
        $client3->setEmail('maurice@example.com');
        $client3->setTelephone('0123456792');
        $client3->setSiret(12345678901237);
        $adresse3 = new Adresse();
        $adresse3->setNumero(5);
        $adresse3->setNom('Boulevard des Fleurs');
        $adresse3->setPostale('33000');
        $adresse3->setVille('Bordeaux');
        $adresse3->setPays('France');
        $adresse3->setUe(true);
        $manager->persist($adresse3);
        $client3->setAdresse($adresse3);
        $manager->persist($client3);

        $client4 = new Client();
        $client4->setName('Plouf Corporation');
        $client4->setEmail('plouf@example.com');
        $client4->setTelephone('0123456793');
        $client4->setSiret(12345678901238);
        $adresse4 = new Adresse();
        $adresse4->setNumero(22);
        $adresse4->setNom('Rue du Commerce');
        $adresse4->setPostale('75001');
        $adresse4->setVille('Paris');
        $adresse4->setPays('France');
        $adresse4->setUe(true);
        $manager->persist($adresse4);
        $client4->setAdresse($adresse4);
        $manager->persist($client4);

        $utilisateur0 = new Utilisateur();
        $utilisateur0->setNom('Dupont');    
        $utilisateur0->setEmail('dupont@example.com');
        $utilisateur0->setPrenom('Jean');
        $utilisateur0->setMdp('password123');
        $utilisateur0->setCreation(new \DateTime('2024-01-15 10:00:00'));
        $role0 = new Role();
        $role0->setCode('Admin');
        $manager->persist($role0);
        $utilisateur0->setRole($role0);
        $manager->persist($utilisateur0);

        $utilisateur1 = new Utilisateur();
        $utilisateur1->setNom('Martin');
        $utilisateur1->setEmail('martin@example.com');
        $utilisateur1->setPrenom('Pierre');
        $utilisateur1->setMdp('password456');
        $utilisateur1->setCreation(new \DateTime('2024-01-16 10:00:00'));
        $role1 = new Role();
        $role1->setCode('User');
        $manager->persist($role1);
        $utilisateur1->setRole($role1);
        $manager->persist($utilisateur1);

        $utilisateur2 = new Utilisateur();
        $utilisateur2->setNom('Bernard');
        $utilisateur2->setEmail('bernard@example.com');
        $utilisateur2->setPrenom('Luc');
        $utilisateur2->setMdp('password789');
        $utilisateur2->setCreation(new \DateTime('2024-01-17 10:00:00'));
        $role2 = new Role();
        $role2->setCode('User');
        $manager->persist($role2);
        $utilisateur2->setRole($role2);
        $manager->persist($utilisateur2);

        $utilisateur3 = new Utilisateur();
        $utilisateur3->setNom('Dubois');
        $utilisateur3->setEmail('dubois@example.com');
        $utilisateur3->setPrenom('Marie');
        $utilisateur3->setMdp('password012');
        $utilisateur3->setCreation(new \DateTime('2024-01-18 10:00:00'));
        $role3 = new Role();
        $role3->setCode('User');
        $manager->persist($role3);
        $utilisateur3->setRole($role3);
        $manager->persist($utilisateur3);

        $utilisateur4 = new Utilisateur();
        $utilisateur4->setNom('Moreau');    
        $utilisateur4->setEmail('moreau@example.com');
        $utilisateur4->setPrenom('Sophie');
        $utilisateur4->setMdp('password345');
        $utilisateur4->setCreation(new \DateTime('2024-01-19 10:00:00'));
        $role4 = new Role();
        $role4->setCode('User');
        $manager->persist($role4);
        $utilisateur4->setRole($role4);
        $manager->persist($utilisateur4);

        $auditeur0 = new Auditeur();
        $auditeur0->setNom('Leroy');    
        $auditeur0->setPrenom('Antoine');
        $auditeur0->setStatut('Auditeur');
        $manager->persist($auditeur0);

        $auditeur1 = new Auditeur();
        $auditeur1->setNom('Fournier');
        $auditeur1->setPrenom('Claire');
        $auditeur1->setStatut('Responsable');
        $manager->persist($auditeur1);

        $auditeur2 = new Auditeur();
        $auditeur2->setNom('Rousseau');
        $auditeur2->setPrenom('Thomas');
        $auditeur2->setStatut('Responsable');
        $manager->persist($auditeur2);

        $auditeur3 = new Auditeur();
        $auditeur3->setNom('Blanc');        
        $auditeur3->setPrenom('Isabelle');
        $auditeur3->setStatut('Auditeur');
        $manager->persist($auditeur3);

        $auditeur4 = new Auditeur();
        $auditeur4->setNom('Garcia');   
        $auditeur4->setPrenom('Julien');
        $auditeur4->setStatut('Auditeur');       
        $manager->persist($auditeur4);

        $audit0 = new Audit();
        $audit0->setNom('Audit Initial');
        $audit0->setType('Audit de Conformité');
        $audit0->setCreation(new \DateTime('2024-02-01 09:00:00'));
        $audit0->setFin(new \DateTime('2024-02-10 17:00:00'));
        $audit0->setStatut('Terminé');
        $audit0->setClient($client0);
        $audit0->addUtilisateur($utilisateur0);
        $audit0->addUtilisateur($utilisateur2);
        $audit0->addAuditeur($auditeur2);
        $audit0->addAuditeur($auditeur3);
        $rapport0 = new Rapport();
        $rapport0->setType('PDF');
        $rapport0->setNom('Rapport d\'audit initial - Acme Corporation');
        $rapport0->setChemin('/rapports/acme_audit_initial.pdf');
        $rapport0->setPoids(2048);
        $rapport0->setCreation(new \DateTime('2024-02-11 10:00:00'));
        $rapport0->setAudit($audit0);
        $manager->persist($rapport0);   
        $audit0->addRapport($rapport0);
        $manager->persist($audit0);

        

        $audit1 = new Audit();
        $audit1->setNom('Audit de Sécurité');  
        $audit1->setType('Audit de Conformité'); 
        $audit1->setCreation(new \DateTime('2024-03-05 10:00:00'));
        $audit1->setStatut('En cours');
        $audit1->setClient($client1);
        $audit1->addUtilisateur($utilisateur1);
        $audit1->addUtilisateur($utilisateur3);
        $audit1->addAuditeur($auditeur0);
        $audit1->addAuditeur($auditeur1);
        $manager->persist($audit1);

        $audit2 = new Audit();
        $audit2->setNom('Audit de Performance');
        $audit2->setType('Audit de Conformité');
        $audit2->setCreation(new \DateTime('2024-04-01 09:00:00'));
        $audit2->setStatut('En cours');
        $audit2->setClient($client2);
        $audit2->addUtilisateur($utilisateur0);
        $audit2->addUtilisateur($utilisateur4);
        $audit2->addAuditeur($auditeur1);
        $audit2->addAuditeur($auditeur3);
        $audit2->addAuditeur($auditeur4);
        $manager->persist($audit2);

        $audit3 = new Audit();
        $audit3->setNom('Audit de Conformité');
        $audit3->setType('Audit de Conformité');
        $audit3->setCreation(new \DateTime('2024-05-10 11:00:00'));
        $audit3->setStatut('Planifié'); 
        $audit3->setClient($client3);
        $manager->persist($audit3);

        $audit4 = new Audit();
        $audit4->setNom('Audit Final');
        $audit4->setType('Audit de Conformité');         
        $audit4->setCreation(new \DateTime('2024-06-15 09:00:00'));
        $audit4->setStatut('Planifié'); 
        $audit4->setClient($client4);
        $manager->persist($audit4);

        $facture0 = new Facture();
        $facture0->setNumero(1001);
        $facture0->setStatut(true); 
        $facture0->setPrixHorsTaxe(5000.00);
        $taxe0 = new Taxe();
        $taxe0->setTaux(20.0);        
        $manager->persist($taxe0);
        $facture0->addTax($taxe0);
        $facture0->setPrixToutesTaxes($facture0->getPrixHorsTaxe() * (1 + $taxe0->getTaux() / 100));
        $facture0->setAudit($audit0);
        $manager->persist($facture0); 

        $client0->addAudit($audit0);
        $client0->addAudit($audit1);
        $client0->addAudit($audit2);
        $manager->persist($client0);       

        $utilisateur0->addAudit($audit0);
        $utilisateur0->addAudit($audit2);
        $utilisateur1->addAudit($audit1);
        $utilisateur2->addAudit($audit0);
        $utilisateur3->addAudit($audit1);
        $utilisateur4->addAudit($audit2);   
        $manager->persist($utilisateur0);
        $manager->persist($utilisateur1);
        $manager->persist($utilisateur2);
        $manager->persist($utilisateur3);
        $manager->persist($utilisateur4);   

        $auditeur0->addAudit($audit1);
        $auditeur1->addAudit($audit1);  
        $auditeur1->addAudit($audit2);
        $auditeur2->addAudit($audit0);
        $auditeur3->addAudit($audit0);
        $auditeur3->addAudit($audit2);
        $auditeur4->addAudit($audit2);
        $manager->persist($auditeur0);
        $manager->persist($auditeur1);
        $manager->persist($auditeur2);
        $manager->persist($auditeur3);
        $manager->persist($auditeur4);

        $manager->flush();
    }
}
