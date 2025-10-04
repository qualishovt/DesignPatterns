<?php

require_once '../../vendor/autoload.php';

use DesignPatterns\Creational\AbstractFactory\Factory\PHPTemplateFactory;

/**
 * Now, in other parts of the app, the client code can accept factory objects of
 * any type.
 */
$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n<br>";
echo $page->render(new PHPTemplateFactory());


// Uncomment the following if you have Twig installed.

// echo "Testing rendering with the Twig factory:\n<br>"; echo $page->render(new
// TwigTemplateFactory());