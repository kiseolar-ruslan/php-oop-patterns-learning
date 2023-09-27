<?php

declare(strict_types=1);

namespace App\SimulateNetworkLatency;

/**
 * A little helper function that makes waiting times feel real.
 */
class SimulateNetworkLatency
{

    public function __construct(protected int $time)
    {
        $this->simulateLatency();
    }

    public function simulateLatency(): void
    {
        $i = 0;

        while ($i < $this->time) {
            echo '.';
            sleep(1);
            $i++;
        }
    }
}