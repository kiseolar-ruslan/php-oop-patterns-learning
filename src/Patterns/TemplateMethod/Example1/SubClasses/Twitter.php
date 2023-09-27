<?php

declare(strict_types=1);

namespace App\Patterns\TemplateMethod\Example1\SubClasses;

use App\Patterns\TemplateMethod\Example1\SocialNetwork;
use App\SimulateNetworkLatency\SimulateNetworkLatency;

/**
 * This Concrete Class implements the Twitter API.
 */
class Twitter extends SocialNetwork
{
    protected function logIn(string $userName, string $password): bool
    {
        echo "Checking user's credentials..." . PHP_EOL;
        echo "Name: " . $this->userName . PHP_EOL;
        echo "Password: " . str_repeat("*", strlen($this->password)) . PHP_EOL;

        new SimulateNetworkLatency(5);

        echo PHP_EOL . "Twitter: '" . $this->userName . "' has logged in successfully." . PHP_EOL;

        return true;
    }

    protected function sendData(string $message): bool
    {
        echo "Twitter: '" . $this->userName . "' has posted '" . $message . "'." . PHP_EOL;

        return true;
    }

    protected function logOut(): void
    {
        echo "Twitter: '" . $this->userName . "' has been logged out." . PHP_EOL;
    }
}