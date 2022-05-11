<?php   

error_reporting(-1);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

echo ((new Dudom\Foo)->getClass());
new Dudom\App;