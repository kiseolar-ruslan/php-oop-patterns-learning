<?php

declare(strict_types=1);

namespace App\ChapterFour\Callback;

class ProcessSale
{
    protected array $callbacks = [];

    public function registerCallback(callable $callback): static
    {
        $this->callbacks[] = $callback;

        return $this;
    }

    public function sale(Product $product): void
    {
        echo $product->getName() . ': processing' . PHP_EOL;

        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}