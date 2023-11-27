<?php

declare(strict_types=1);

use App\ChapterFour\Callback\ProcessSale;
use App\ChapterFour\Callback\Product;
use App\ChapterFour\Callback\Totalizer;
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

//$person = new Person('Ruslan', 22, new PersonWriter());
//print_r($person . PHP_EOL);


//$logger = function (Product $product) {
//    echo '   Record ' . $product->getName();
//};
//
//$loggerArrow = fn(Product $product) => print "  Record ({$product->getName()})";
//
//$processor = new ProcessSale();
//$processor->registerCallback(Totalizer::warnAmount(10));
//$processor->sale(new Product('Phones', 6)) . PHP_EOL;
//$processor->sale(new Product('Laptop', 6)) . PHP_EOL;


//$factoryObj = \App\ChapterFour\Callback\Factory::factory();
//$factoryObj(new Product('name', 133333));



exit;