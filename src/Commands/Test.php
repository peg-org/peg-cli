<?php

namespace Peg\Cli\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Test extends Command
{
    protected function configure()
    {
        $this
            ->setName('test')
            ->setDescription('pingback for testing purposes')
            ->addArgument(
                'text',
                InputArgument::OPTIONAL,
                'text to repeat'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = $input->getArgument('text');
        if ($text) {
            $output->writeln($text);
        } else {
            $output->writeln('yo')
        }
    }
}
