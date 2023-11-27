<?php

declare(strict_types=1);

namespace App\ChapterFour\Reflection;

use ReflectionClass;
use ReflectionMethod;

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

    public static function methodData(ReflectionMethod $method): string
    {
        $details = '';

        $name    = $method->getName();
        $details .= $method->isUserDefined() ? "$name - is user defined" . PHP_EOL : '';
        $details .= $method->isInternal() ? "$name - is a internal method" . PHP_EOL : '';
        $details .= $method->isAbstract() ? "$name - is a abstract method" . PHP_EOL : '';
        $details .= $method->isPublic() ? "$name - is a public method" . PHP_EOL : '';
        $details .= $method->isProtected() ? "$name - is a protected method" . PHP_EOL : '';
        $details .= $method->isPrivate() ? "$name - is a private method" . PHP_EOL : '';
        $details .= $method->isStatic() ? "$name- is a static method" . PHP_EOL : '';
        $details .= $method->isFinal() ? "$name - is a final method" . PHP_EOL : '';
        $details .= $method->isConstructor() ? "$name - constructor" . PHP_EOL : '';
        $details .= $method->returnsReference() ? "$name - returns reference(not value)" . PHP_EOL : '';

        return $details;
    }
}