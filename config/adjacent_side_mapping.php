<?php

return [
    \Cube\CubeInterface::SIDE_FACE  => [
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM_LEFT  => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP_LEFT,
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM       => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_CENTER_LEFT,
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,

        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP_LEFT    => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP_RIGHT,
        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_CENTER_LEFT => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP,
        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM_LEFT => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP_LEFT,

        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP_RIGHT => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,
        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP       => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_CENTER_RIGHT,
        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP_LEFT  => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP_RIGHT,

        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,
        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_CENTER_RIGHT => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM,
        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP_RIGHT    => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,
    ],
    \Cube\CubeInterface::SIDE_RIGHT => [
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP_LEFT,
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_CENTER_RIGHT => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_CENTER_LEFT,
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP_RIGHT    => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,

        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP_LEFT    => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,
        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_CENTER_LEFT => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_CENTER_RIGHT,
        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM_LEFT => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP_RIGHT,

        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,
        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_CENTER_RIGHT => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_CENTER_RIGHT,
        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP_RIGHT    => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP_RIGHT,

        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_CENTER_RIGHT => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_CENTER_RIGHT,
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP_RIGHT    => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP_RIGHT,
    ],
    \Cube\CubeInterface::SIDE_BACK  => [
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP_RIGHT => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP_LEFT,
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP       => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_CENTER_LEFT,
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP_LEFT  => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,

        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP_LEFT    => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,
        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_CENTER_LEFT => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM,
        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM_LEFT => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,

        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM_LEFT  => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,
        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM       => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_CENTER_RIGHT,
        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP_RIGHT,

        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP_RIGHT,
        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_CENTER_RIGHT => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP,
        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP_RIGHT    => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP_LEFT,
    ],
    \Cube\CubeInterface::SIDE_LEFT  => [
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP_LEFT    => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP_LEFT,
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_CENTER_LEFT => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_CENTER_LEFT,
        \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM_LEFT => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,

        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP_LEFT    => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP_LEFT,
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_CENTER_LEFT => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_CENTER_LEFT,
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM_LEFT => \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,

        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_TOP_LEFT    => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,
        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_CENTER_LEFT => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_CENTER_RIGHT,
        \Cube\CubeInterface::SIDE_DOWN . \Cube\CubeInterface::PIECE_BOTTOM_LEFT => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP_RIGHT,

        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_TOP_LEFT,
        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_CENTER_RIGHT => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_CENTER_LEFT,
        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP_RIGHT    => \Cube\CubeInterface::SIDE_UP . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,
    ],
    \Cube\CubeInterface::SIDE_UP    => [
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP_RIGHT => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP_RIGHT,
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP       => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP,
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP_LEFT  => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP_LEFT,

        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP_RIGHT => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP_RIGHT,
        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP       => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP,
        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_TOP_LEFT  => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP_LEFT,

        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP_RIGHT => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP_RIGHT,
        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP       => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP,
        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_TOP_LEFT  => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP_LEFT,

        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP_RIGHT => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP_RIGHT,
        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP       => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP,
        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_TOP_LEFT  => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_TOP_LEFT,
    ],
    \Cube\CubeInterface::SIDE_DOWN  => [
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM_LEFT  => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM       => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM,
        \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,

        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM_LEFT  => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,
        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM       => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM,
        \Cube\CubeInterface::SIDE_RIGHT . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,

        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM_LEFT  => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,
        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM       => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM,
        \Cube\CubeInterface::SIDE_BACK . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,

        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM_LEFT  => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM_LEFT,
        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM       => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM,
        \Cube\CubeInterface::SIDE_LEFT . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT => \Cube\CubeInterface::SIDE_FACE . \Cube\CubeInterface::PIECE_BOTTOM_RIGHT,
    ],
];