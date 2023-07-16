<?php

namespace App\AbstractFactory\GUIFactory;

use App\AbstractFactory\Button\Button;
use App\AbstractFactory\Checkbox\Checkbox;
use App\AbstractFactory\Button\MacButton;
use App\AbstractFactory\Button\MacCheckbox;

// Each concrete factory has a corresponding product variant.
class MacFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}
