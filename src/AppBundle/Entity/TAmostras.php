<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAmostras
 */
class TAmostras
{
    /**
     * @var integer
     */
    private $fnNumero;

    /**
     * @var string
     */
    private $ftSerie;

    /**
     * @var \DateTime
     */
    private $fdCriacao;

    /**
     * @var \DateTime
     */
    private $fdColheita;

    /**
     * @var \DateTime
     */
    private $fdRecepcao;

    /**
     * @var \DateTime
     */
    private $fdConclusao;

    /**
     * @var \DateTime
     */
    private $fdLimite;

    /**
     * @var string
     */
    private $ftResponsavelcolheita;

    /**
     * @var integer
     */
    private $fnIdLocalcolheita;

    /**
     * @var integer
     */
    private $fnIdOperador;

    /**
     * @var integer
     */
    private $fnIdCliente;

    /**
     * @var integer
     */
    private $fnIdModelo;

    /**
     * @var integer
     */
    private $fnIdTipoaprovacao;

    /**
     * @var \DateTime
     */
    private $fdAutorizacao;

    /**
     * @var integer
     */
    private $fnIdProduto;

    /**
     * @var string
     */
    private $ftOrigem;

    /**
     * @var string
     */
    private $ftGrupoparametros;

    /**
     * @var integer
     */
    private $fnIdLegislacao;

    /**
     * @var string
     */
    private $ftTipoemissaorelatorio;

    /**
     * @var boolean
     */
    private $fbRelatorioemitido;

    /**
     * @var \DateTime
     */
    private $fdEmissaorelatorio;

    /**
     * @var integer
     */
    private $fnIdTipo;

    /**
     * @var string
     */
    private $ftRefexterna;

    /**
     * @var string
     */
    private $ftConclusao;

    /**
     * @var string
     */
    private $ftObs;

    /**
     * @var integer
     */
    private $fnIdTipocontrolo;

    /**
     * @var integer
     */
    private $fnIdOrcamento;

    /**
     * @var string
     */
    private $ftIdEstado;

    /**
     * @var integer
     */
    private $fnIdEspecificacao;

    /**
     * @var string
     */
    private $ftCumpreespecificacao;

    /**
     * @var \DateTime
     */
    private $fdInicioanalise;

    /**
     * @var boolean
     */
    private $fbFacturada;

    /**
     * @var integer
     */
    private $fnIdRequisicaocliente;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnNumero
     *
     * @param integer $fnNumero
     * @return TAmostras
     */
    public function setFnNumero($fnNumero)
    {
        $this->fnNumero = $fnNumero;

        return $this;
    }

    /**
     * Get fnNumero
     *
     * @return integer 
     */
    public function getFnNumero()
    {
        return $this->fnNumero;
    }

    /**
     * Set ftSerie
     *
     * @param string $ftSerie
     * @return TAmostras
     */
    public function setFtSerie($ftSerie)
    {
        $this->ftSerie = $ftSerie;

        return $this;
    }

    /**
     * Get ftSerie
     *
     * @return string 
     */
    public function getFtSerie()
    {
        return $this->ftSerie;
    }

    /**
     * Set fdCriacao
     *
     * @param \DateTime $fdCriacao
     * @return TAmostras
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
     * Set fdColheita
     *
     * @param \DateTime $fdColheita
     * @return TAmostras
     */
    public function setFdColheita($fdColheita)
    {
        $this->fdColheita = $fdColheita;

        return $this;
    }

    /**
     * Get fdColheita
     *
     * @return \DateTime 
     */
    public function getFdColheita()
    {
        return $this->fdColheita;
    }

    /**
     * Set fdRecepcao
     *
     * @param \DateTime $fdRecepcao
     * @return TAmostras
     */
    public function setFdRecepcao($fdRecepcao)
    {
        $this->fdRecepcao = $fdRecepcao;

        return $this;
    }

    /**
     * Get fdRecepcao
     *
     * @return \DateTime 
     */
    public function getFdRecepcao()
    {
        return $this->fdRecepcao;
    }

    /**
     * Set fdConclusao
     *
     * @param \DateTime $fdConclusao
     * @return TAmostras
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
     * Set fdLimite
     *
     * @param \DateTime $fdLimite
     * @return TAmostras
     */
    public function setFdLimite($fdLimite)
    {
        $this->fdLimite = $fdLimite;

        return $this;
    }

    /**
     * Get fdLimite
     *
     * @return \DateTime 
     */
    public function getFdLimite()
    {
        return $this->fdLimite;
    }

    /**
     * Set ftResponsavelcolheita
     *
     * @param string $ftResponsavelcolheita
     * @return TAmostras
     */
    public function setFtResponsavelcolheita($ftResponsavelcolheita)
    {
        $this->ftResponsavelcolheita = $ftResponsavelcolheita;

        return $this;
    }

