<?php

namespace App\AbstractFactory\Checkbox;

// The product interface declares the operations that all
// concrete products must implement.
Class MacCheckbox implements Checkbox
{

    public function paint()
    {
        echo "Mac checkbox";
    }
}
