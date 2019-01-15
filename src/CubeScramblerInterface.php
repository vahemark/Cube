<?php

namespace Cube;

/**
 * Interface CubeScramblerInterface
 *
 * @package Cube
 * @author  Vahe Markarian
 */
interface CubeScramblerInterface
{
    /**
     * @param CubeInterface $cube
     * @param int           $twists
     *
     * @return CubeInterface
     */
    public function scramble(CubeInterface $cube, int $twists): CubeInterface;
}