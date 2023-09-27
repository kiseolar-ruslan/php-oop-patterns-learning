<?php

declare(strict_types=1);

namespace App\Patterns\TemplateMethod\Example1;

/**
 * The Abstract Class defines the template method and declares all its steps.
 */
abstract class SocialNetwork
{
    public function __construct(
        protected string $userName,
        protected string $password,
    ) {
    }

    /**
     * The actual template method calls abstract steps in a specific order. A
     * subclass may implement all the steps, allowing this method to actually
     * post something to a social network.
     */
    final public function post(string $message): bool
    {
        /**
         * Authenticate before posting. Every network uses a different
         * authentication method.
         */
        if ($this->logIn($this->userName, $this->password) === true) {
            // Send the post data. All networks have different APIs.
            $result = $this->sendData($message);
            // ...
            $this->logOut();

            return $result;
        }

        return false;
    }

    /**
     * The steps are declared abstract to force the subclasses to implement them
     * all.
     */
    abstract protected function logIn(string $userName, string $password): bool;

    abstract protected function sendData(string $message): bool;

    abstract protected function logOut(): void;
}