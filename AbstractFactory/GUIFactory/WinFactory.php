<?php

namespace App\AbstractFactory\GUIFactory;

use App\AbstractFactory\Button\Button;
use App\AbstractFactory\Checkbox\Checkbox;
use App\AbstractFactory\Button\WinButton;
use App\AbstractFactory\Checkbox\WinCheckbox;

// Concrete factories produce a family of products that belong
// to a single variant. The factory guarantees that the
// resulting products are compatible. Signatures of the concrete
// factory's methods return an abstract product, while inside
// the method a concrete product is instantiated.
class WinFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WinCheckbox();
    }
}
