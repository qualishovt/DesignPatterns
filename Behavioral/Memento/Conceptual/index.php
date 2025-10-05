<?php

use DesignPatterns\Behavioral\Memento\Conceptual\Caretaker;
use DesignPatterns\Behavioral\Memento\Conceptual\Originator;

require_once '../../../vendor/autoload.php';

/**
 * Client code.
 */
$originator = new Originator("Super-duper-super-puper-super.");
$caretaker = new Caretaker($originator);

$caretaker->backup();
$originator->doSomething();

$caretaker->backup();
$originator->doSomething();

$caretaker->backup();
$originator->doSomething();

echo "\n<br>";
$caretaker->showHistory();

echo "\n<br>Client: Now, let's rollback!\n<br>\n<br>";
$caretaker->undo();

echo "\n<br>Client: Once more!\n<br>\n<br>";
$caretaker->undo();