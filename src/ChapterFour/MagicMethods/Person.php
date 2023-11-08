<?php

declare(strict_types=1);

namespace App\ChapterFour\MagicMethods;

use Exception;

class Person
{
    protected ?string $userName = null;
    protected ?int    $userAge  = null;

    public function __construct(protected PersonWriter $personWriter)
    {
    }

    /**
     * @throws Exception
     */
    public function __call(string $method, array $arguments): mixed
    {
        if (false === method_exists($this->personWriter, $method)) {
            throw new Exception("Method $method does not exist!");
        }

        return $this->personWriter->$method($this);
    }

    /**
     * @throws Exception
     */
    public function __get(string $property): mixed
    {
        $method = $this->methodNameCreator($property, 'get');

        if (false === method_exists($this, $method)) {
            throw new Exception("Property $property not found!");
        }

        return $this->$method();
    }

    public function __isset(string $property): bool
    {
        $method = $this->methodNameCreator($property, 'get');

        return method_exists($this, $method);
    }

    public function getName(): string
    {
        return 'Some name';
    }

    public function getAge(): int
    {
        return 123;
    }

    public function __set(string $name, mixed $value): void
    {
        $method = $this->methodNameCreator($name);

        if (true === method_exists($this, $method)) {
            $this->$method($value);
        }
    }

    public function setName(?string $name): void
    {
        $this->userName = $name;

        if (false === is_null($name)) {
            $this->userName = ucfirst($this->userName);
        }
    }

    public function setAge(?int $age): void
    {
        $this->userAge = $age;
    }

    public function __unset(string $name): void
    {
        $method = $this->methodNameCreator($name);

        if (true === method_exists($this, $method)) {
            $this->$method(null);
        }
    }

    protected function methodNameCreator(string $name, string $prefix = 'set'): string
    {
        $capitalLetter = ucfirst($name);
        $methodName    = 'set' === $prefix ? $prefix . $capitalLetter : 'get' . $capitalLetter;

        return $methodName;
    }
}