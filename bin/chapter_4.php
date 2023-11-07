<?php

declare(strict_types=1);

use App\Products\ShopProduct;
use App\Products\ShopProductWriter;
use App\Products\TextProductWriter;
use App\Products\XmlProductWriter;
use App\ChapterFour\StaticExample;

require_once __DIR__ . '/../vendor/autoload.php';

$shopProduct = new ShopProduct(
    'title',
    'Rus',
    'Krietsu',
    100
);

$userObj = \App\ChapterFour\User::create();
var_dump($userObj);

exit;