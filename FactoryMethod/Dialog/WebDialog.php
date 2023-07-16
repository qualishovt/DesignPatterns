<?php

namespace App\FactoryMethod\Dialog;

use App\FactoryMethod\Button\Button;
use App\FactoryMethod\Button\HTMLButton;

// Concrete creators override the factory method to change the
// resulting product's type.
class WebDialog extends Dialog
{
    public function createButton() : Button
    {
        return new HTMLButton();
    }
}
