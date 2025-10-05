<?php

use DesignPatterns\Behavioral\Command\Command\IMDBGenresScrapingCommand;
use DesignPatterns\Behavioral\Command\Queue;

require_once '../../vendor/autoload.php';

/**
 * The client code.
 */

$queue = Queue::get();

if ($queue->isEmpty()) {
    $queue->add(new IMDBGenresScrapingCommand());
}

$queue->work();