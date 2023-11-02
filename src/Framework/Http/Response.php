<?php

declare(strict_types=1);

namespace App\Framework\Http;

class Response
{
    public function __construct(
        protected ?string $content = '',
        protected int     $status = 200,
        protected array   $headers = []
    ) {
    }

    public function send(): void
    {
        echo $this->content;
    }
}