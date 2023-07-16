<?php

namespace App\FactoryMethod\Button;

// Concrete products provide various implementations of the
// product interface.
class WindowsButton implements Button
{

    // Render a button in Windows style.
    public function render()
    {
        echo 'Windows Button';
    }

    // Bind a native OS click event.
    public function onClick($f)
    {
        
    }
}
