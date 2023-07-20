<?php

namespace App\Builder;

use App\Builder\Builders\CarBuilder;
use App\Builder\Builders\CarManualBuilder;

class Application
{

    public Dialog $dialog;

    // The application picks a creator's type depending on the
    // current configuration or environment settings.
    public function makeCar()
    {
        $director = new Director();

        $builder = new CarBuilder();
        $director->constructSportsCar($builder);
        $car = $builder->getProduct();

        $builder = new CarManualBuilder();
        $director->constructSportsCar($builder);

        // The final product is often retrieved from a builder144
        // object since the director isn't aware of and not145
        // dependent on concrete builders and products.146
        $manual = $builder->getProduct();
    }
}
