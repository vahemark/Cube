<?php

namespace Cube\Command;

use Cube\Cube;
use Cube\CubeScrambler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ScrambleCommand
 *
 * @package Cube\Command
 * @author  Vahe Markarian
 */
class ScrambleCommand extends Command
{
    /**
     * @var string
     */
    private const ARGUMENT_TWISTS = 'twists';

    /**
     * @var string
     */
    protected static $defaultName = 'cube:scramble';

    /**
     * @return void
     */
    protected function configure(): void
    {
        $this
            ->setDescription('Scrambles the cube.')
            ->addArgument(
                self::ARGUMENT_TWISTS,
                InputArgument::REQUIRED,
                'The number of twists to scramble the cube.'
            );
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output): void
    {
        $twists = $input->getArgument(self::ARGUMENT_TWISTS);
        $twists = !is_numeric($twists) ? 0 : (int) $twists;

        $adjacentSideMapping = require __DIR__ . '/../../config/adjacent_side_mapping.php';
        $colorMapping        = require __DIR__ . '/../../config/color_mapping.php';

        $cube = new Cube($adjacentSideMapping, $colorMapping);

        if ($twists > 0) {
            $cubeScrambler = new CubeScrambler();
            $cubeScrambler->scramble($cube, $twists);
        }

        $table = new Table($output);

        $sides      = array_keys($colorMapping);
        $sideChunks = array_chunk($cube->getPieces(), 9, true);

        foreach ($sideChunks as $sideIndex => $sideChunk) {

            $output->writeln($sides[$sideIndex]);

            $pieceChunks = array_chunk($sideChunk, 3);

            $side = [];

            foreach ($pieceChunks as $index => $pieceChunk) {
                $side[$index] = [];

                foreach ($pieceChunk as $color) {
                    $side[$index][] = $color;
                }
            }

            $table->setRows(
                $side
            );

            $table->render();
        }
    }
}