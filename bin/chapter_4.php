<?php

declare(strict_types=1);

use App\ChapterFour\Reflection\ClassInfo;
use App\ChapterFour\Reflection\ReflectionUtil;
use App\Products\CDProduct;

require_once __DIR__ . '/../vendor/autoload.php';

$reflectionCDProduct = new ReflectionClass(CDProduct::class);
$methods = $reflectionCDProduct->getMethods();
//echo ReflectionUtil::getMethodSource($methods);

//foreach ($methods as $method) {
//    echo ClassInfo::methodData($method);
//    echo PHP_EOL . '------------' . PHP_EOL;
//}

$class  = new ReflectionClass(CDProduct::class);
$method = $class->getMethod("__construct");
$params = $method->getParameters();

foreach ($params as $param) {
    echo ClassInfo::paramData($param) . PHP_EOL;
}

exit;