    /**
     * Get ftResponsavelcolheita
     *
     * @return string 
     */
    public function getFtResponsavelcolheita()
    {
        return $this->ftResponsavelcolheita;
    }

    /**
     * Set fnIdLocalcolheita
     *
     * @param integer $fnIdLocalcolheita
     * @return TAmostras
     */
    public function setFnIdLocalcolheita($fnIdLocalcolheita)
    {
        $this->fnIdLocalcolheita = $fnIdLocalcolheita;

        return $this;
    }

    /**
     * Get fnIdLocalcolheita
     *
     * @return integer 
     */
    public function getFnIdLocalcolheita()
    {
        return $this->fnIdLocalcolheita;
    }

    /**
     * Set fnIdOperador
     *
     * @param integer $fnIdOperador
     * @return TAmostras
     */
    public function setFnIdOperador($fnIdOperador)
    {
        $this->fnIdOperador = $fnIdOperador;

        return $this;
    }

    /**
     * Get fnIdOperador
     *
     * @return integer 
     */
    public function getFnIdOperador()
    {
        return $this->fnIdOperador;
    }

    /**
     * Set fnIdCliente
     *
     * @param integer $fnIdCliente
     * @return TAmostras
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
     * Set fnIdModelo
     *
     * @param integer $fnIdModelo
     * @return TAmostras
     */
    public function setFnIdModelo($fnIdModelo)
    {
        $this->fnIdModelo = $fnIdModelo;

        return $this;
    }

    /**
     * Get fnIdModelo
     *
     * @return integer 
     */
    public function getFnIdModelo()
    {
        return $this->fnIdModelo;
    }

    /**
     * Set fnIdTipoaprovacao
     *
     * @param integer $fnIdTipoaprovacao
     * @return TAmostras
     */
    public function setFnIdTipoaprovacao($fnIdTipoaprovacao)
    {
        $this->fnIdTipoaprovacao = $fnIdTipoaprovacao;

        return $this;
    }

    /**
     * Get fnIdTipoaprovacao
     *
     * @return integer 
     */
    public function getFnIdTipoaprovacao()
    {
        return $this->fnIdTipoaprovacao;
    }

    /**
     * Set fdAutorizacao
     *
     * @param \DateTime $fdAutorizacao
     * @return TAmostras
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
     * Set fnIdProduto
     *
     * @param integer $fnIdProduto
     * @return TAmostras
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
     * Set ftOrigem
     *
     * @param string $ftOrigem
     * @return TAmostras
     */
    public function setFtOrigem($ftOrigem)
    {
        $this->ftOrigem = $ftOrigem;

        return $this;
    }

    /**
     * Get ftOrigem
     *
     * @return string 
     */
    public function getFtOrigem()
    {
        return $this->ftOrigem;
    }

    /**
     * Set ftGrupoparametros
     *
     * @param string $ftGrupoparametros
     * @return TAmostras
     */
    public function setFtGrupoparametros($ftGrupoparametros)
    {
        $this->ftGrupoparametros = $ftGrupoparametros;

        return $this;
    }

    /**
     * Get ftGrupoparametros
     *
     * @return string 
     */
    public function getFtGrupoparametros()
    {
        return $this->ftGrupoparametros;
    }

    /**
     * Set fnIdLegislacao
     *
     * @param integer $fnIdLegislacao
     * @return TAmostras
     */
    public function setFnIdLegislacao($fnIdLegislacao)
    {
        $this->fnIdLegislacao = $fnIdLegislacao;

        return $this;
    }

    /**
     * Get fnIdLegislacao
     *
     * @return integer 
     */
    public function getFnIdLegislacao()
    {
        return $this->fnIdLegislacao;
    }

    /**
     * Set ftTipoemissaorelatorio
     *
     * @param string $ftTipoemissaorelatorio
     * @return TAmostras
     */
    public function setFtTipoemissaorelatorio($ftTipoemissaorelatorio)
    {
        $this->ftTipoemissaorelatorio = $ftTipoemissaorelatorio;

        return $this;
    }

    /**
     * Get ftTipoemissaorelatorio
     *
     * @return string 
     */
    public function getFtTipoemissaorelatorio()
    {
        return $this->ftTipoemissaorelatorio;
    }

    /**
     * Set fbRelatorioemitido
     *
     * @param boolean $fbRelatorioemitido
     * @return TAmostras
     */
    public function setFbRelatorioemitido($fbRelatorioemitido)
    {
        $this->fbRelatorioemitido = $fbRelatorioemitido;

        return $this;
    }

    /**
     * Get fbRelatorioemitido
     *
     * @return boolean 
     */
    public function getFbRelatorioemitido()
    {
        return $this->fbRelatorioemitido;
    }

