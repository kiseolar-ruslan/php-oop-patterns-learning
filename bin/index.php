<?php

declare(strict_types=1);

use App\Products\BookProduct;
use App\Products\CDProduct;
use App\Products\ShopProduct;
use App\Products\ShopProductWriter;

require_once __DIR__ . '/../vendor/autoload.php';

$product = new ShopProduct(
    'Books catalog',
    'Ruslan',
    'Krietsu',
    5.99,
);

//echo $product->getSummaryLine();

$cdProductObj = new CDProduct(
    'CD',
    'Ruslan',
    'Krietsu',
    20,
    200,
    60,
);

//echo $cdProductObj->getSummaryLine() . PHP_EOL;
//echo $cdProductObj->getSummaryLine();

$bookProductObj = new BookProduct(
    'Book',
    'Ruslan',
    'Krietsu',
    1,
    2,
);
//
//echo $bookProductObj->getSummaryLine() . PHP_EOL;

$writer = new ShopProductWriter();
//var_dump($writer->setProducts($bookProductObj)->write());

echo $cdProductObj->setDiscount(5)->getPrice();
