<?php

namespace App\DataFixtures;

use App\Entity\Choix;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i=0; $i < 10000; $i++) { 
            $choix = new Choix();
            $choix->setName($faker->name);

            $manager->persist($choix);
        }

        $manager->flush();
    }
}