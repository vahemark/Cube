<?php

namespace Cube\Command;

use Cube\Cube;
use Cube\CubeInterface;
use Cube\CubeSolver;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;

/**
 * Class PlayCommand
 *
 * @package Cube\Command
 * @author Vahe Markarian <vahe.markarian@check24.de>
 */
class PlayCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'cube:play';

    /**
     * @return void
     */
    protected function configure(): void
    {
        $this
            ->setDescription('Play the cube.');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output): void
    {
        $adjacentSideMapping = require __DIR__ . '/../../config/adjacent_side_mapping.php';
        $colorMapping        = require __DIR__ . '/../../config/color_mapping.php';

        $cube = new Cube($adjacentSideMapping, $colorMapping);
        $cubeSolver = new CubeSolver(0);

        $helper   = $this->getHelper('question');
        $question = new ChoiceQuestion(
            'Please select an option:',
            ['Face', 'Right', 'Back', 'Left', 'Up', 'Down']
        );

        $questionDirection = new ChoiceQuestion(
            'Please select a direction:',
            ['Clockwise', 'Counter-Clockwise']
        );

        $question->setMultiselect(false);
        $questionDirection->setMultiselect(false);

        $this->render($output, $cube, $colorMapping);

        while (true) {
            $output->writeln('');
            $option    = $helper->ask($input, $output, $question);
            $direction = $helper->ask($input, $output, $questionDirection);
            $output->writeln('');

            $cube->twist($option, $direction);

            $this->render($output, $cube, $colorMapping);

            if ($cubeSolver->isSolved($cube)) {
                $output->writeln('<info>Congratulations! you solved the cube!!!</info>');
            }
        }
    }

    /**
     * @param OutputInterface $output
     * @param CubeInterface   $cube
     * @param array           $colorMapping
     *
     * @return void
     */
    public function render(
        OutputInterface $output,
        CubeInterface $cube,
        array $colorMapping
    ): void {
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

        $output->writeln('');
    }
}