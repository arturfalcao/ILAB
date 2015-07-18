<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TOrcamentos
 */
class TOrcamentos
{
    /**
     * @var string
     */
    private $ftCodigo;

    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var string
     */
    private $ftAlias;

    /**
     * @var integer
     */
    private $fnIdCliente;

    /**
     * @var \DateTime
     */
    private $fdDatacriacao;

    /**
     * @var \DateTime
     */
    private $fdDataadjudicacao;

    /**
     * @var string
     */
    private $ftRefexterna;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var boolean
     */
    private $fbActivo;

    /**
     * @var boolean
     */
    private $fbValidado;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TOrcamentos
     */
    public function setFtCodigo($ftCodigo)
    {
        $this->ftCodigo = $ftCodigo;

        return $this;
    }

    /**
     * Get ftCodigo
     *
     * @return string 
     */
    public function getFtCodigo()
    {
        return $this->ftCodigo;
    }

    /**
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TOrcamentos
     */
    public function setFtDescricao($ftDescricao)
    {
        $this->ftDescricao = $ftDescricao;

        return $this;
    }

    /**
     * Get ftDescricao
     *
     * @return string 
     */
    public function getFtDescricao()
    {
        return $this->ftDescricao;
    }

    /**
     * Set ftAlias
     *
     * @param string $ftAlias
     * @return TOrcamentos
     */
    public function setFtAlias($ftAlias)
    {
        $this->ftAlias = $ftAlias;

        return $this;
    }

    /**
     * Get ftAlias
     *
     * @return string 
     */
    public function getFtAlias()
    {
        return $this->ftAlias;
    }

    /**
     * Set fnIdCliente
     *
     * @param integer $fnIdCliente
     * @return TOrcamentos
     */
    public function setFnIdCliente($fnIdCliente)
    {
        $this->fnIdCliente = $fnIdCliente;

        return $this;
    }

    /**
     * Get fnIdCliente
     *
     * @return integer 
     */
    public function getFnIdCliente()
    {
        return $this->fnIdCliente;
    }

    /**
     * Set fdDatacriacao
     *
     * @param \DateTime $fdDatacriacao
     * @return TOrcamentos
     */
    public function setFdDatacriacao($fdDatacriacao)
    {
        $this->fdDatacriacao = $fdDatacriacao;

        return $this;
    }

    /**
     * Get fdDatacriacao
     *
     * @return \DateTime 
     */
    public function getFdDatacriacao()
    {
        return $this->fdDatacriacao;
    }

    /**
     * Set fdDataadjudicacao
     *
     * @param \DateTime $fdDataadjudicacao
     * @return TOrcamentos
     */
    public function setFdDataadjudicacao($fdDataadjudicacao)
    {
        $this->fdDataadjudicacao = $fdDataadjudicacao;

        return $this;
    }

    /**
     * Get fdDataadjudicacao
     *
     * @return \DateTime 
     */
    public function getFdDataadjudicacao()
    {
        return $this->fdDataadjudicacao;
    }

    /**
     * Set ftRefexterna
     *
     * @param string $ftRefexterna
     * @return TOrcamentos
     */
    public function setFtRefexterna($ftRefexterna)
    {
        $this->ftRefexterna = $ftRefexterna;

        return $this;
    }

    /**
     * Get ftRefexterna
     *
     * @return string 
     */
    public function getFtRefexterna()
    {
        return $this->ftRefexterna;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TOrcamentos
     */
    public function setFtObservacao($ftObservacao)
    {
        $this->ftObservacao = $ftObservacao;

        return $this;
    }

    /**
     * Get ftObservacao
     *
     * @return string 
     */
    public function getFtObservacao()
    {
        return $this->ftObservacao;
    }

    /**
     * Set fbActivo
     *
     * @param boolean $fbActivo
     * @return TOrcamentos
     */
    public function setFbActivo($fbActivo)
    {
        $this->fbActivo = $fbActivo;

        return $this;
    }

    /**
     * Get fbActivo
     *
     * @return boolean 
     */
    public function getFbActivo()
    {
        return $this->fbActivo;
    }

    /**
     * Set fbValidado
     *
     * @param boolean $fbValidado
     * @return TOrcamentos
     */
    public function setFbValidado($fbValidado)
    {
        $this->fbValidado = $fbValidado;

        return $this;
    }

    /**
     * Get fbValidado
     *
     * @return boolean 
     */
    public function getFbValidado()
    {
        return $this->fbValidado;
    }

    /**
     * Get fnId
     *
     * @return integer 
     */
    public function getFnId()
    {
        return $this->fnId;
    }
}
