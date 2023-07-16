<?php

namespace App\FactoryMethod\Dialog;

use App\FactoryMethod\Button\Button;

// The creator class declares the factory method that must
// return an object of a product class. The creator's subclasses
// usually provide the implementation of this method.
abstract class Dialog
{

    // The creator may also provide some default implementation
    // of the factory method.
    abstract public function createButton() : Button;

    // Note that, despite its name, the creator's primary
    // responsibility isn't creating products. It usually
    // contains some core business logic that relies on product
    // objects returned by the factory method. Subclasses can
    // indirectly change that business logic by overriding the
    // factory method and returning a different type of product
    // from it.
    public function render()
    {
        // Call the factory method to create a product object.
        $okButton = $this->createButton();

        // Now use the product.
        $okButton->onClick(function () {
            // do something
        });
        $okButton->render();
    }
}
