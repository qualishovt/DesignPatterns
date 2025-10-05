<?php

use DesignPatterns\Behavioral\Iterator\Conceptual\WordsCollection;

require_once '../../../vendor/autoload.php';

/**
 * The client code may or may not know about the Concrete Iterator or Collection
 * classes, depending on the level of indirection you want to keep in your
 * program.
 */
$collection = new WordsCollection();
$collection->addItem("First");
$collection->addItem("Second");
$collection->addItem("Third");

echo "Straight traversal:\n<br>";
foreach ($collection->getIterator() as $item) {
    echo $item . "\n<br>";
}

echo "\n<br>";
echo "Reverse traversal:\n<br>";
foreach ($collection->getReverseIterator() as $item) {
    echo $item . "\n<br>";
}