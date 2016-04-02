<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TListafacturacaoamostra
 */
class TListafacturacaoamostra
{
    /**
     * @var string
     */
    private $ftSerie;

    /**
     * @var integer
     */
    private $fnNumero;

    /**
     * @var integer
     */
    private $fnIdAmostra;


    /**
     * Set ftSerie
     *
     * @param string $ftSerie
     * @return TListafacturacaoamostra
     */
    public function setFtSerie($ftSerie)
    {
        $this->ftSerie = $ftSerie;

        return $this;
    }

    /**
     * Get ftSerie
     *
     * @return string 
     */
    public function getFtSerie()
    {
        return $this->ftSerie;
    }

    /**
     * Set fnNumero
     *
     * @param integer $fnNumero
     * @return TListafacturacaoamostra
     */
    public function setFnNumero($fnNumero)
    {
        $this->fnNumero = $fnNumero;

        return $this;
    }

    /**
     * Get fnNumero
     *
     * @return integer 
     */
    public function getFnNumero()
    {
        return $this->fnNumero;
    }

    /**
     * Get fnIdAmostra
     *
     * @return integer 
     */
    public function getFnIdAmostra()
    {
        return $this->fnIdAmostra;
    }
}
