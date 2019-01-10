<?php

/**
 * Class Tamagotchi
 */
class Tamagotchi
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var Especie
     */
    private $especie;

    /**
     * @var boolean
     */
    private $despierto;

    /**
     * @var EstadoAnimo
     */
    private $estadoAnimo;

    /**
     * @var Grunido
     */
    private $grunido;

    /**
     * @var Sonido
     */
    private $roquido;

    /**
     * Tamagotchi constructor.
     * @param $nombre
     * @param $especie
     */
    public function __construct($nombre, Especie $especie){
        $this->nombre  = $nombre;
        $this->especie = $especie;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return Grunido
     */
    public function getGrunido()
    {
        return $this->grunido;
    }

    /**
     * @param Grunido $grunido
     */
    public function setGrunido(Grunido $grunido)
    {
        $this->grunido = $grunido;
    }

    /**
     * @return Sonido
     */
    public function getRoquido()
    {
        return $this->roquido;
    }

    /**
     * @param Sonido $roquido
     */
    public function setRoquido(Sonido $roquido)
    {
        $this->roquido = $roquido;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return \Especie
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * @param \Especie $especie
     */
    public function setEspecie(Especie $especie)
    {
        $this->especie = $especie;
    }

    /**
     * @return bool
     */
    public function isDespierto()
    {
        return $this->despierto;
    }

    /**
     * @param EstadoAnimo $estadoAnimo
     */
    public function setEstadoAnimo(EstadoAnimo $estadoAnimo)
    {
        $this->estadoAnimo = $estadoAnimo;
    }

    /**
     * Custom Methods
     */

    /**
     * @param bool $despierto
     */
    public function setDespierto($despierto)
    {
        $this->despierto = $despierto;
    }

    public function despertar(){
        $this->despierto = true;
    }

    public function dormir(){
        $this->despierto = false;
    }

    public function mover(){
        return ($this->despierto);
    }

    /**
     * @return Grunido|Sonido
     */
    public function hacerRuido(){
        if($this->despierto){
            if($this->estadoAnimo){
                return $this->estadoAnimo->getSonido();
            }else{
                return $this->grunido;
            }
        }else{
            return $this->roquido;
        }
    }
}