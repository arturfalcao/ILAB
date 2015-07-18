<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLocaiscolheita
 */
class TLocaiscolheita
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
    private $fnIdConcelho;

    /**
     * @var integer
     */
    private $fnIdTipoLocalcolheita;

    /**
     * @var integer
     */
    private $fnIdSistemaabastecimento;

    /**
     * @var integer
     */
    private $fnIdCliente;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var boolean
     */
    private $fbActivo;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TLocaiscolheita
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
     * @return TLocaiscolheita
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
     * @return TLocaiscolheita
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
     * Set fnIdConcelho
     *
     * @param integer $fnIdConcelho
     * @return TLocaiscolheita
     */
    public function setFnIdConcelho($fnIdConcelho)
    {
        $this->fnIdConcelho = $fnIdConcelho;

        return $this;
    }

    /**
     * Get fnIdConcelho
     *
     * @return integer 
     */
    public function getFnIdConcelho()
    {
        return $this->fnIdConcelho;
    }

    /**
     * Set fnIdTipoLocalcolheita
     *
     * @param integer $fnIdTipoLocalcolheita
     * @return TLocaiscolheita
     */
    public function setFnIdTipoLocalcolheita($fnIdTipoLocalcolheita)
    {
        $this->fnIdTipoLocalcolheita = $fnIdTipoLocalcolheita;

        return $this;
    }

    /**
     * Get fnIdTipoLocalcolheita
     *
     * @return integer 
     */
    public function getFnIdTipoLocalcolheita()
    {
        return $this->fnIdTipoLocalcolheita;
    }

    /**
     * Set fnIdSistemaabastecimento
     *
     * @param integer $fnIdSistemaabastecimento
     * @return TLocaiscolheita
     */
    public function setFnIdSistemaabastecimento($fnIdSistemaabastecimento)
    {
        $this->fnIdSistemaabastecimento = $fnIdSistemaabastecimento;

        return $this;
    }

    /**
     * Get fnIdSistemaabastecimento
     *
     * @return integer 
     */
    public function getFnIdSistemaabastecimento()
    {
        return $this->fnIdSistemaabastecimento;
    }

    /**
     * Set fnIdCliente
     *
     * @param integer $fnIdCliente
     * @return TLocaiscolheita
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
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TLocaiscolheita
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
     * @return TLocaiscolheita
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
     * Get fnId
     *
     * @return integer 
     */
    public function getFnId()
    {
        return $this->fnId;
    }
}
