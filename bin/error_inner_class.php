<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

try {
    eval("Incorrect code");
} catch (\Error $e) {
    echo get_class($e) . PHP_EOL . $e->getMessage() . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage() . $e->getLine() . PHP_EOL;
}