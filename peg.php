<?php

$autoload = __DIR__ . '/vendor/autoload.php';
if(!file_exists($autoload)) {
die('Please install composer from https://getcomposer.org and run composer install');
}

require $autoload;

use Symfony\Component\Console\Application;
 
$console = new Application();
 
$console->run();