<?php

namespace Cube;

/**
 * Class CubeSolver
 *
 * @package Cube
 * @author  Vahe Markarian
 */
class CubeSolver implements CubeSolverInterface
{
    /**
     * @var int
     */
    private $attempts;

    /**
     * CubeSolver constructor.
     *
     * @param int $attempts
     */
    public function __construct(
        int $attempts
    ) {
        $this->attempts = $attempts;
    }

    /**
     * {@inheritdoc}
     */
    public function solve(CubeInterface $cube): CubeInterface
    {
        for ($i = 0; $i < $this->attempts; $i++) {
            $side      = CubeInterface::CUBE_SIDES[mt_rand(0, 5)];
            $direction = mt_rand(0, 1) === 1
                ? CubeInterface::DIRECTION_CLOCKWISE
                : CubeInterface::DIRECTION_COUNTER_CLOCKWISE;

            $cube->twist($side, $direction);

            if ($this->isSolved($cube)) {
                return $cube;
            }
        }

        return $cube;
    }

    /**
     * {@inheritdoc}
     */
    public function isSolved(CubeInterface $cube): bool
    {
        $sideChunks = array_chunk($cube->getPieces(), 9);

        foreach ($sideChunks as $sideIndex => $sideChunk) {
            $uniqueChunk = array_unique($sideChunk);

            if (count($uniqueChunk) !== 1) {
                return false;
            }
        }

        return true;
    }
}