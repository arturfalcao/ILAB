<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TParametrospororcamento
 */
class TParametrospororcamento
{
    /**
     * @var string
     */
    private $fnValor;

    /**
     * @var integer
     */
    private $fnIdOrcamento;

    /**
     * @var integer
     */
    private $fnIdFamiliaparametro;


    /**
     * Set fnValor
     *
     * @param string $fnValor
     * @return TParametrospororcamento
     */
    public function setFnValor($fnValor)
    {
        $this->fnValor = $fnValor;

        return $this;
    }

    /**
     * Get fnValor
     *
     * @return string 
     */
    public function getFnValor()
    {
        return $this->fnValor;
    }

    /**
     * Set fnIdOrcamento
     *
     * @param integer $fnIdOrcamento
     * @return TParametrospororcamento
     */
    public function setFnIdOrcamento($fnIdOrcamento)
    {
        $this->fnIdOrcamento = $fnIdOrcamento;

        return $this;
    }

    /**
     * Get fnIdOrcamento
     *
     * @return integer 
     */
    public function getFnIdOrcamento()
    {
        return $this->fnIdOrcamento;
    }

    /**
     * Set fnIdFamiliaparametro
     *
     * @param integer $fnIdFamiliaparametro
     * @return TParametrospororcamento
     */
    public function setFnIdFamiliaparametro($fnIdFamiliaparametro)
    {
        $this->fnIdFamiliaparametro = $fnIdFamiliaparametro;

        return $this;
    }

    /**
     * Get fnIdFamiliaparametro
     *
     * @return integer 
     */
    public function getFnIdFamiliaparametro()
    {
        return $this->fnIdFamiliaparametro;
    }
}
