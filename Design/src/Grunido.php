<?php


class Grunido
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var TipoGrunido
     */
    private $tipoGrunido;

    /**
     * @var float
     */
    private $duracion;

    /**
     * Grunido constructor.
     * @param $nombre
     * @param $duracion
     */
    public function __construct($nombre, TipoGrunido $tipoGrunido, $duracion)
    {
        $this->nombre        = $nombre;
        $this->tipoGrunido   = $tipoGrunido;
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

    /**
     * @return TipoGrunido
     */
    public function getTipoDeGruñido()
    {
        return $this->tipoDeGruñido;
    }

    /**
     * @param TipoGrunido $tipoDeGruñido
     */
    public function setTipoDeGruñido(TipoGrunido $tipoDeGruñido)
    {
        $this->tipoDeGruñido = $tipoDeGruñido;
    }
}