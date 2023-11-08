<?php

declare(strict_types=1);

namespace App\SimulateNetworkLatency;

/**
 * A little helper function that makes waiting times feel real.
 */
class SimulateNetworkLatency
{
    public static function simulateLatency(int $time): void
    {
        $i = 0;

        while ($i < $time) {
            echo '.';
            sleep(1);
            $i++;
        }
    }
}