<?php

declare(strict_types=1);

namespace App\ChapterFour\Reflection;

use ReflectionClass;
use ReflectionMethod;

class ReflectionUtil
{
    public static function getClassSource(ReflectionClass $class): string
    {
        $path   = $class->getFileName();
        $lines  = file($path);
        $from   = $class->getStartLine();
        $to     = $class->getEndLine();
        $length = $to - $from + 1;

        return implode(array_slice($lines, $from - 1, $length));
    }

    public static function getMethodSource(ReflectionMethod $method): string
    {
        $path   = $method->getFileName();
        $lines  = file($path);
        $from   = $method->getStartLine();
        $to     = $method->getEndLine();
        $length = $to - $from + 1;

        return implode(array_slice($lines, $from - 1, $length));
    }
}