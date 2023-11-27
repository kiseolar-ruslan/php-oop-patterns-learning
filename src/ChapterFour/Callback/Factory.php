<?php

declare(strict_types=1);

namespace App\ChapterFour\Callback;

class Factory
{
    public static function factory(): callable
    {
        return function (Product $product): void {
            echo 'YES: ' . $product->getPrice();
        };
    }
}