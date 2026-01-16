<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $client0 = new Client();
        $client0->setName('Acme Corporation');
        $client0->setEmail('acme@example.com');
        $manager->persist($client0);

        $client1 = new Client();
        $client1->setName('Warhammer Corporation');
        $client1->setEmail('warhammer@example.com');
        $manager->persist($client1);

        $client2 = new Client();
        $client2->setName('Ageofsigmar Corporation');
        $client2->setEmail('aos@example.com');
        $manager->persist($client2);

        $client3 = new Client();
        $client3->setName('Maurice Corporation');
        $client3->setEmail('maurice@example.com');
        $manager->persist($client3);

        $client4 = new Client();
        $client4->setName('Plouf Corporation');
        $client4->setEmail('plouf@example.com');
        $manager->persist($client4);

        $manager->flush();
    }
}
