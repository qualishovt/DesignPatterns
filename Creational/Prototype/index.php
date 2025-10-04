<?php

require_once '../../vendor/autoload.php';

use DesignPatterns\Creational\Prototype\Page;
use DesignPatterns\Creational\Prototype\Author;

/**
 * The client code.
 */
function clientCode()
{
    $author = new Author("John Smith");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    // ...

    $page->addComment("Nice tip, thanks!");

    // ...

    $draft = clone $page;
    echo "Dump of the clone. Note that the author is now referencing two objects.\n<br>\n<br>";
    print_r($draft);
}

clientCode();