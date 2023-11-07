<?php

declare(strict_types=1);

use App\ChapterFour\SpreadSheet;
use App\ChapterFour\User;
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

$filePath   = 'test.xml';
$a          = file_get_contents($filePath);
$xmlHandler = new \App\ChapterFour\XMLHandler($filePath);
$host       = $xmlHandler->get('host');

exit;