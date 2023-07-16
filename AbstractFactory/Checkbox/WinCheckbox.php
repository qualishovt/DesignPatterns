<?php

namespace App\AbstractFactory\Checkbox;

// The product interface declares the operations that all
// concrete products must implement.
Class WinCheckbox implements Checkbox
{

    public function paint()
    {
        echo "Windows checkbox";
    }
}
