<?php

declare(strict_types=1);

use App\Patterns\TemplateMethod\AbstractClass;
use App\Patterns\TemplateMethod\SubClasses\FirstChild;

require_once __DIR__ . '/../vendor/autoload.php';


function app(AbstractClass $class): void
{
    $class->templateMethod();
}

app(new FirstChild('Middle', 1, 5, 10));