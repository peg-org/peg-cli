<?php

namespace Peg\Cli\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ConfigTools extends Command
{
    protected function configure()
    {
        $this
            ->setName('config-tools')
            ->setDescription('Tools for configs')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Someday, when I grow up, I'm gonna help with configs!");
    }
}
