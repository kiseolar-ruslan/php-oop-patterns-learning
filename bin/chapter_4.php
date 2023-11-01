<?php

declare(strict_types=1);

use App\Products\ShopProduct;
use App\Products\ShopProductWriter;
use App\Products\TextProductWriter;
use App\Products\XmlProductWriter;
use App\Сhapter4\StaticExample;

require_once __DIR__ . '/../vendor/autoload.php';

$staticObj = new StaticExample();

//echo StaticExample::sayHello() . PHP_EOL;
//echo StaticExample::$aNum . PHP_EOL;

$shopProduct = new ShopProduct(
    'title',
    'Rus',
    'Krietsu',
    100
);

$textWriter = new TextProductWriter($shopProduct);
$textWriter->write();


exit;