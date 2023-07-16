<?php

namespace App\AbstractFactory\Button;

// The product interface declares the operations that all
// concrete products must implement.
Class MacButton implements Button
{

    public function paint()
    {
        echo "Mac button";
    }
}
