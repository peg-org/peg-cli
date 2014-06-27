<?php

namespace Peg\Cli\Commands;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends SymfonyCommand {

    protected function configure() {
        
        $this->addArgument(
            'config-path',
            InputArgument::REQUIRED,
            'Path to the PEG config you are using'
        );
    }
}
