<?php

class GrunidoMelodioso extends Grunido
{
    /**
     * @var string
     */
    private $melodia;

    /**
     * GrunidoMelodioso constructor.
     * @param $nombre
     * @param $duracion
     * @param $melodia
     */
    public function __construct($nombre, $duracion, $melodia)
    {
        parent::__construct($nombre, $duracion);
        $this->melodia = $melodia;
    }

    /**
     * @return string
     */
    public function getMelodia()
    {
        return $this->melodia;
    }

    /**
     * @param string $melodia
     */
    public function setMelodia($melodia)
    {
        $this->melodia = $melodia;
    }

    /**
     * @return string
     */
    public function grunir()
    {
        return $this->melodia;
    }
}