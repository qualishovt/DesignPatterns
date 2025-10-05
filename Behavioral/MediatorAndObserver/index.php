<?php

use DesignPatterns\Behavioral\MediatorAndObserver\Observer\Logger;
use DesignPatterns\Behavioral\MediatorAndObserver\Observer\OnboardingNotification;
use DesignPatterns\Behavioral\MediatorAndObserver\Observer\UserRepository;
use function DesignPatterns\Behavioral\MediatorAndObserver\Mediator\events;

require_once '../../vendor/autoload.php';

/**
 * The client code.
 */

$repository = new UserRepository();
events()->attach($repository, "facebook:update");

$logger = new Logger(__DIR__ . "/log.txt");
events()->attach($logger, "*");

$onboarding = new OnboardingNotification("1@example.com");
events()->attach($onboarding, "users:created");

// ...

$repository->initialize(__DIR__ . "/users.csv");

// ...

$user = $repository->createUser([
    "name" => "John Smith",
    "email" => "john99@example.com",
]);

// ...

$user->delete();