<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TNaoconformcabecalho
 */
class TNaoconformcabecalho
{
    /**
     * @var integer
     */
    private $fnIdParametro;

    /**
     * @var string
     */
    private $ftNomeparametro;

    /**
     * @var string
     */
    private $ftExpressaoresultado;

    /**
     * @var integer
     */
    private $fnIdAmostra;

    /**
     * @var string
     */
    private $ftCodigoamostra;

    /**
     * @var string
     */
    private $ftLocalcolheita;

    /**
     * @var \DateTime
     */
    private $fdDatacolheita;

    /**
     * @var string
     */
    private $ftUtilizadorpedido;

    /**
     * @var integer
     */
    private $fnDatapedidolng;

    /**
     * @var integer
     */
    private $fnHorapedidolng;

    /**
     * @var string
     */
    private $ftIdEstado;

    /**
     * @var string
     */
    private $ftEstado;

    /**
     * @var string
     */
    private $ftTipo;

    /**
     * @var integer
     */
    private $fnIdCliente;

    /**
     * @var string
     */
    private $ftConteudo;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var boolean
     */
    private $fbFaximpresso;

    /**
     * @var string
     */
    private $ftFaxutilizadorimpressao;

    /**
     * @var \DateTime
     */
    private $fdFaxadataimpressao;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdParametro
     *
     * @param integer $fnIdParametro
     * @return TNaoconformcabecalho
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
     * Set ftNomeparametro
     *
     * @param string $ftNomeparametro
     * @return TNaoconformcabecalho
     */
    public function setFtNomeparametro($ftNomeparametro)
    {
        $this->ftNomeparametro = $ftNomeparametro;

        return $this;
    }

    /**
     * Get ftNomeparametro
     *
     * @return string 
     */
    public function getFtNomeparametro()
    {
        return $this->ftNomeparametro;
    }

    /**
     * Set ftExpressaoresultado
     *
     * @param string $ftExpressaoresultado
     * @return TNaoconformcabecalho
     */
    public function setFtExpressaoresultado($ftExpressaoresultado)
    {
        $this->ftExpressaoresultado = $ftExpressaoresultado;

        return $this;
    }

    /**
     * Get ftExpressaoresultado
     *
     * @return string 
     */
    public function getFtExpressaoresultado()
    {
        return $this->ftExpressaoresultado;
    }

    /**
     * Set fnIdAmostra
     *
     * @param integer $fnIdAmostra
     * @return TNaoconformcabecalho
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
     * Set ftCodigoamostra
     *
     * @param string $ftCodigoamostra
     * @return TNaoconformcabecalho
     */
    public function setFtCodigoamostra($ftCodigoamostra)
    {
        $this->ftCodigoamostra = $ftCodigoamostra;

        return $this;
    }

    /**
     * Get ftCodigoamostra
     *
     * @return string 
     */
    public function getFtCodigoamostra()
    {
        return $this->ftCodigoamostra;
    }

    /**
     * Set ftLocalcolheita
     *
     * @param string $ftLocalcolheita
     * @return TNaoconformcabecalho
     */
    public function setFtLocalcolheita($ftLocalcolheita)
    {
        $this->ftLocalcolheita = $ftLocalcolheita;

        return $this;
    }

    /**
     * Get ftLocalcolheita
     *
     * @return string 
     */
    public function getFtLocalcolheita()
    {
        return $this->ftLocalcolheita;
    }

    /**
     * Set fdDatacolheita
     *
     * @param \DateTime $fdDatacolheita
     * @return TNaoconformcabecalho
     */
    public function setFdDatacolheita($fdDatacolheita)
    {
        $this->fdDatacolheita = $fdDatacolheita;

        return $this;
    }

    /**
     * Get fdDatacolheita
     *
     * @return \DateTime 
     */
    public function getFdDatacolheita()
    {
        return $this->fdDatacolheita;
    }

    /**
     * Set ftUtilizadorpedido
     *
     * @param string $ftUtilizadorpedido
     * @return TNaoconformcabecalho
     */
    public function setFtUtilizadorpedido($ftUtilizadorpedido)
    {
        $this->ftUtilizadorpedido = $ftUtilizadorpedido;

        return $this;
    }

