<?php

declare(strict_types=1);

use App\Patterns\TemplateMethod\Example\Game;
use App\Patterns\TemplateMethod\Example\SubClasses\FirstChild;

require_once __DIR__ . '/../vendor/autoload.php';


function app(Game $class): void
{
    $class->templateMethod();
}

app(new FirstChild('Middle', 1, 5, 10));