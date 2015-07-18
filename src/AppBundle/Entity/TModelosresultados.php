<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TModelosresultados
 */
class TModelosresultados
{
    /**
     * @var boolean
     */
    private $fbActivo;

    /**
     * @var integer
     */
    private $fnIdUnidade;

    /**
     * @var boolean
     */
    private $fbIncluirnorelatorio;

    /**
     * @var boolean
     */
    private $fbGamavalores;

    /**
     * @var string
     */
    private $fnMaximo;

    /**
     * @var string
     */
    private $fnMinimo;

    /**
     * @var string
     */
    private $ftMensagemutilizador;

    /**
     * @var integer
     */
    private $fnIdTipoarredondamento;

    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var string
     */
    private $fnLimitequantificacao;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fbActivo
     *
     * @param boolean $fbActivo
     * @return TModelosresultados
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
     * Set fnIdUnidade
     *
     * @param integer $fnIdUnidade
     * @return TModelosresultados
     */
    public function setFnIdUnidade($fnIdUnidade)
    {
        $this->fnIdUnidade = $fnIdUnidade;

        return $this;
    }

    /**
     * Get fnIdUnidade
     *
     * @return integer 
     */
    public function getFnIdUnidade()
    {
        return $this->fnIdUnidade;
    }

    /**
     * Set fbIncluirnorelatorio
     *
     * @param boolean $fbIncluirnorelatorio
     * @return TModelosresultados
     */
    public function setFbIncluirnorelatorio($fbIncluirnorelatorio)
    {
        $this->fbIncluirnorelatorio = $fbIncluirnorelatorio;

        return $this;
    }

    /**
     * Get fbIncluirnorelatorio
     *
     * @return boolean 
     */
    public function getFbIncluirnorelatorio()
    {
        return $this->fbIncluirnorelatorio;
    }

    /**
     * Set fbGamavalores
     *
     * @param boolean $fbGamavalores
     * @return TModelosresultados
     */
    public function setFbGamavalores($fbGamavalores)
    {
        $this->fbGamavalores = $fbGamavalores;

        return $this;
    }

    /**
     * Get fbGamavalores
     *
     * @return boolean 
     */
    public function getFbGamavalores()
    {
        return $this->fbGamavalores;
    }

    /**
     * Set fnMaximo
     *
     * @param string $fnMaximo
     * @return TModelosresultados
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
     * @return TModelosresultados
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
     * Set ftMensagemutilizador
     *
     * @param string $ftMensagemutilizador
     * @return TModelosresultados
     */
    public function setFtMensagemutilizador($ftMensagemutilizador)
    {
        $this->ftMensagemutilizador = $ftMensagemutilizador;

        return $this;
    }

    /**
     * Get ftMensagemutilizador
     *
     * @return string 
     */
    public function getFtMensagemutilizador()
    {
        return $this->ftMensagemutilizador;
    }

    /**
     * Set fnIdTipoarredondamento
     *
     * @param integer $fnIdTipoarredondamento
     * @return TModelosresultados
     */
    public function setFnIdTipoarredondamento($fnIdTipoarredondamento)
    {
        $this->fnIdTipoarredondamento = $fnIdTipoarredondamento;

        return $this;
    }

    /**
     * Get fnIdTipoarredondamento
     *
     * @return integer 
     */
    public function getFnIdTipoarredondamento()
    {
        return $this->fnIdTipoarredondamento;
    }

    /**
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TModelosresultados
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
     * Set fnLimitequantificacao
     *
     * @param string $fnLimitequantificacao
     * @return TModelosresultados
     */
    public function setFnLimitequantificacao($fnLimitequantificacao)
    {
        $this->fnLimitequantificacao = $fnLimitequantificacao;

        return $this;
    }

    /**
     * Get fnLimitequantificacao
     *
     * @return string 
     */
    public function getFnLimitequantificacao()
    {
        return $this->fnLimitequantificacao;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TModelosresultados
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
