<?php

declare(strict_types=1);

namespace App\ChristmasTree;

class ChristmasTree
{
    public function __construct(
        protected int $size
    ) {
        $this->christmasTree($this->size);
    }

    public function christmasTree(int $size): void
    {
        $maxWidth = $size;

        while ($size--) {
            echo str_repeat(' ', $size) . str_repeat('* ', $maxWidth - $size) . PHP_EOL;
        }
    }
}