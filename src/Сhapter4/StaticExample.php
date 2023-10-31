<?php

declare(strict_types=1);

namespace App\Сhapter4;

class StaticExample
{
    public static int $aNum = 0;
    public int        $b    = 0;

    public static function sayHello(): string
    {
        self::$aNum++;
        return "Hello! " . '"' . self::$aNum . '"';
    }

}