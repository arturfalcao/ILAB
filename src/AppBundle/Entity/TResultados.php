<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TResultados
 */
class TResultados
{
    /**
     * @var integer
     */
    private $fnIdParametro;

    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var integer
     */
    private $fnIdModeloresultado;

    /**
     * @var string
     */
    private $ftFormatado;

    /**
     * @var string
     */
    private $ftOriginal;

    /**
     * @var string
     */
    private $ftPrefixo;

    /**
     * @var string
     */
    private $fnValor;

    /**
     * @var string
     */
    private $fnCalculado;

    /**
     * @var integer
     */
    private $fnIdUnidade;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var \DateTime
     */
    private $fdCriacao;

    /**
     * @var \DateTime
     */
    private $fdConclusao;

    /**
     * @var \DateTime
     */
    private $fdAutorizacao;

    /**
     * @var boolean
     */
    private $fbIncluirnorelatorio;

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
    private $fnLimitequantificacao;

    /**
     * @var string
     */
    private $ftIdEstado;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdParametro
     *
     * @param integer $fnIdParametro
     * @return TResultados
     */
    public function setFnIdParametro($fnIdParametro)
    {
        $this->fnIdParametro = $fnIdParametro;

        return $this;
    }

    /**
     * Get fnIdParametro
     *
     * @return integer 
     */
    public function getFnIdParametro()
    {
        return $this->fnIdParametro;
    }

    /**
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TResultados
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
     * Set fnIdModeloresultado
     *
     * @param integer $fnIdModeloresultado
     * @return TResultados
     */
    public function setFnIdModeloresultado($fnIdModeloresultado)
    {
        $this->fnIdModeloresultado = $fnIdModeloresultado;

        return $this;
    }

    /**
     * Get fnIdModeloresultado
     *
     * @return integer 
     */
    public function getFnIdModeloresultado()
    {
        return $this->fnIdModeloresultado;
    }

    /**
     * Set ftFormatado
     *
     * @param string $ftFormatado
     * @return TResultados
     */
    public function setFtFormatado($ftFormatado)
    {
        $this->ftFormatado = $ftFormatado;

        return $this;
    }

    /**
     * Get ftFormatado
     *
     * @return string 
     */
    public function getFtFormatado()
    {
        return $this->ftFormatado;
    }

    /**
     * Set ftOriginal
     *
     * @param string $ftOriginal
     * @return TResultados
     */
    public function setFtOriginal($ftOriginal)
    {
        $this->ftOriginal = $ftOriginal;

        return $this;
    }

    /**
     * Get ftOriginal
     *
     * @return string 
     */
    public function getFtOriginal()
    {
        return $this->ftOriginal;
    }

    /**
     * Set ftPrefixo
     *
     * @param string $ftPrefixo
     * @return TResultados
     */
    public function setFtPrefixo($ftPrefixo)
    {
        $this->ftPrefixo = $ftPrefixo;

        return $this;
    }

    /**
     * Get ftPrefixo
     *
     * @return string 
     */
    public function getFtPrefixo()
    {
        return $this->ftPrefixo;
    }

    /**
     * Set fnValor
     *
     * @param string $fnValor
     * @return TResultados
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
     * Set fnCalculado
     *
     * @param string $fnCalculado
     * @return TResultados
     */
    public function setFnCalculado($fnCalculado)
    {
        $this->fnCalculado = $fnCalculado;

        return $this;
    }

    /**
     * Get fnCalculado
     *
     * @return string 
     */
    public function getFnCalculado()
    {
        return $this->fnCalculado;
    }

    /**
     * Set fnIdUnidade
     *
     * @param integer $fnIdUnidade
     * @return TResultados
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
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TResultados
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
     * Set fdCriacao
     *
     * @param \DateTime $fdCriacao
     * @return TResultados
     */
    public function setFdCriacao($fdCriacao)
    {
        $this->fdCriacao = $fdCriacao;

        return $this;
    }

    /**
     * Get fdCriacao
     *
     * @return \DateTime 
     */
    public function getFdCriacao()
    {
        return $this->fdCriacao;
    }

    /**
     * Set fdConclusao
     *
     * @param \DateTime $fdConclusao
     * @return TResultados
     */
    public function setFdConclusao($fdConclusao)
    {
        $this->fdConclusao = $fdConclusao;

        return $this;
    }

    /**
     * Get fdConclusao
     *
     * @return \DateTime 
     */
    public function getFdConclusao()
    {
        return $this->fdConclusao;
    }

    /**
     * Set fdAutorizacao
     *
     * @param \DateTime $fdAutorizacao
     * @return TResultados
     */
    public function setFdAutorizacao($fdAutorizacao)
    {
        $this->fdAutorizacao = $fdAutorizacao;

        return $this;
    }

    /**
     * Get fdAutorizacao
     *
     * @return \DateTime 
     */
    public function getFdAutorizacao()
    {
        return $this->fdAutorizacao;
    }

    /**
     * Set fbIncluirnorelatorio
     *
     * @param boolean $fbIncluirnorelatorio
     * @return TResultados
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
     * Set fnMaximo
     *
     * @param string $fnMaximo
     * @return TResultados
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
     * @return TResultados
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
     * Set fnLimitequantificacao
     *
     * @param string $fnLimitequantificacao
     * @return TResultados
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
     * Set ftIdEstado
     *
     * @param string $ftIdEstado
     * @return TResultados
     */
    public function setFtIdEstado($ftIdEstado)
    {
        $this->ftIdEstado = $ftIdEstado;

        return $this;
    }

    /**
     * Get ftIdEstado
     *
     * @return string 
     */
    public function getFtIdEstado()
    {
        return $this->ftIdEstado;
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
