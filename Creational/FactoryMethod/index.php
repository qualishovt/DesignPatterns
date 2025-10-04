<?php

require_once '../../vendor/autoload.php';

use DesignPatterns\Creational\FactoryMethod\Creator\FacebookPoster;
use DesignPatterns\Creational\FactoryMethod\Creator\LinkedInPoster;
use DesignPatterns\Creational\FactoryMethod\Creator\SocialNetworkPoster;

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 */
function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:\n<br>";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n<br>\n<br>";

echo "Testing ConcreteCreator2:\n<br>";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));