<?php 

namespace DesignPatterns\Behavioral\ChainOfResponsibility\Middleware;

/**
 * This Concrete Middleware checks whether a user associated with the request
 * has sufficient permissions.
 */
class RoleCheckMiddleware extends Middleware
{
    public function check(string $email, string $password): bool
    {
        if ($email === "admin@example.com") {
            echo "RoleCheckMiddleware: Hello, admin!\n<br>";

            return true;
        }
        echo "RoleCheckMiddleware: Hello, user!\n<br>";

        return parent::check($email, $password);
    }
}
