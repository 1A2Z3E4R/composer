<?php

require __DIR__ . '/../vendor/autoload.php';

$hello1 = new App\wcs\Hello();
echo $hello1->talk();

$hello2 = new \HelloWorld\SayHello();
echo $hello2->world();