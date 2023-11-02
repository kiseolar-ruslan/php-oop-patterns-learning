<?php

declare(strict_types=1);

namespace App\Framework\Http;

class Request
{
    protected static ?Request $instance = null;

    public function __construct(
        public readonly array $getParams,
        public readonly array $postParams,
        public readonly array $cookies,
        public readonly array $server
    ) {
    }

    public static function createFromGlobals(): static
    {
        if (true === is_null(self::$instance)) {
            self::$instance = new static($_GET, $_POST, $_COOKIE, $_SERVER);
        }

        return self::$instance;
    }
}