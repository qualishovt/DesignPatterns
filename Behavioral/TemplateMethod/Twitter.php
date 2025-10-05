<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * This Concrete Class implements the Twitter API.
 */
class Twitter extends SocialNetwork
{
    public function logIn(string $userName, string $password): bool
    {
        echo "\n<br>Checking user's credentials...\n<br>";
        echo "Name: " . $this->username . "\n<br>";
        echo "Password: " . str_repeat("*", strlen($this->password)) . "\n<br>";

        simulateNetworkLatency();

        echo "\n<br>\n<br>Twitter: '" . $this->username . "' has logged in successfully.\n<br>";

        return true;
    }

    public function sendData(string $message): bool
    {
        echo "Twitter: '" . $this->username . "' has posted '" . $message . "'.\n<br>";

        return true;
    }

    public function logOut(): void
    {
        echo "Twitter: '" . $this->username . "' has been logged out.\n<br>";
    }
}
