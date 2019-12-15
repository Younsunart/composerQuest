<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload



$AppWcsHello = Hello\AppWcs::world();

echo $AppWcsHello;

$HelloWorld = HelloWorld\SayHello::world();

echo $HelloWorld;