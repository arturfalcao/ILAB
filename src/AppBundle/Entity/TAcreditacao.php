<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAcreditacao
 */
class TAcreditacao
{
    /**
     * @var boolean
     */
    private $fbAcreditacao;

    /**
     * @var integer
     */
    private $fnIdModeloparametro;

    /**
     * @var integer
     */
    private $fnIdProduto;


    /**
     * Set fbAcreditacao
     *
     * @param boolean $fbAcreditacao
     * @return TAcreditacao
     */
    public function setFbAcreditacao($fbAcreditacao)
    {
        $this->fbAcreditacao = $fbAcreditacao;

        return $this;
    }

    /**
     * Get fbAcreditacao
     *
     * @return boolean 
     */
    public function getFbAcreditacao()
    {
        return $this->fbAcreditacao;
    }

    /**
     * Set fnIdModeloparametro
     *
     * @param integer $fnIdModeloparametro
     * @return TAcreditacao
     */
    public function setFnIdModeloparametro($fnIdModeloparametro)
    {
        $this->fnIdModeloparametro = $fnIdModeloparametro;

        return $this;
    }

    /**
     * Get fnIdModeloparametro
     *
     * @return integer 
     */
    public function getFnIdModeloparametro()
    {
        return $this->fnIdModeloparametro;
    }

    /**
     * Set fnIdProduto
     *
     * @param integer $fnIdProduto
     * @return TAcreditacao
     */
    public function setFnIdProduto($fnIdProduto)
    {
        $this->fnIdProduto = $fnIdProduto;

        return $this;
    }

    /**
     * Get fnIdProduto
     *
     * @return integer 
     */
    public function getFnIdProduto()
    {
        return $this->fnIdProduto;
    }
}
