<?php

namespace App\Builder;

use App\Builder\Builders\Builder;

// The director is only responsible for executing the building101
// steps in a particular sequence. It's helpful when producing102
// products according to a specific order or configuration.103
// Strictly speaking, the director class is optional, since the104
// client can control builders directly.
class Director
{

    private Builder $builder;

    // The director works with any builder instance that the109
    // client code passes to it. This way, the client code may110
    // alter the final type of the newly assembled product.
    public function setBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    // The director can construct several product variations115
    // using the same building steps.
    public function constructSportsCar(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(2);
        $builder->setEngine('SportEngine');
        $builder->setTripComputer(true);
        $builder->setGPS(true);
    }
    
    public function constructSUV(Builder $builder)
    {
        // ...
    }
}
