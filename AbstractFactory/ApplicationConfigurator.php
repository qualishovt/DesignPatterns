<?php

namespace App\AbstractFactory;

use App\AbstractFactory\GUIFactory\WinFactory;
use App\AbstractFactory\GUIFactory\MacFactory;

// The application picks the factory type depending on the
// current configuration or environment settings and creates it
// at runtime (usually at the initialization stage).
class ApplicationConfigurator
{

    public function main()
    {
        //        $config = readfile('config.php');
        $config = ['OS' => 'Windows'];

        if ($config['OS'] == 'Windows') {
            $factory = new WinFactory();
        } else if ($config['OS'] == 'Web') {
            $factory = new MacFactory();
        } else {
            throw new \Exception("Error! Unknown operating system.");
        }

        $app = new Application($factory);
        $app->createUI();
        $app->paint();
    }
}
