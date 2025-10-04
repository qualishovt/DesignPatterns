<?php

namespace DesignPatterns\Creational\FactoryMethod\Creator;

use DesignPatterns\Creational\FactoryMethod\Product\LinkedInConnector;
use DesignPatterns\Creational\FactoryMethod\Product\SocialNetworkConnector;

/**
 * This Concrete Creator supports LinkedIn.
 */
class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}
