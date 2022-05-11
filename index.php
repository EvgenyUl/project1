<?php   

error_reporting(-1);
ini_set('display_errors', 1);

ini_get('log_errors');
ini_get('errors_display');

require __DIR__ . '/vendor/autoload.php';

echo ((new Dudom\Foo)->getClass());
