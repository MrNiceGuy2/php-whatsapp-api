<?php
namespace CarlosIO\WhatsApp\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class BaseCommand extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('41795671446',   InputArgument::REQUIRED, 'Sender telephone number')
            ->addArgument('013412007195110',     InputArgument::REQUIRED, 'Sender IMEI')
            ->addArgument('nickname', InputArgument::REQUIRED, 'Sender nickname');
    }
}
