<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Button\Button;
use App\AbstractFactory\Checkbox\Checkbox;
use App\AbstractFactory\GUIFactory\GUIFactory;

class Application
{

    private Button $button;
    private Checkbox $checkbox;
    private GUIFactory $factory;

    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createUI()
    {
        $this->button = $this->factory->createButton();
        $this->checkbox = $this->factory->createCheckbox();
    }

    public function paint()
    {
        $this->button->paint();
        $this->checkbox->paint();
    }
}
