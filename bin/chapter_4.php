<?php

declare(strict_types=1);

use App\ChapterFour\MagicMethods\Person;
use App\ChapterFour\MagicMethods\PersonWriter;
use App\Products\ShopProduct;

require_once __DIR__ . '/../vendor/autoload.php';

$shopProduct = new ShopProduct(
    'title',
    'Rus',
    'Krietsu',
    100
);


$person = new Person('Ruslan', 22, new PersonWriter());
print_r($person . PHP_EOL);

exit;