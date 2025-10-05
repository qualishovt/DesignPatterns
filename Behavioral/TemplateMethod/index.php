<?php

use DesignPatterns\Behavioral\TemplateMethod\Facebook;
use DesignPatterns\Behavioral\TemplateMethod\Twitter;

require_once '../../vendor/autoload.php';

/**
 * The client code.
 */
echo "Username: \n<br>";
$username = readline();
echo "Password: \n<br>";
$password = readline();
echo "Message: \n<br>";
$message = readline();

echo "\n<br>Choose the social network to post the message:\n<br>" .
    "1 - Facebook\n<br>" .
    "2 - Twitter\n<br>";
$choice = readline();

// Now, let's create a proper social network object and send the message.
if ($choice == 1) {
    $network = new Facebook($username, $password);
} elseif ($choice == 2) {
    $network = new Twitter($username, $password);
} else {
    die("Sorry, I'm not sure what you mean by that.\n<br>");
}
$network->post($message);