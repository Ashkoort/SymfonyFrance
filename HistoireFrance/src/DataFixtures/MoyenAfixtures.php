<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\MoyenAge;

class MoyenAfixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
            $MoyenAge = new MoyenAge();
            $MoyenAge ->setTitle("Moyen Âge");
            $MoyenAge ->setContent("<p>La chute de l'Empire romain annonce une période sombre dans toute l'Europe, les tribus germaniques prennent le contrôle des régions.
            Rapidement, les Francs vont s'imposer et aboutir à la formation de l'Empire carolingien véritable pôle d'une renaissance culturelle.
            Au delà des invasions normandes, la ferveur religieuse entraîne les Croisades et les innombrables pèlerinages.
            Tandis que les principes de la féodalité aboutiront à un long conflit entre la France et l'Angleterre qui renforcera le pouvoir royal. </p>");
            $MoyenAge ->setImage("http://placehold.it/350x150");

            $manager->persist($MoyenAge);
        

        $manager->flush();
    }
}