    /**
     * Get ftUtilizadorpedido
     *
     * @return string 
     */
    public function getFtUtilizadorpedido()
    {
        return $this->ftUtilizadorpedido;
    }

    /**
     * Set fnDatapedidolng
     *
     * @param integer $fnDatapedidolng
     * @return TNaoconformcabecalho
     */
    public function setFnDatapedidolng($fnDatapedidolng)
    {
        $this->fnDatapedidolng = $fnDatapedidolng;

        return $this;
    }

    /**
     * Get fnDatapedidolng
     *
     * @return integer 
     */
    public function getFnDatapedidolng()
    {
        return $this->fnDatapedidolng;
    }

    /**
     * Set fnHorapedidolng
     *
     * @param integer $fnHorapedidolng
     * @return TNaoconformcabecalho
     */
    public function setFnHorapedidolng($fnHorapedidolng)
    {
        $this->fnHorapedidolng = $fnHorapedidolng;

        return $this;
    }

    /**
     * Get fnHorapedidolng
     *
     * @return integer 
     */
    public function getFnHorapedidolng()
    {
        return $this->fnHorapedidolng;
    }

    /**
     * Set ftIdEstado
     *
     * @param string $ftIdEstado
     * @return TNaoconformcabecalho
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
     * Set ftEstado
     *
     * @param string $ftEstado
     * @return TNaoconformcabecalho
     */
    public function setFtEstado($ftEstado)
    {
        $this->ftEstado = $ftEstado;

        return $this;
    }

    /**
     * Get ftEstado
     *
     * @return string 
     */
    public function getFtEstado()
    {
        return $this->ftEstado;
    }

    /**
     * Set ftTipo
     *
     * @param string $ftTipo
     * @return TNaoconformcabecalho
     */
    public function setFtTipo($ftTipo)
    {
        $this->ftTipo = $ftTipo;

        return $this;
    }

    /**
     * Get ftTipo
     *
     * @return string 
     */
    public function getFtTipo()
    {
        return $this->ftTipo;
    }

    /**
     * Set fnIdCliente
     *
     * @param integer $fnIdCliente
     * @return TNaoconformcabecalho
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
     * Set ftConteudo
     *
     * @param string $ftConteudo
     * @return TNaoconformcabecalho
     */
    public function setFtConteudo($ftConteudo)
    {
        $this->ftConteudo = $ftConteudo;

        return $this;
    }

    /**
     * Get ftConteudo
     *
     * @return string 
     */
    public function getFtConteudo()
    {
        return $this->ftConteudo;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TNaoconformcabecalho
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
     * Set fbFaximpresso
     *
     * @param boolean $fbFaximpresso
     * @return TNaoconformcabecalho
     */
    public function setFbFaximpresso($fbFaximpresso)
    {
        $this->fbFaximpresso = $fbFaximpresso;

        return $this;
    }

    /**
     * Get fbFaximpresso
     *
     * @return boolean 
     */
    public function getFbFaximpresso()
    {
        return $this->fbFaximpresso;
    }

    /**
     * Set ftFaxutilizadorimpressao
     *
     * @param string $ftFaxutilizadorimpressao
     * @return TNaoconformcabecalho
     */
    public function setFtFaxutilizadorimpressao($ftFaxutilizadorimpressao)
    {
        $this->ftFaxutilizadorimpressao = $ftFaxutilizadorimpressao;

        return $this;
    }

    /**
     * Get ftFaxutilizadorimpressao
     *
     * @return string 
     */
    public function getFtFaxutilizadorimpressao()
    {
        return $this->ftFaxutilizadorimpressao;
    }

    /**
     * Set fdFaxadataimpressao
     *
     * @param \DateTime $fdFaxadataimpressao
     * @return TNaoconformcabecalho
     */
    public function setFdFaxadataimpressao($fdFaxadataimpressao)
    {
        $this->fdFaxadataimpressao = $fdFaxadataimpressao;

        return $this;
    }

    /**
     * Get fdFaxadataimpressao
     *
     * @return \DateTime 
     */
    public function getFdFaxadataimpressao()
    {
        return $this->fdFaxadataimpressao;
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
