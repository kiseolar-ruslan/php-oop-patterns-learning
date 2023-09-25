<?php

declare(strict_types=1);

namespace App\Cache\Interfaces;

interface CacheInterface
{
    public function get(string $fileName);

    public function set(string $fileName, array $value);

    public function delete(string $fileName);
}