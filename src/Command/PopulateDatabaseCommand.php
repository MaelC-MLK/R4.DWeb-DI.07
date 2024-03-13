<?php

namespace App\Command;

use App\Entity\Lego;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Helper\ProgressBar;


#[AsCommand(
    name: 'app:populate-database',
    description: 'Add a short description for your command',
)]
class PopulateDatabaseCommand extends Command
{
private EntityManagerInterface $legoManager;

    public function __construct(EntityManagerInterface $legoManager)
    {
        parent::__construct();
        $this->legoManager = $legoManager;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');

        if ($arg1) {
            $json = file_get_contents(__DIR__ . '../../../' . $arg1);
            $legos = json_decode($json, true);
            $progressBar = new ProgressBar($output, count($legos));
            $progressBar->start();
            foreach ($legos as $lego) {
                $l = new Lego($lego['id']);
                $l->setName($lego['name']);
                $l->setCollection($lego['collection']);
                $l->setDescription($lego['description']);
                $l->setPrice($lego['price']);
                $l->setPieces($lego['pieces']);
                $l->setBoxImage($lego['images']['box']);
                $l->setLegoImage($lego['images']['bg']);
                $this->legoManager->persist($l);
                $progressBar->advance();
            }
            $this->legoManager->flush();
            $progressBar->finish();


        }

        if ($input->getOption('option1')) {
            // ...
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }

}


