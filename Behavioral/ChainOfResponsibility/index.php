<?php

use DesignPatterns\Behavioral\ChainOfResponsibility\Middleware\RoleCheckMiddleware;
use DesignPatterns\Behavioral\ChainOfResponsibility\Middleware\ThrottlingMiddleware;
use DesignPatterns\Behavioral\ChainOfResponsibility\Middleware\UserExistsMiddleware;
use DesignPatterns\Behavioral\ChainOfResponsibility\Server;

require_once '../../vendor/autoload.php';

/**
 * The client code.
 */
$server = new Server();
$server->register("admin@example.com", "admin_pass");
$server->register("user@example.com", "user_pass");

// All middleware are chained. The client can build various configurations of
// chains depending on its needs.
$middleware = new ThrottlingMiddleware(2);
$middleware
    ->linkWith(new UserExistsMiddleware($server))
    ->linkWith(new RoleCheckMiddleware());

// The server gets a chain from the client code.
$server->setMiddleware($middleware);

// ...

do {
    echo "\n<br>Enter your email:\n<br>";
    $email = readline();
    echo "Enter your password:\n<br>";
    $password = readline();
    $success = $server->logIn($email, $password);
} while (!$success);