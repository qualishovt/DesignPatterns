<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Prototype\RealWorld\Author;
use App\Prototype\RealWorld\Page;

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
    echo "Dump of the clone. Note that the author is now referencing two objects.\n\n<pre>";
    print_r($draft);
}

clientCode();
