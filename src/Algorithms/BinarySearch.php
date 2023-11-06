<?php

declare(strict_types=1);

namespace App\Algorithms;

class BinarySearch
{
    protected int|float $low    = 0;
    protected int       $mid    = 0;
    protected int|float $high   = 0;
    protected ?int      $guess  = null;
    protected ?int      $result = null;

    public function binarySearch(array $list, int $desired): float|int
    {
        $this->high = count($list) - 1;

        while ($this->low <= $this->high) {
            $this->mid   = (int)floor((($this->low + $this->high) / 2));
            $this->guess = $list[$this->mid];

            if ($this->guess === $desired) {
                $this->result = $this->mid;
                break;
            }

            if ($this->guess > $desired) {
                $this->high = $this->mid - 1;
            }

            if ($this->guess < $desired) {
                $this->low = $this->mid + 1;
            }
        }

        return $this->result;
    }
}