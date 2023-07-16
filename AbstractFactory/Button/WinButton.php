<?php

namespace App\AbstractFactory\Button;

// The product interface declares the operations that all
// concrete products must implement.
Class WinButton implements Button
{

    public function paint()
    {
        echo "Windows button";
    }
}
