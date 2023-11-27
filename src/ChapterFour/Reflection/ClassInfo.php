<?php

declare(strict_types=1);

namespace App\ChapterFour\Reflection;

use ReflectionClass;

class ClassInfo
{
    public static function getData(ReflectionClass $class): string
    {
        $details = '';

        $name    = $class->getName();
        $details .= $class->isUserDefined() ? "$name - is user defined" . PHP_EOL : '';
        $details .= $class->isInternal() ? "$name - is a internal class" . PHP_EOL : '';
        $details .= $class->isInterface() ? "$name - is a interface" . PHP_EOL : '';
        $details .= $class->isAbstract() ? "$name - is a abstract class" . PHP_EOL : '';
        $details .= $class->isFinal() ? "$name - is a final class" . PHP_EOL : '';
        $details .= $class->isInstantiable() ? "$name - may be instantiable" . PHP_EOL
            : "$name - may not be instantiable";
        $details .= $class->isCloneable() ? "$name - may be cloneable" . PHP_EOL
            : "may not be cloneable";

        return $details;
    }
}