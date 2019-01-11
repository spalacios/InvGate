<?php


class GrunidoRuidoso extends Grunido
{
    /**
     * @var string
     */
    private $decibeles;

    /**
     * GrunidoRuidoso constructor.
     * @param $nombre
     * @param $duracion
     * @param $decibeles
     */
    public function __construct($nombre, $duracion, $decibeles)
    {
        parent::__construct($nombre, $duracion);
        $this->decibeles = $decibeles;
    }

    /**
     * @return string
     */
    public function getDecibeles()
    {
        return $this->decibeles;
    }

    /**
     * @param string $decibeles
     */
    public function setDecibeles($decibeles)
    {
        $this->decibeles = $decibeles;
    }

    /**
     * @return string
     */
    public function grunir()
    {
        return $this->decibeles;
    }
}