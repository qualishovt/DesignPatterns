<?php

namespace App\FactoryMethod\Button;

// Concrete products provide various implementations of the
// product interface.
class HTMLButton implements Button
{

    // Return an HTML representation of a button.
    public function render()
    {
        echo 'Web Button';
    }

    // Bind a web browser click event.
    public function onClick($f)
    {
        
    }
}
