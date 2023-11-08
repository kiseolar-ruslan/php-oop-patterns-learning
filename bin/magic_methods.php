<?php

declare(strict_types=1);

use App\ChapterFour\MagicMethods\Address;
use App\ChapterFour\MagicMethods\Person;
use App\ChapterFour\MagicMethods\PersonWriter;

require_once __DIR__ . '/../vendor/autoload.php';

$person = new Person(new PersonWriter());

//if (true === isset($person->age)) {
//    echo $person->age . PHP_EOL;
//}

//$person->name = 'ruslan';
//$person->age = 22;

//unset($person->name);

//$person->writeAge();

//unset($person->age);

$address = new Address('44, street');
echo $address->streetAddress;

exit;

