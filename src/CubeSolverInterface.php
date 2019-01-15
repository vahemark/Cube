<?php

namespace Cube;

/**
 * Interface CubeSolverInterface
 *
 * @package Cube
 * @author  Vahe Markarian
 */
interface CubeSolverInterface
{
    /**
     * @param CubeInterface $cube
     *
     * @return CubeInterface
     */
    public function solve(CubeInterface $cube): CubeInterface;

    /**
     * @param CubeInterface $cube
     *
     * @return bool
     */
    public function isSolved(CubeInterface $cube): bool;
}