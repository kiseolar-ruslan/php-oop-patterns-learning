<?php

declare(strict_types=1);

namespace App\Framework\Http;

class Kernel
{
    public function handle(Request $request): Response
    {
        $content = "<h1>Hello</h1>";

        return new Response($content);
    }
}