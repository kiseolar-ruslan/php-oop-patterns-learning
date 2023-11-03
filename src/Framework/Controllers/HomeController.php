<?php

declare(strict_types=1);

namespace App\Framework\Controllers;

use App\Framework\Http\Response;

class HomeController
{
    public function index(): Response
    {
        $content = "<h1>Hello World!!!</h1>";

        return new Response($content);
    }
}