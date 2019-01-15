<?php

namespace Cube;

/**
 * Class Cube
 *
 * @package Cube
 * @author  Vahe Markarian
 */
class Cube implements CubeInterface
{
    /**
     * @var array
     */
    private $pieces;

    /**
     * @var array
     */
    private $adjacentSideMapping;

    /**
     * @var array
     */
    private $colorMapping;

    /**
     * Cube constructor.
     *
     * @param array $adjacentSideMapping
     * @param array $colorMapping
     */
    public function __construct(array $adjacentSideMapping, array $colorMapping)
    {
        $this->adjacentSideMapping = $adjacentSideMapping;
        $this->colorMapping        = $colorMapping;

        $this->reset();
    }

    /**
     * {@inheritdoc}
     */
    public function getPieces(): array
    {
        return $this->pieces;
    }

    /**
     * {@inheritdoc}
     */
    public function setPieces(array $pieces): void
    {
        $this->pieces = $pieces;
    }

    /**
     * @return void
     */
    public function reset(): void
    {
        $this->pieces = [];

        foreach ($this->colorMapping as $side => $color) {
            foreach (self::CUBE_PIECES as $piece) {
                $this->pieces[$side . $piece] = $color;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function twist(
        string $side,
        string $direction = self::DIRECTION_CLOCKWISE
    ): void {
        $twistedPieces = $this->getPieces();

        foreach (self::SIDE_MAPPING as $pieceFrom => $pieceTo) {
            $from = $direction === self::DIRECTION_CLOCKWISE ? $pieceFrom : $pieceTo;
            $to   = $direction === self::DIRECTION_CLOCKWISE ? $pieceTo : $pieceFrom;

            $twistedPieces[$side . $to] = $this->pieces[$side . $from];
        }

        foreach ($this->adjacentSideMapping[$side] as $sidePieceFrom => $sidePieceTo) {
            $from = $direction === self::DIRECTION_CLOCKWISE ? $sidePieceFrom : $sidePieceTo;
            $to   = $direction === self::DIRECTION_CLOCKWISE ? $sidePieceTo : $sidePieceFrom;

            $twistedPieces[$to] = $this->pieces[$from];
        }

        $this->setPieces($twistedPieces);
    }

    /**
     * {@inheritdoc}
     */
    public function render(): void
    {
        $sides      = array_keys($this->colorMapping);
        $sideChunks = array_chunk($this->pieces, 9, true);

        foreach ($sideChunks as $sideIndex => $sideChunk) {
            echo $sides[$sideIndex] . PHP_EOL;

            $pieceChunks = array_chunk($sideChunk, 3, true);

            foreach ($pieceChunks as $pieceChunk) {

                foreach ($pieceChunk as $color) {
                    echo $color . "\t";
                }

                echo PHP_EOL;
            }

            echo PHP_EOL;
        }

        echo PHP_EOL;
    }
}