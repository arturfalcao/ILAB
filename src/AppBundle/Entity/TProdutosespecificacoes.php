<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProdutosespecificacoes
 */
class TProdutosespecificacoes
{
    /**
     * @var boolean
     */
    private $fbMaster;

    /**
     * @var integer
     */
    private $fnOrdem;

    /**
     * @var integer
     */
    private $fnIdProduto;

    /**
     * @var integer
     */
    private $fnIdEspecificacao;


    /**
     * Set fbMaster
     *
     * @param boolean $fbMaster
     * @return TProdutosespecificacoes
     */
    public function setFbMaster($fbMaster)
    {
        $this->fbMaster = $fbMaster;

        return $this;
    }

    /**
     * Get fbMaster
     *
     * @return boolean 
     */
    public function getFbMaster()
    {
        return $this->fbMaster;
    }

    /**
     * Set fnOrdem
     *
     * @param integer $fnOrdem
     * @return TProdutosespecificacoes
     */
    public function setFnOrdem($fnOrdem)
    {
        $this->fnOrdem = $fnOrdem;

        return $this;
    }

    /**
     * Get fnOrdem
     *
     * @return integer 
     */
    public function getFnOrdem()
    {
        return $this->fnOrdem;
    }

    /**
     * Set fnIdProduto
     *
     * @param integer $fnIdProduto
     * @return TProdutosespecificacoes
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

    /**
     * Set fnIdEspecificacao
     *
     * @param integer $fnIdEspecificacao
     * @return TProdutosespecificacoes
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
}
