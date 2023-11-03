<?php

declare(strict_types=1);

use App\Framework\Http\Kernel;
use App\Framework\Http\Request;
use App\Framework\Http\Response;

const BASE_PATH = __DIR__;

require_once __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();

$kernel = new Kernel();

$response = $kernel->handle($request);
$response->send();





