<?php

namespace App\FactoryMethod\Dialog;

use App\FactoryMethod\Button\Button;
use App\FactoryMethod\Button\WindowsButton;

// Concrete creators override the factory method to change the
// resulting product's type.
class WindowsDialog extends Dialog
{
    public function createButton() : Button
    {
        return new WindowsButton();
    }
}
