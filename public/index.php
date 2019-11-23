<?php

require_once __DIR__ . '/../vendor/autoload.php';

use alphasitellc\HelloWorld\Index;

$greeting = new Index();

echo $greeting->greet("Hello Composer");

