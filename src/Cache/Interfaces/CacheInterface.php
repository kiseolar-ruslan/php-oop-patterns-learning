<?php

declare(strict_types=1);

namespace App\Cache\Interfaces;

use Exception;

interface CacheInterface
{
    /**
     * @param string $fileName
     * @return array
     * @throws Exception
     */
    public function get(string $fileName): array;

    /**
     * @param string $fileName
     * @param array $value
     * @return static
     * @throws Exception
     */
    public function set(string $fileName, array $value): static;

    /**
     * @param string $fileName
     * @return bool
     * @throws Exception
     */
    public function delete(string $fileName): bool;
}