<?php

class Sonido
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $sonido;

    /**
     * Sonido constructor.
     * @param string $nombre
     * @param string $sonido
     */
    public function __construct($nombre, $sonido)
    {
        $this->nombre = $nombre;
        $this->sonido = $sonido;
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
    public function getSonido()
    {
        return $this->sonido;
    }

    /**
     * @param string $sonido
     */
    public function setSonido($sonido)
    {
        $this->sonido = $sonido;
    }
}