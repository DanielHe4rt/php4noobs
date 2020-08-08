<?php

$welcome = false;
$greetings = function (string $name) use ($welcome) {
    if ($welcome) {
        echo 'Hello ' . $name;
    } else {
        echo 'Get the fuck out of here ' . $name;
    }
};

$greetings('DanielHe4rt');
