<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TParametrosporlistatrabalho
 */
class TParametrosporlistatrabalho
{
    /**
     * @var integer
     */
    private $fnIdAmostra;

    /**
     * @var integer
     */
    private $fnData;

    /**
     * @var integer
     */
    private $fnHora;

    /**
     * @var integer
     */
    private $fnIdParametro;


    /**
     * Set fnIdAmostra
     *
     * @param integer $fnIdAmostra
     * @return TParametrosporlistatrabalho
     */
    public function setFnIdAmostra($fnIdAmostra)
    {
        $this->fnIdAmostra = $fnIdAmostra;

        return $this;
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

    /**
     * Set fnData
     *
     * @param integer $fnData
     * @return TParametrosporlistatrabalho
     */
    public function setFnData($fnData)
    {
        $this->fnData = $fnData;

        return $this;
    }

    /**
     * Get fnData
     *
     * @return integer 
     */
    public function getFnData()
    {
        return $this->fnData;
    }

    /**
     * Set fnHora
     *
     * @param integer $fnHora
     * @return TParametrosporlistatrabalho
     */
    public function setFnHora($fnHora)
    {
        $this->fnHora = $fnHora;

        return $this;
    }

    /**
     * Get fnHora
     *
     * @return integer 
     */
    public function getFnHora()
    {
        return $this->fnHora;
    }

    /**
     * Set fnIdParametro
     *
     * @param integer $fnIdParametro
     * @return TParametrosporlistatrabalho
     */
    public function setFnIdParametro($fnIdParametro)
    {
        $this->fnIdParametro = $fnIdParametro;

        return $this;
    }

    /**
     * Get fnIdParametro
     *
     * @return integer 
     */
    public function getFnIdParametro()
    {
        return $this->fnIdParametro;
    }
}
