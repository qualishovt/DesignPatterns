<?php

use DesignPatterns\Behavioral\Observer\Conceptual\Mediator\Subject;
use DesignPatterns\Behavioral\Observer\Conceptual\Observer\ConcreteObserverA;
use DesignPatterns\Behavioral\Observer\Conceptual\Observer\ConcreteObserverB;

require_once '../../../vendor/autoload.php';

/**
 * The client code.
 */

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();