<?php

declare(strict_types=1);

use App\Products\BookProduct;
use App\Products\CDProduct;
use App\Products\ShopProduct;
use App\Products\ShopProductWriter;
use App\Products\UtilityService;

require_once __DIR__ . '/../vendor/autoload.php';

$product = new ShopProduct(
    'Books catalog',
    'Ruslan',
    'Krietsu',
    5.99,
);

$cdProductObj = new CDProduct(
    'CD',
    'Ruslan',
    'Krietsu',
    20,
    200,
    60,
);

$bookProductObj = new BookProduct(
    'Book',
    'Ruslan',
    'Krietsu',
    1,
    2,
);

$utilityService = new UtilityService(100);


echo $utilityService->getFinalPrice();

