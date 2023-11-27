<?php

declare(strict_types=1);

namespace App\ChapterFour\Callback;

class Totalizer
{
    public static function warnAmount($limit): callable
    {
        $count = 0;
        return function (Product $product) use ($limit, &$count) {
            $count += $product->getPrice();
            echo "Sum: $count" . PHP_EOL;

            if ($count > $limit) {
                echo "Limit Sum: $count" . PHP_EOL;
            }
        };
    }
}