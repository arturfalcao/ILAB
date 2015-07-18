<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TParametrosporespecificacao
 */
class TParametrosporespecificacao
{
    /**
     * @var string
     */
    private $fnMaximo;

    /**
     * @var string
     */
    private $fnMinimo;

    /**
     * @var integer
     */
    private $fnIdEspecificacao;

    /**
     * @var integer
     */
    private $fnIdFamiliaparametro;


    /**
     * Set fnMaximo
     *
     * @param string $fnMaximo
     * @return TParametrosporespecificacao
     */
    public function setFnMaximo($fnMaximo)
    {
        $this->fnMaximo = $fnMaximo;

        return $this;
    }

    /**
     * Get fnMaximo
     *
     * @return string 
     */
    public function getFnMaximo()
    {
        return $this->fnMaximo;
    }

    /**
     * Set fnMinimo
     *
     * @param string $fnMinimo
     * @return TParametrosporespecificacao
     */
    public function setFnMinimo($fnMinimo)
    {
        $this->fnMinimo = $fnMinimo;

        return $this;
    }

    /**
     * Get fnMinimo
     *
     * @return string 
     */
    public function getFnMinimo()
    {
        return $this->fnMinimo;
    }

    /**
     * Set fnIdEspecificacao
     *
     * @param integer $fnIdEspecificacao
     * @return TParametrosporespecificacao
     */
    public function setFnIdEspecificacao($fnIdEspecificacao)
    {
        $this->fnIdEspecificacao = $fnIdEspecificacao;

        return $this;
    }

    /**
     * Get fnIdEspecificacao
     *
     * @return integer 
     */
    public function getFnIdEspecificacao()
    {
        return $this->fnIdEspecificacao;
    }

    /**
     * Set fnIdFamiliaparametro
     *
     * @param integer $fnIdFamiliaparametro
     * @return TParametrosporespecificacao
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
