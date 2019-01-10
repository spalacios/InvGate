<?php


class Especie
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var array
     */
    private $especieTeme;

    /**
     * Especie constructor.
     * @param $nombre
     */
    public function __construct($nombre){
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
     * @return array
     */
    public function getEspecieTeme()
    {
        return $this->especieTeme;
    }

    /**
     * @param Especie $especie
     * @return bool
     */
    public function addEspecieTeme(Especie $especie)
    {
        if($especie == $this){
            return false;
        }else{
            $this->especieTeme[] = $especie;
            return true;
        }
    }

    /**
     * @param Especie $especie
     * @return bool
     */
    public function removeEspecieTeme(Especie $especie)
    {
        $key = array_search($especie, $this->especieTeme, true);

        if ($key === false) {
            return false;
        }

        unset($this->especieTeme[$key]);

        return true;
    }
}