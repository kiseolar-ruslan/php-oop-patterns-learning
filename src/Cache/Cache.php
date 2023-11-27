<?php

declare(strict_types=1);

namespace App\Cache;

use App\Cache\Interfaces\CacheInterface;
use Exception;

class Cache implements CacheInterface
{
    protected const SAVE_DIR           = __DIR__ . '/Storage';
    protected const EXPIRES_BY_DEFAULT = 365 * 24 * 60 * 60;
    protected const EXPIRES = 'expires';

    /**
     * @throws Exception
     */
    public function get(string $fileName): array
    {
        if (false === $this->fileExists($fileName)) {
            throw new Exception('Data not found!');
        }

        if (false === $data = file_get_contents($this->filePath($fileName))) {
            throw new Exception('Data retrieval failed!');
        }

        if (true === $this->expired($fileName)) {
            throw new Exception('Expired!');
        }

        return (array)json_decode($data, true);
    }

    /**
     * @throws Exception
     */
    public function set(string $fileName, array $value, int|float $expires = self::EXPIRES_BY_DEFAULT): static
    {
        $value[self::EXPIRES] = time() + $expires;

        if (false === file_put_contents($this->filePath($fileName), json_encode($value))) {
            throw new Exception('Failed to write data');
        }

        return $this;
    }

    /**
     * @throws Exception
     */
    public function delete(string $fileName): bool
    {
        if (false === $this->fileExists($fileName)) {
            throw new Exception('File not found');
        }

        if (false === unlink($this->filePath($fileName))) {
            throw new Exception('Failed delete data');
        }

        return true;
    }

    protected function fileExists(string $fileName): bool
    {
        if (false === file_exists($this->filePath($fileName))) {
            return false;
        }

        return true;
    }

    protected function filePath(string $fileName): string
    {
        return self::SAVE_DIR . "/$fileName.json";
    }

    /**
     * @throws Exception
     */
    protected function expired(string $fileName): bool
    {
        $data = $this->get($fileName);

        if ($data['expires'] >= time()) {
            return false;
        }

        $this->delete($fileName);
        return true;
    }
}