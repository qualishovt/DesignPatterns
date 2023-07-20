<?php

namespace App\Builder\Builders;

// The builder interface specifies methods for creating the
// different parts of the product objects.

interface Builder
{

    public function reset();

    public function setSeats(int $num);

    public function setEngine(string $engine);

    public function setTripComputer(bool $true);

    public function setGPS(bool $true);
}
