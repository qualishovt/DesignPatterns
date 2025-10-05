<?php 

namespace DesignPatterns\Behavioral\ChainOfResponsibility\Middleware;

use DesignPatterns\Behavioral\ChainOfResponsibility\Server;

/**
 * This Concrete Middleware checks whether a user with given credentials exists.
 */
class UserExistsMiddleware extends Middleware
{
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            echo "UserExistsMiddleware: This email is not registered!\n<br>";

            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            echo "UserExistsMiddleware: Wrong password!\n<br>";

            return false;
        }

        return parent::check($email, $password);
    }
}
