<?php

declare(strict_types=1);

namespace App\Framework\Controllers;

use App\Framework\Http\Response;

class PostController
{
    public function show(int $id): Response
    {
        $content = "<h1>This is post $id</h1>";

        return new Response($content);
    }
}