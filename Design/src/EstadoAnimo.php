<?php
/**
 * Created by PhpStorm.
 * User: santiago
 * Date: 08/01/19
 * Time: 18:34
 */

class EstadoAnimo
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Sonido
     */
    private $sonido;

    /**
     * EstadoAnimo constructor.
     * @param string $name
     * @param Sonido $sonido
     */
    public function __construct($name, Sonido $sonido)
    {
        $this->name = $name;
        $this->sonido = $sonido;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Sonido
     */
    public function getSonido()
    {
        return $this->sonido;
    }

    /**
     * @param Sonido $sonido
     */
    public function setSonido(Sonido $sonido)
    {
        $this->sonido = $sonido;
    }
}