<?php

declare(strict_types=1);

namespace App\ChapterFour\MagicMethods;

class PersonWriter
{
    public function writeName(Person $person): void
    {
        echo $person->getName() . PHP_EOL;
    }

    public function writeAge(Person $person): void
    {
        echo $person->getAge() . PHP_EOL;
    }
}