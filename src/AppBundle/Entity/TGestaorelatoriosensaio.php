<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGestaorelatoriosensaio
 */
class TGestaorelatoriosensaio
{
    /**
     * @var integer
     */
    private $fnIdAmostra;

    /**
     * @var \DateTime
     */
    private $fdDataemissao;

    /**
     * @var string
     */
    private $ftNomeutilizador;

    /**
     * @var string
     */
    private $ftFuncaoutilizador;

    /**
     * @var integer
     */
    private $fnIdTipoemissaorelatorio;

    /**
     * @var string
     */
    private $ftAssinaturaresponsavel;

    /**
     * @var string
     */
    private $ftFuncaoresponsavel;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdAmostra
     *
     * @param integer $fnIdAmostra
     * @return TGestaorelatoriosensaio
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
     * Set fdDataemissao
     *
     * @param \DateTime $fdDataemissao
     * @return TGestaorelatoriosensaio
     */
    public function setFdDataemissao($fdDataemissao)
    {
        $this->fdDataemissao = $fdDataemissao;

        return $this;
    }

    /**
     * Get fdDataemissao
     *
     * @return \DateTime 
     */
    public function getFdDataemissao()
    {
        return $this->fdDataemissao;
    }

    /**
     * Set ftNomeutilizador
     *
     * @param string $ftNomeutilizador
     * @return TGestaorelatoriosensaio
     */
    public function setFtNomeutilizador($ftNomeutilizador)
    {
        $this->ftNomeutilizador = $ftNomeutilizador;

        return $this;
    }

    /**
     * Get ftNomeutilizador
     *
     * @return string 
     */
    public function getFtNomeutilizador()
    {
        return $this->ftNomeutilizador;
    }

    /**
     * Set ftFuncaoutilizador
     *
     * @param string $ftFuncaoutilizador
     * @return TGestaorelatoriosensaio
     */
    public function setFtFuncaoutilizador($ftFuncaoutilizador)
    {
        $this->ftFuncaoutilizador = $ftFuncaoutilizador;

        return $this;
    }

    /**
     * Get ftFuncaoutilizador
     *
     * @return string 
     */
    public function getFtFuncaoutilizador()
    {
        return $this->ftFuncaoutilizador;
    }

    /**
     * Set fnIdTipoemissaorelatorio
     *
     * @param integer $fnIdTipoemissaorelatorio
     * @return TGestaorelatoriosensaio
     */
    public function setFnIdTipoemissaorelatorio($fnIdTipoemissaorelatorio)
    {
        $this->fnIdTipoemissaorelatorio = $fnIdTipoemissaorelatorio;

        return $this;
    }

    /**
     * Get fnIdTipoemissaorelatorio
     *
     * @return integer 
     */
    public function getFnIdTipoemissaorelatorio()
    {
        return $this->fnIdTipoemissaorelatorio;
    }

    /**
     * Set ftAssinaturaresponsavel
     *
     * @param string $ftAssinaturaresponsavel
     * @return TGestaorelatoriosensaio
     */
    public function setFtAssinaturaresponsavel($ftAssinaturaresponsavel)
    {
        $this->ftAssinaturaresponsavel = $ftAssinaturaresponsavel;

        return $this;
    }

    /**
     * Get ftAssinaturaresponsavel
     *
     * @return string 
     */
    public function getFtAssinaturaresponsavel()
    {
        return $this->ftAssinaturaresponsavel;
    }

    /**
     * Set ftFuncaoresponsavel
     *
     * @param string $ftFuncaoresponsavel
     * @return TGestaorelatoriosensaio
     */
    public function setFtFuncaoresponsavel($ftFuncaoresponsavel)
    {
        $this->ftFuncaoresponsavel = $ftFuncaoresponsavel;

        return $this;
    }

    /**
     * Get ftFuncaoresponsavel
     *
     * @return string 
     */
    public function getFtFuncaoresponsavel()
    {
        return $this->ftFuncaoresponsavel;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TGestaorelatoriosensaio
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
     * Get fnId
     *
     * @return integer 
     */
    public function getFnId()
    {
        return $this->fnId;
    }
}