    /**
     * Set fdEmissaorelatorio
     *
     * @param \DateTime $fdEmissaorelatorio
     * @return TAmostras
     */
    public function setFdEmissaorelatorio($fdEmissaorelatorio)
    {
        $this->fdEmissaorelatorio = $fdEmissaorelatorio;

        return $this;
    }

    /**
     * Get fdEmissaorelatorio
     *
     * @return \DateTime 
     */
    public function getFdEmissaorelatorio()
    {
        return $this->fdEmissaorelatorio;
    }

    /**
     * Set fnIdTipo
     *
     * @param integer $fnIdTipo
     * @return TAmostras
     */
    public function setFnIdTipo($fnIdTipo)
    {
        $this->fnIdTipo = $fnIdTipo;

        return $this;
    }

    /**
     * Get fnIdTipo
     *
     * @return integer 
     */
    public function getFnIdTipo()
    {
        return $this->fnIdTipo;
    }

    /**
     * Set ftRefexterna
     *
     * @param string $ftRefexterna
     * @return TAmostras
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
     * Set ftConclusao
     *
     * @param string $ftConclusao
     * @return TAmostras
     */
    public function setFtConclusao($ftConclusao)
    {
        $this->ftConclusao = $ftConclusao;

        return $this;
    }

    /**
     * Get ftConclusao
     *
     * @return string 
     */
    public function getFtConclusao()
    {
        return $this->ftConclusao;
    }

    /**
     * Set ftObs
     *
     * @param string $ftObs
     * @return TAmostras
     */
    public function setFtObs($ftObs)
    {
        $this->ftObs = $ftObs;

        return $this;
    }

    /**
     * Get ftObs
     *
     * @return string 
     */
    public function getFtObs()
    {
        return $this->ftObs;
    }

    /**
     * Set fnIdTipocontrolo
     *
     * @param integer $fnIdTipocontrolo
     * @return TAmostras
     */
    public function setFnIdTipocontrolo($fnIdTipocontrolo)
    {
        $this->fnIdTipocontrolo = $fnIdTipocontrolo;

        return $this;
    }

    /**
     * Get fnIdTipocontrolo
     *
     * @return integer 
     */
    public function getFnIdTipocontrolo()
    {
        return $this->fnIdTipocontrolo;
    }

    /**
     * Set fnIdOrcamento
     *
     * @param integer $fnIdOrcamento
     * @return TAmostras
     */
    public function setFnIdOrcamento($fnIdOrcamento)
    {
        $this->fnIdOrcamento = $fnIdOrcamento;

        return $this;
    }

    /**
     * Get fnIdOrcamento
     *
     * @return integer 
     */
    public function getFnIdOrcamento()
    {
        return $this->fnIdOrcamento;
    }

    /**
     * Set ftIdEstado
     *
     * @param string $ftIdEstado
     * @return TAmostras
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
     * Set fnIdEspecificacao
     *
     * @param integer $fnIdEspecificacao
     * @return TAmostras
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

    /**
     * Set ftCumpreespecificacao
     *
     * @param string $ftCumpreespecificacao
     * @return TAmostras
     */
    public function setFtCumpreespecificacao($ftCumpreespecificacao)
    {
        $this->ftCumpreespecificacao = $ftCumpreespecificacao;

        return $this;
    }

    /**
     * Get ftCumpreespecificacao
     *
     * @return string 
     */
    public function getFtCumpreespecificacao()
    {
        return $this->ftCumpreespecificacao;
    }

    /**
     * Set fdInicioanalise
     *
     * @param \DateTime $fdInicioanalise
     * @return TAmostras
     */
    public function setFdInicioanalise($fdInicioanalise)
    {
        $this->fdInicioanalise = $fdInicioanalise;

        return $this;
    }

    /**
     * Get fdInicioanalise
     *
     * @return \DateTime 
     */
    public function getFdInicioanalise()
    {
        return $this->fdInicioanalise;
    }

    /**
     * Set fbFacturada
     *
     * @param boolean $fbFacturada
     * @return TAmostras
     */
    public function setFbFacturada($fbFacturada)
    {
        $this->fbFacturada = $fbFacturada;

        return $this;
    }

    /**
     * Get fbFacturada
     *
     * @return boolean 
     */
    public function getFbFacturada()
    {
        return $this->fbFacturada;
    }

    /**
     * Set fnIdRequisicaocliente
     *
     * @param integer $fnIdRequisicaocliente
     * @return TAmostras
     */
    public function setFnIdRequisicaocliente($fnIdRequisicaocliente)
    {
        $this->fnIdRequisicaocliente = $fnIdRequisicaocliente;

        return $this;
    }

    /**
     * Get fnIdRequisicaocliente
     *
     * @return integer 
     */
    public function getFnIdRequisicaocliente()
    {
        return $this->fnIdRequisicaocliente;
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
