<?php

include_once 'animals.php';

class AnimalList
{
    static private $animals = [];

    static public function addAnimal(AnimalInterface $animal)
    {
        self::$animals[] = $animal;
    }

    static public function all()
    {
        $animalsCopy = self::$animals;
        
        return $animalsCopy;
    }
}
