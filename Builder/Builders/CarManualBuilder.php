<?php

namespace App\Builder\Builders;

use App\Builder\Classes\Manual;

// The concrete builder classes follow the builder interface and
// provide specific implementations of the building steps. Your
// program may have several variations of builders, each
// implemented differently.
class CarManualBuilder implements Builder
{

    private Manual $manual;

    // A fresh builder instance should contain a blank product
    // object which it uses in further assembly.
    public function __construct()
    {
        $this->reset();
    }

    // The reset method clears the object being built.
    public function reset()
    {
        $this->manual = new Manual();
    }

    public function setEngine(string $engine)
    {
        // Add engine instructions.
    }

    public function setGPS(bool $true)
    {
        // Add GPS instructions.
    }

    // All production steps work with the same product instance.
    public function setSeats(int $num)
    {
        // Document car seat features.
    }

    public function setTripComputer(bool $true)
    {
        // Add trip computer instructions.
    }

    // Concrete builders are supposed to provide their own
    // methods for retrieving results. That's because various
    // types of builders may create entirely different products
    // that don't all follow the same interface. Therefore such
    // methods can't be declared in the builder interface (at
    // least not in a statically-typed programming language).
    //
    // Usually, after returning the end result to the client, a
    // builder instance is expected to be ready to start
    // producing another product. That's why it's a usual
    // practice to call the reset method at the end of the
    // `getProduct` method body. However, this behavior isn't
    // mandatory, and you can make your builder wait for an
    // explicit reset call from the client code before disposing
    // of the previous result.
    public function getProduct(): Manual
    {
        $product = $this->manual;
        $this->reset();
        return $product;
    }
}
