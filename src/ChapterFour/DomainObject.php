<?php

declare(strict_types=1);

namespace App\ChapterFour;

abstract class DomainObject
{
    protected const DEFAULT_GROUP = 'default';
    protected string $group;

    public function __construct()
    {
        $this->group = static::getGroup();
    }

    public static function create(): static
    {
        return new static();
    }

    public static function getGroup(): string
    {
        return self::DEFAULT_GROUP;
    }
}