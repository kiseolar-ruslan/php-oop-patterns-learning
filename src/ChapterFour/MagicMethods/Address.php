<?php

declare(strict_types=1);

namespace App\ChapterFour\MagicMethods;

use AllowDynamicProperties;
use Exception;

//#[AllowDynamicProperties]
class Address
{
    protected string $number;
    protected string $street;

    public function __construct(
        protected string  $maybeNumber,
        protected ?string $maybeStreet = null,
    ) {
        if (false === is_null($maybeStreet)) {
            $this->number = $maybeNumber;
            $this->street = $maybeStreet;
            return;
        }

        $this->streetAddress = $maybeNumber;
    }

    /**
     * @throws Exception
     */
    public function __set(string $name, mixed $value): void
    {
        if ('streetAddress' === $name) {
            if (false === (bool)preg_match("/^(\d+.*?)[\s,]+(.+)$/", $value, $matches)) {
                throw new Exception("Address analysis error: '$value'");
            }

            $this->number = $matches[1];
            $this->street = $matches[2];
        }
    }

    /**
     * @throws Exception
     */
    public function __get(string $name): string
    {
        if ('streetAddress' !== $name) {
            throw new Exception("The $name doesn't match 'streetAddress'");
        }

        return 'Street number: ' . $this->number . PHP_EOL .
            'Street name: ' . $this->street . PHP_EOL;
    }
}