<?php

namespace Cube;

/**
 * Class CubeScrambler
 *
 * @package Cube
 * @author  Vahe Markarian
 */
class CubeScrambler implements CubeScramblerInterface
{
    /**
     * {@inheritdoc}
     */
    public function scramble(CubeInterface $cube, int $twists): CubeInterface
    {
        for ($i = 0; $i < $twists; $i++) {
            $side      = CubeInterface::CUBE_SIDES[mt_rand(0, 5)];
            $direction = mt_rand(0, 1) === 1
                ? CubeInterface::DIRECTION_CLOCKWISE
                : CubeInterface::DIRECTION_COUNTER_CLOCKWISE;

            $cube->twist($side, $direction);
        }

        return $cube;
    }
}