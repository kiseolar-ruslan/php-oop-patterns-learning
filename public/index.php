<?php

declare(strict_types=1);

use App\Framework\Http\Kernel;
use App\Framework\Http\Request;
use App\Framework\Http\Response;

require_once __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();

$kernel = new Kernel();

$response = $kernel->handle($request);
$response->send();





