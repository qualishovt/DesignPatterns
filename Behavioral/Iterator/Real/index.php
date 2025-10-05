<?php

use DesignPatterns\Behavioral\Iterator\Real\CsvIterator;

require_once '../../../vendor/autoload.php';

/**
 * The client code.
 */
$csv = new CsvIterator(__DIR__ . '/cats.csv');

foreach ($csv as $key => $row) {
    print_r($row);
}