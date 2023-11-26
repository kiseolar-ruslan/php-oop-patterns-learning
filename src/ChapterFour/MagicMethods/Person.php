<?php

declare(strict_types=1);

namespace App\ChapterFour\MagicMethods;

use Exception;

class Person
{
    protected ?int $id = null;

    public function __construct(
        protected ?string      $userName,
        protected ?int         $userAge,
        protected PersonWriter $personWriter
    ) {
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

    public function setName(?string $name): static
    {
        $this->userName = $name;

        if (false === is_null($name)) {
            $this->userName = ucfirst($this->userName);
        }

        return $this;
    }

    public function setAge(?int $age): static
    {
        $this->userAge = $age;
        return $this;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __unset(string $name): void
    {
        $method = $this->methodNameCreator($name);

        if (true === method_exists($this, $method)) {
            $this->$method(null);
        }
    }

    public function __clone(): void
    {
        $this->id       = 0;
        $this->userName = null;
        $this->userAge  = 0;
    }

    public function __toString(): string
    {
        $string = $this->userName;
        $string .= " (Age: $this->userAge)";

        return $string;
    }

    protected function methodNameCreator(string $name, string $prefix = 'set'): string
    {
        $capitalLetter = ucfirst($name);
        $methodName    = 'set' === $prefix ? $prefix . $capitalLetter : 'get' . $capitalLetter;

        return $methodName;
    }

    public function __destruct()
    {
        $result = empty($this->id) ? 'User was not saved' : 'Saved success';

        echo $result . PHP_EOL;
    }
}