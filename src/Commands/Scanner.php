<?php

namespace Peg\Cli\Commands;

use Peg\Cli\Commands\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Scanner extends Command
{
    protected function configure()
    {
        $this->setName('scanner');
        $this->setDescription('scanner');
        
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Someday, when I grow up, I'm gonna scan things!");
    }
}
