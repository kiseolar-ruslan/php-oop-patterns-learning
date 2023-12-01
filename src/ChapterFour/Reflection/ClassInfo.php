<?php

declare(strict_types=1);

namespace App\ChapterFour\Reflection;

use ReflectionClass;
use ReflectionMethod;
use ReflectionParameter;
use ReflectionUnionType;

class ClassInfo
{
    public static function getData(ReflectionClass $class): string
    {
        $details = "";

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
        $details = "";

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

    public static function paramData(ReflectionParameter $parameter): string
    {
        $details        = "";
        $declaringClass = $parameter->getDeclaringClass();
        $name           = $parameter->getName();
        $position       = $parameter->getPosition();
        $details        .= "$name have position $position" . PHP_EOL;

        if (true === $parameter->hasType()) {
            $type      = $parameter->getType();
            $typeNames = [];

            if (false === $type instanceof ReflectionUnionType) {
                $typeNames[] = $type->getName();
            }

//            $types = $type->getTypes();
//
//            foreach ($types as $type) {
//                $typeNames[] = $type->getName();
//            }

            $typeName = implode("|", $typeNames);
            $details  .= "$name have type $typeName" . PHP_EOL;
        }

        if (true === $parameter->isPassedByReference()) {
            $details .= "$name is passed by reference" . PHP_EOL;
        }

        if (true === $parameter->isDefaultValueAvailable()) {
            $defaultValue = $parameter->getDefaultValue();
            $details      .= "$name has a default value $defaultValue" . PHP_EOL;
        }

        if (true === $parameter->allowsNull()) {
            $details .= "$name can be null" . PHP_EOL;
        }

        return $details;
    }
}