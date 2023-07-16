<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Dialog\Dialog;
use App\FactoryMethod\Dialog\WindowsDialog;
use App\FactoryMethod\Dialog\WebDialog;

class Application
{

    public Dialog $dialog;

    // The application picks a creator's type depending on the
    // current configuration or environment settings.
    public function initialize()
    {
//        $config = readfile('config.php');
        $config = ['OS' => 'Windows'];

        if ($config['OS'] == 'Windows') {
            $this->dialog = new WindowsDialog();
        } else if ($config['OS'] == 'Web') {
            $this->dialog = new WebDialog();
        } else {
            throw new \Exception("Error! Unknown operating system.");
        }
    }

    // The client code works with an instance of a concrete
    // creator, albeit through its base interface. As long as
    // the client keeps working with the creator via the base
    // interface, you can pass it any creator's subclass.
    public function main()
    {
        $this->initialize();
        $this->dialog->render();
    }
}
