<?php
$loader = require 'vendor/autoload.php';
$loader->add('Classes\\', __DIR__.'/src/');

$a = new Classes\Boogie\Obj();

echo 'The base-dir(?) is: ' . __DIR__ . '<br/>';

$b = $a->boogieBoogie();
//var_dump($a);