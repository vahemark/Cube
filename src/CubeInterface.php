<?php

namespace Cube;

/**
 * Interface CubeInterface
 *
 * @package Cube
 * @author  Vahe Markarian
 */
interface CubeInterface
{
    /**
     * @var string
     */
    public const SIDE_FACE = 'Face';

    /**
     * @var string
     */
    public const SIDE_BACK = 'Back';

    /**
     * @var string
     */
    public const SIDE_UP = 'Up';

    /**
     * @var string
     */
    public const SIDE_DOWN = 'Down';

    /**
     * @var string
     */
    public const SIDE_RIGHT = 'Right';

    /**
     * @var string
     */
    public const SIDE_LEFT = 'Left';

    /**
     * @var string
     */
    public const PIECE_TOP = 'Top';

    /**
     * @var string
     */
    public const PIECE_TOP_LEFT = 'TopLeft';

    /**
     * @var string
     */
    public const PIECE_TOP_RIGHT = 'TopRight';

    /**
     * @var string
     */
    public const PIECE_CENTER = 'Center';

    /**
     * @var string
     */
    public const PIECE_CENTER_LEFT = 'CenterLeft';

    /**
     * @var string
     */
    public const PIECE_CENTER_RIGHT = 'CenterRight';

    /**
     * @var string
     */
    public const PIECE_BOTTOM = 'Bottom';

    /**
     * @var string
     */
    public const PIECE_BOTTOM_LEFT = 'BottomLeft';

    /**
     * @var string
     */
    public const PIECE_BOTTOM_RIGHT = 'BottomRight';

    /**
     * @var string
     */
    public const DIRECTION_CLOCKWISE = 'Clockwise';

    /**
     * @var string
     */
    public const DIRECTION_COUNTER_CLOCKWISE = 'CounterClockwise';

    /**
     * @var array
     */
    public const CUBE_PIECES = [
        self::PIECE_TOP_LEFT,
        self::PIECE_TOP,
        self::PIECE_TOP_RIGHT,
        self::PIECE_CENTER_LEFT,
        self::PIECE_CENTER,
        self::PIECE_CENTER_RIGHT,
        self::PIECE_BOTTOM_LEFT,
        self::PIECE_BOTTOM,
        self::PIECE_BOTTOM_RIGHT,
    ];

    /**
     * @var array
     */
    public const CUBE_SIDES = [
        self::SIDE_FACE,
        self::SIDE_RIGHT,
        self::SIDE_BACK,
        self::SIDE_LEFT,
        self::SIDE_UP,
        self::SIDE_DOWN,
    ];

    /**
     * @var array
     */
    public const SIDE_MAPPING = [
        CubeInterface::PIECE_TOP_LEFT     => CubeInterface::PIECE_TOP_RIGHT,
        CubeInterface::PIECE_TOP          => CubeInterface::PIECE_CENTER_RIGHT,
        CubeInterface::PIECE_TOP_RIGHT    => CubeInterface::PIECE_BOTTOM_RIGHT,
        CubeInterface::PIECE_CENTER_RIGHT => CubeInterface::PIECE_BOTTOM,
        CubeInterface::PIECE_BOTTOM_RIGHT => CubeInterface::PIECE_BOTTOM_LEFT,
        CubeInterface::PIECE_BOTTOM       => CubeInterface::PIECE_CENTER_LEFT,
        CubeInterface::PIECE_BOTTOM_LEFT  => CubeInterface::PIECE_TOP_LEFT,
        CubeInterface::PIECE_CENTER_LEFT  => CubeInterface::PIECE_TOP,
    ];

    /**
     * @return array
     */
    public function getPieces(): array;

    /**
     * @param array $pieces
     *
     * @return void
     */
    public function setPieces(array $pieces): void;

    /**
     * @return void
     */
    public function reset(): void;

    /**
     * @param string $side
     * @param string $direction
     */
    public function twist(
        string $side,
        string $direction = self::DIRECTION_CLOCKWISE
    ): void;
}