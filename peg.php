<?php

$autoload = __DIR__ . '/vendor/autoload.php';
if(!file_exists($autoload)) {
    die('Please install composer from https://getcomposer.org and run composer install');
}

require $autoload;

use Symfony\Component\Console\Application;
use Peg\Cli\Commands\Test;
use Peg\Cli\Commands\Init;
use Peg\Cli\Commands\ConfigTools;
use Peg\Cli\Commands\Generate;
use Peg\Cli\Commands\Scanner;
 
$console = new Application('PHP Extension Generator', 'dev');

$console->add(new Test);
$console->add(new Init);
$console->add(new ConfigTools);
$console->add(new Generate);
$console->add(new Scanner);
 
$console->run();
