<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie -> setTitle('The Dark Knight');
        $movie -> setReleaseYear(2008);
        $movie -> setDescription('This The Dark Knight');
        $movie -> setImagePath('https://cdn.pixabay.com/photo/2016/02/27/01/44/joker-1225027_960_720.jpg');

        $movie -> addActor($this -> getReference('actor_1'));
        $movie -> addActor($this -> getReference('actor_2'));

        $manager -> persist($movie);

        $movie2 = new Movie();
        $movie2 -> setTitle('Avegenrs');
        $movie2 -> setReleaseYear(2008);
        $movie2 -> setDescription('This The Dark Knight');
        $movie2 -> setImagePath('https://cdn.pixabay.com/photo/2018/03/14/15/39/catwoman-3225530_960_720.png');
        $movie2 -> addActor($this -> getReference('actor_3'));
        $movie2 -> addActor($this -> getReference('actor_4'));

        $manager -> persist($movie2);

        $manager -> flush();
    }
}
