<?php

namespace Peg\Cli\Commands;

use Peg\Cli\Commands\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ConfigTools extends Command {
    
    protected function configure() {
        
        $this->setName('config-tools');
        $this->setDescription('Tools for configs');
        
        parent::configure();
        
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        
        $output->writeln("Someday, when I grow up, I'm gonna help with configs!");
        
    }
}
