<?php

declare(strict_types=1);

use App\Products\ShopProduct;
use App\Сhapter4\StaticExample;

require_once __DIR__ . '/../vendor/autoload.php';

$staticObj = new StaticExample();

//echo StaticExample::sayHello() . PHP_EOL;
//echo StaticExample::$aNum . PHP_EOL;

$shopProduct = new ShopProduct(
    'title',
    'Rus',
    'Krietsu',
    1
);
echo $shopProduct::OUT_OF_STOCK . PHP_EOL;

