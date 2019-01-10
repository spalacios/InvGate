<?php

class TipoGrunido
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $melodia;

    /**
     * @var float
     */
    private $decibeles;

    /**
     * TipoGrunido constructor.
     * @param string $nombre
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * @return float
     */
    public function getDecibeles()
    {
        return $this->decibeles;
    }

    /**
     * @param float $decibeles
     */
    public function setDecibeles($decibeles)
    {
        $this->decibeles = $decibeles;
    }
}