<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRequisicoes
 */
class TRequisicoes
{
    /**
     * @var integer
     */
    private $fnIdLaboratorio;

    /**
     * @var \DateTime
     */
    private $fdUltimaemissao;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var string
     */
    private $ftUltimoutilizador;

    /**
     * @var boolean
     */
    private $fbAnulada;

    /**
     * @var string
     */
    private $fnDesconto;

    /**
     * @var string
     */
    private $ftTipopagamento;

    /**
     * @var string
     */
    private $ftPrazoentrega;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdLaboratorio
     *
     * @param integer $fnIdLaboratorio
     * @return TRequisicoes
     */
    public function setFnIdLaboratorio($fnIdLaboratorio)
    {
        $this->fnIdLaboratorio = $fnIdLaboratorio;

        return $this;
    }

    /**
     * Get fnIdLaboratorio
     *
     * @return integer 
     */
    public function getFnIdLaboratorio()
    {
        return $this->fnIdLaboratorio;
    }

    /**
     * Set fdUltimaemissao
     *
     * @param \DateTime $fdUltimaemissao
     * @return TRequisicoes
     */
    public function setFdUltimaemissao($fdUltimaemissao)
    {
        $this->fdUltimaemissao = $fdUltimaemissao;

        return $this;
    }

    /**
     * Get fdUltimaemissao
     *
     * @return \DateTime 
     */
    public function getFdUltimaemissao()
    {
        return $this->fdUltimaemissao;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TRequisicoes
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
     * Set ftUltimoutilizador
     *
     * @param string $ftUltimoutilizador
     * @return TRequisicoes
     */
    public function setFtUltimoutilizador($ftUltimoutilizador)
    {
        $this->ftUltimoutilizador = $ftUltimoutilizador;

        return $this;
    }

    /**
     * Get ftUltimoutilizador
     *
     * @return string 
     */
    public function getFtUltimoutilizador()
    {
        return $this->ftUltimoutilizador;
    }

    /**
     * Set fbAnulada
     *
     * @param boolean $fbAnulada
     * @return TRequisicoes
     */
    public function setFbAnulada($fbAnulada)
    {
        $this->fbAnulada = $fbAnulada;

        return $this;
    }

    /**
     * Get fbAnulada
     *
     * @return boolean 
     */
    public function getFbAnulada()
    {
        return $this->fbAnulada;
    }

    /**
     * Set fnDesconto
     *
     * @param string $fnDesconto
     * @return TRequisicoes
     */
    public function setFnDesconto($fnDesconto)
    {
        $this->fnDesconto = $fnDesconto;

        return $this;
    }

    /**
     * Get fnDesconto
     *
     * @return string 
     */
    public function getFnDesconto()
    {
        return $this->fnDesconto;
    }

    /**
     * Set ftTipopagamento
     *
     * @param string $ftTipopagamento
     * @return TRequisicoes
     */
    public function setFtTipopagamento($ftTipopagamento)
    {
        $this->ftTipopagamento = $ftTipopagamento;

        return $this;
    }

    /**
     * Get ftTipopagamento
     *
     * @return string 
     */
    public function getFtTipopagamento()
    {
        return $this->ftTipopagamento;
    }

    /**
     * Set ftPrazoentrega
     *
     * @param string $ftPrazoentrega
     * @return TRequisicoes
     */
    public function setFtPrazoentrega($ftPrazoentrega)
    {
        $this->ftPrazoentrega = $ftPrazoentrega;

        return $this;
    }

    /**
     * Get ftPrazoentrega
     *
     * @return string 
     */
    public function getFtPrazoentrega()
    {
        return $this->ftPrazoentrega;
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
