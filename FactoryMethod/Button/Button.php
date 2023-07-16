<?php

namespace App\FactoryMethod\Button;

// The product interface declares the operations that all
// concrete products must implement.
interface Button
{
    public function render();

    public function onClick($f);
}
