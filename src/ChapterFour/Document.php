<?php

declare(strict_types=1);

namespace App\ChapterFour;

use App\ChapterFour\DomainObject;

class Document extends DomainObject
{
    protected const DEFAULT_GROUP = 'document';

    public static function getGroup(): string
    {
        return self::DEFAULT_GROUP;
    }
}