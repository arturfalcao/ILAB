<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRequisicoescliente
 */
class TRequisicoescliente
{
    /**
     * @var integer
     */
    private $fnIdCliente;

    /**
     * @var string
     */
    private $ftCodigo;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var \DateTime
     */
    private $fdDatarequisicao;

    /**
     * @var boolean
     */
    private $fbActiva;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdCliente
     *
     * @param integer $fnIdCliente
     * @return TRequisicoescliente
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
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TRequisicoescliente
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
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TRequisicoescliente
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
     * Set fdDatarequisicao
     *
     * @param \DateTime $fdDatarequisicao
     * @return TRequisicoescliente
     */
    public function setFdDatarequisicao($fdDatarequisicao)
    {
        $this->fdDatarequisicao = $fdDatarequisicao;

        return $this;
    }

    /**
     * Get fdDatarequisicao
     *
     * @return \DateTime 
     */
    public function getFdDatarequisicao()
    {
        return $this->fdDatarequisicao;
    }

    /**
     * Set fbActiva
     *
     * @param boolean $fbActiva
     * @return TRequisicoescliente
     */
    public function setFbActiva($fbActiva)
    {
        $this->fbActiva = $fbActiva;

        return $this;
    }

    /**
     * Get fbActiva
     *
     * @return boolean 
     */
    public function getFbActiva()
    {
        return $this->fbActiva;
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
