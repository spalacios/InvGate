<?php


abstract class Grunido
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var float
     */
    private $duracion;

    /**
     * Grunido constructor.
     * @param $nombre
     * @param $duracion
     */
    public function __construct($nombre, $duracion)
    {
        $this->nombre        = $nombre;
        $this->duracion      = $duracion;
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
     * @return float
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * @param float $duracion
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    abstract public function grunir();

}