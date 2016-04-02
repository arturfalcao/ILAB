<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPerfis
 */
class TPerfis
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
     * @var string
     */
    private $ftObservacao;

    /**
     * @var boolean
     */
    private $fbAmostra;

    /**
     * @var boolean
     */
    private $fbAmostralancar;

    /**
     * @var boolean
     */
    private $fbAmostrareceber;

    /**
     * @var boolean
     */
    private $fbAmostraautorizar;

    /**
     * @var boolean
     */
    private $fbAmostradesautorizar;

    /**
     * @var boolean
     */
    private $fbAmostracancelar;

    /**
     * @var boolean
     */
    private $fbAmostraeditar;

    /**
     * @var boolean
     */
    private $fbParametro;

    /**
     * @var boolean
     */
    private $fbParametrolancar;

    /**
     * @var boolean
     */
    private $fbParametroautorizar;

    /**
     * @var boolean
     */
    private $fbParametrodesautorizar;

    /**
     * @var boolean
     */
    private $fbParametrocancelar;

    /**
     * @var boolean
     */
    private $fbParametroeditar;

    /**
     * @var string
     */
    private $ftBoletimensaio;

    /**
     * @var string
     */
    private $ftCliente;

    /**
     * @var string
     */
    private $ftLocalcolheita;

    /**
     * @var string
     */
    private $ftUtilizador;

    /**
     * @var string
     */
    private $ftInterfaceirar;

    /**
     * @var string
     */
    private $ftInterfaceindaqua;

    /**
     * @var boolean
     */
    private $fbLista;

    /**
     * @var string
     */
    private $ftListacolheita;

    /**
     * @var string
     */
    private $ftListatrabalho;

    /**
     * @var string
     */
    private $ftListamapa;

    /**
     * @var string
     */
    private $ftListarequisicao;

    /**
     * @var boolean
     */
    private $fbContabilidade;

    /**
     * @var string
     */
    private $ftContabilidadefacturacao;

    /**
     * @var string
     */
    private $ftContabilidadeorcamento;

    /**
     * @var string
     */
    private $ftContabilidaderequisicao;

    /**
     * @var string
     */
    private $ftContabilidadevendadinheiro;

    /**
     * @var string
     */
    private $ftContabilidademapa;

    /**
     * @var boolean
     */
    private $fbModelo;

    /**
     * @var string
     */
    private $ftModeloamostra;

    /**
     * @var string
     */
    private $ftModeloparametro;

    /**
     * @var string
     */
    private $ftModeloresultado;

    /**
     * @var boolean
     */
    private $fbConfiguracao;

    /**
     * @var string
     */
    private $ftConfiguracaogrupoparametros;

    /**
     * @var string
     */
    private $ftConfiguracaolaboratorio;

    /**
     * @var string
     */
    private $ftConfiguracaoproduto;

    /**
     * @var string
     */
    private $ftConfiguracaoespecificacao;

    /**
     * @var string
     */
    private $ftConfiguracaofrasco;

    /**
     * @var boolean
     */
    private $fbResultado;

    /**
     * @var boolean
     */
    private $fbResultadointroduzirvalor;

    /**
     * @var boolean
     */
    private $fbResultadomodificarvalor;

    /**
     * @var boolean
     */
    private $fbResultadoeditar;

    /**
     * @var string
     */
    private $ftNaoconformidade;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TPerfis
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
     * @return TPerfis
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
     * @return TPerfis
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
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TPerfis
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
     * Set fbAmostra
     *
     * @param boolean $fbAmostra
     * @return TPerfis
     */
    public function setFbAmostra($fbAmostra)
    {
        $this->fbAmostra = $fbAmostra;

        return $this;
    }

    /**
     * Get fbAmostra
     *
     * @return boolean 
     */
    public function getFbAmostra()
    {
        return $this->fbAmostra;
    }

    /**
     * Set fbAmostralancar
     *
     * @param boolean $fbAmostralancar
     * @return TPerfis
     */
    public function setFbAmostralancar($fbAmostralancar)
    {
        $this->fbAmostralancar = $fbAmostralancar;

        return $this;
    }

    /**
     * Get fbAmostralancar
     *
     * @return boolean 
     */
    public function getFbAmostralancar()
    {
        return $this->fbAmostralancar;
    }

    /**
     * Set fbAmostrareceber
     *
     * @param boolean $fbAmostrareceber
     * @return TPerfis
     */
    public function setFbAmostrareceber($fbAmostrareceber)
    {
        $this->fbAmostrareceber = $fbAmostrareceber;

        return $this;
    }

    /**
     * Get fbAmostrareceber
     *
     * @return boolean 
     */
    public function getFbAmostrareceber()
    {
        return $this->fbAmostrareceber;
    }

    /**
     * Set fbAmostraautorizar
     *
     * @param boolean $fbAmostraautorizar
     * @return TPerfis
     */
    public function setFbAmostraautorizar($fbAmostraautorizar)
    {
        $this->fbAmostraautorizar = $fbAmostraautorizar;

        return $this;
    }

    /**
     * Get fbAmostraautorizar
     *
     * @return boolean 
     */
    public function getFbAmostraautorizar()
    {
        return $this->fbAmostraautorizar;
    }

    /**
     * Set fbAmostradesautorizar
     *
     * @param boolean $fbAmostradesautorizar
     * @return TPerfis
     */
    public function setFbAmostradesautorizar($fbAmostradesautorizar)
    {
        $this->fbAmostradesautorizar = $fbAmostradesautorizar;

        return $this;
    }

    /**
     * Get fbAmostradesautorizar
     *
     * @return boolean 
     */
    public function getFbAmostradesautorizar()
    {
        return $this->fbAmostradesautorizar;
    }

    /**
     * Set fbAmostracancelar
     *
     * @param boolean $fbAmostracancelar
     * @return TPerfis
     */
    public function setFbAmostracancelar($fbAmostracancelar)
    {
        $this->fbAmostracancelar = $fbAmostracancelar;

        return $this;
    }

    /**
     * Get fbAmostracancelar
     *
     * @return boolean 
     */
    public function getFbAmostracancelar()
    {
        return $this->fbAmostracancelar;
    }

    /**
     * Set fbAmostraeditar
     *
     * @param boolean $fbAmostraeditar
     * @return TPerfis
     */
    public function setFbAmostraeditar($fbAmostraeditar)
    {
        $this->fbAmostraeditar = $fbAmostraeditar;

        return $this;
    }

    /**
     * Get fbAmostraeditar
     *
     * @return boolean 
     */
    public function getFbAmostraeditar()
    {
        return $this->fbAmostraeditar;
    }

    /**
     * Set fbParametro
     *
     * @param boolean $fbParametro
     * @return TPerfis
     */
    public function setFbParametro($fbParametro)
    {
        $this->fbParametro = $fbParametro;

        return $this;
    }

    /**
     * Get fbParametro
     *
     * @return boolean 
     */
    public function getFbParametro()
    {
        return $this->fbParametro;
    }

    /**
     * Set fbParametrolancar
     *
     * @param boolean $fbParametrolancar
     * @return TPerfis
     */
    public function setFbParametrolancar($fbParametrolancar)
    {
        $this->fbParametrolancar = $fbParametrolancar;

        return $this;
    }

    /**
     * Get fbParametrolancar
     *
     * @return boolean 
     */
    public function getFbParametrolancar()
    {
        return $this->fbParametrolancar;
    }

    /**
     * Set fbParametroautorizar
     *
     * @param boolean $fbParametroautorizar
     * @return TPerfis
     */
    public function setFbParametroautorizar($fbParametroautorizar)
    {
        $this->fbParametroautorizar = $fbParametroautorizar;

        return $this;
    }

    /**
     * Get fbParametroautorizar
     *
     * @return boolean 
     */
    public function getFbParametroautorizar()
    {
        return $this->fbParametroautorizar;
    }

    /**
     * Set fbParametrodesautorizar
     *
     * @param boolean $fbParametrodesautorizar
     * @return TPerfis
     */
    public function setFbParametrodesautorizar($fbParametrodesautorizar)
    {
        $this->fbParametrodesautorizar = $fbParametrodesautorizar;

        return $this;
    }

    /**
     * Get fbParametrodesautorizar
     *
     * @return boolean 
     */
    public function getFbParametrodesautorizar()
    {
        return $this->fbParametrodesautorizar;
    }

    /**
     * Set fbParametrocancelar
     *
     * @param boolean $fbParametrocancelar
     * @return TPerfis
     */
    public function setFbParametrocancelar($fbParametrocancelar)
    {
        $this->fbParametrocancelar = $fbParametrocancelar;

        return $this;
    }

    /**
     * Get fbParametrocancelar
     *
     * @return boolean 
     */
    public function getFbParametrocancelar()
    {
        return $this->fbParametrocancelar;
    }

    /**
     * Set fbParametroeditar
     *
     * @param boolean $fbParametroeditar
     * @return TPerfis
     */
    public function setFbParametroeditar($fbParametroeditar)
    {
        $this->fbParametroeditar = $fbParametroeditar;

        return $this;
    }

    /**
     * Get fbParametroeditar
     *
     * @return boolean 
     */
    public function getFbParametroeditar()
    {
        return $this->fbParametroeditar;
    }

    /**
     * Set ftBoletimensaio
     *
     * @param string $ftBoletimensaio
     * @return TPerfis
     */
    public function setFtBoletimensaio($ftBoletimensaio)
    {
        $this->ftBoletimensaio = $ftBoletimensaio;

        return $this;
    }

    /**
     * Get ftBoletimensaio
     *
     * @return string 
     */
    public function getFtBoletimensaio()
    {
        return $this->ftBoletimensaio;
    }

    /**
     * Set ftCliente
     *
     * @param string $ftCliente
     * @return TPerfis
     */
    public function setFtCliente($ftCliente)
    {
        $this->ftCliente = $ftCliente;

        return $this;
    }

    /**
     * Get ftCliente
     *
     * @return string 
     */
    public function getFtCliente()
    {
        return $this->ftCliente;
    }

    /**
     * Set ftLocalcolheita
     *
     * @param string $ftLocalcolheita
     * @return TPerfis
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
     * Set ftUtilizador
     *
     * @param string $ftUtilizador
     * @return TPerfis
     */
    public function setFtUtilizador($ftUtilizador)
    {
        $this->ftUtilizador = $ftUtilizador;

        return $this;
    }

    /**
     * Get ftUtilizador
     *
     * @return string 
     */
    public function getFtUtilizador()
    {
        return $this->ftUtilizador;
    }

    /**
     * Set ftInterfaceirar
     *
     * @param string $ftInterfaceirar
     * @return TPerfis
     */
    public function setFtInterfaceirar($ftInterfaceirar)
    {
        $this->ftInterfaceirar = $ftInterfaceirar;

        return $this;
    }

    /**
     * Get ftInterfaceirar
     *
     * @return string 
     */
    public function getFtInterfaceirar()
    {
        return $this->ftInterfaceirar;
    }

    /**
     * Set ftInterfaceindaqua
     *
     * @param string $ftInterfaceindaqua
     * @return TPerfis
     */
    public function setFtInterfaceindaqua($ftInterfaceindaqua)
    {
        $this->ftInterfaceindaqua = $ftInterfaceindaqua;

        return $this;
    }

    /**
     * Get ftInterfaceindaqua
     *
     * @return string 
     */
    public function getFtInterfaceindaqua()
    {
        return $this->ftInterfaceindaqua;
    }

    /**
     * Set fbLista
     *
     * @param boolean $fbLista
     * @return TPerfis
     */
    public function setFbLista($fbLista)
    {
        $this->fbLista = $fbLista;

        return $this;
    }

    /**
     * Get fbLista
     *
     * @return boolean 
     */
    public function getFbLista()
    {
        return $this->fbLista;
    }

    /**
     * Set ftListacolheita
     *
     * @param string $ftListacolheita
     * @return TPerfis
     */
    public function setFtListacolheita($ftListacolheita)
    {
        $this->ftListacolheita = $ftListacolheita;

        return $this;
    }

    /**
     * Get ftListacolheita
     *
     * @return string 
     */
    public function getFtListacolheita()
    {
        return $this->ftListacolheita;
    }

    /**
     * Set ftListatrabalho
     *
     * @param string $ftListatrabalho
     * @return TPerfis
     */
    public function setFtListatrabalho($ftListatrabalho)
    {
        $this->ftListatrabalho = $ftListatrabalho;

        return $this;
    }

    /**
     * Get ftListatrabalho
     *
     * @return string 
     */
    public function getFtListatrabalho()
    {
        return $this->ftListatrabalho;
    }

    /**
     * Set ftListamapa
     *
     * @param string $ftListamapa
     * @return TPerfis
     */
    public function setFtListamapa($ftListamapa)
    {
        $this->ftListamapa = $ftListamapa;

        return $this;
    }

    /**
     * Get ftListamapa
     *
     * @return string 
     */
    public function getFtListamapa()
    {
        return $this->ftListamapa;
    }

    /**
     * Set ftListarequisicao
     *
     * @param string $ftListarequisicao
     * @return TPerfis
     */
    public function setFtListarequisicao($ftListarequisicao)
    {
        $this->ftListarequisicao = $ftListarequisicao;

        return $this;
    }

    /**
     * Get ftListarequisicao
     *
     * @return string 
     */
    public function getFtListarequisicao()
    {
        return $this->ftListarequisicao;
    }

    /**
     * Set fbContabilidade
     *
     * @param boolean $fbContabilidade
     * @return TPerfis
     */
    public function setFbContabilidade($fbContabilidade)
    {
        $this->fbContabilidade = $fbContabilidade;

        return $this;
    }

    /**
     * Get fbContabilidade
     *
     * @return boolean 
     */
    public function getFbContabilidade()
    {
        return $this->fbContabilidade;
    }

    /**
     * Set ftContabilidadefacturacao
     *
     * @param string $ftContabilidadefacturacao
     * @return TPerfis
     */
    public function setFtContabilidadefacturacao($ftContabilidadefacturacao)
    {
        $this->ftContabilidadefacturacao = $ftContabilidadefacturacao;

        return $this;
    }

    /**
     * Get ftContabilidadefacturacao
     *
     * @return string 
     */
    public function getFtContabilidadefacturacao()
    {
        return $this->ftContabilidadefacturacao;
    }

    /**
     * Set ftContabilidadeorcamento
     *
     * @param string $ftContabilidadeorcamento
     * @return TPerfis
     */
    public function setFtContabilidadeorcamento($ftContabilidadeorcamento)
    {
        $this->ftContabilidadeorcamento = $ftContabilidadeorcamento;

        return $this;
    }

    /**
     * Get ftContabilidadeorcamento
     *
     * @return string 
     */
    public function getFtContabilidadeorcamento()
    {
        return $this->ftContabilidadeorcamento;
    }

    /**
     * Set ftContabilidaderequisicao
     *
     * @param string $ftContabilidaderequisicao
     * @return TPerfis
     */
    public function setFtContabilidaderequisicao($ftContabilidaderequisicao)
    {
        $this->ftContabilidaderequisicao = $ftContabilidaderequisicao;

        return $this;
    }

    /**
     * Get ftContabilidaderequisicao
     *
     * @return string 
     */
    public function getFtContabilidaderequisicao()
    {
        return $this->ftContabilidaderequisicao;
    }

    /**
     * Set ftContabilidadevendadinheiro
     *
     * @param string $ftContabilidadevendadinheiro
     * @return TPerfis
     */
    public function setFtContabilidadevendadinheiro($ftContabilidadevendadinheiro)
    {
        $this->ftContabilidadevendadinheiro = $ftContabilidadevendadinheiro;

        return $this;
    }

    /**
     * Get ftContabilidadevendadinheiro
     *
     * @return string 
     */
    public function getFtContabilidadevendadinheiro()
    {
        return $this->ftContabilidadevendadinheiro;
    }

    /**
     * Set ftContabilidademapa
     *
     * @param string $ftContabilidademapa
     * @return TPerfis
     */
    public function setFtContabilidademapa($ftContabilidademapa)
    {
        $this->ftContabilidademapa = $ftContabilidademapa;

        return $this;
    }

    /**
     * Get ftContabilidademapa
     *
     * @return string 
     */
    public function getFtContabilidademapa()
    {
        return $this->ftContabilidademapa;
    }

    /**
     * Set fbModelo
     *
     * @param boolean $fbModelo
     * @return TPerfis
     */
    public function setFbModelo($fbModelo)
    {
        $this->fbModelo = $fbModelo;

        return $this;
    }

    /**
     * Get fbModelo
     *
     * @return boolean 
     */
    public function getFbModelo()
    {
        return $this->fbModelo;
    }

    /**
     * Set ftModeloamostra
     *
     * @param string $ftModeloamostra
     * @return TPerfis
     */
    public function setFtModeloamostra($ftModeloamostra)
    {
        $this->ftModeloamostra = $ftModeloamostra;

        return $this;
    }

    /**
     * Get ftModeloamostra
     *
     * @return string 
     */
    public function getFtModeloamostra()
    {
        return $this->ftModeloamostra;
    }

    /**
     * Set ftModeloparametro
     *
     * @param string $ftModeloparametro
     * @return TPerfis
     */
    public function setFtModeloparametro($ftModeloparametro)
    {
        $this->ftModeloparametro = $ftModeloparametro;

        return $this;
    }

    /**
     * Get ftModeloparametro
     *
     * @return string 
     */
    public function getFtModeloparametro()
    {
        return $this->ftModeloparametro;
    }

    /**
     * Set ftModeloresultado
     *
     * @param string $ftModeloresultado
     * @return TPerfis
     */
    public function setFtModeloresultado($ftModeloresultado)
    {
        $this->ftModeloresultado = $ftModeloresultado;

        return $this;
    }

    /**
     * Get ftModeloresultado
     *
     * @return string 
     */
    public function getFtModeloresultado()
    {
        return $this->ftModeloresultado;
    }

    /**
     * Set fbConfiguracao
     *
     * @param boolean $fbConfiguracao
     * @return TPerfis
     */
    public function setFbConfiguracao($fbConfiguracao)
    {
        $this->fbConfiguracao = $fbConfiguracao;

        return $this;
    }

    /**
     * Get fbConfiguracao
     *
     * @return boolean 
     */
    public function getFbConfiguracao()
    {
        return $this->fbConfiguracao;
    }

    /**
     * Set ftConfiguracaogrupoparametros
     *
     * @param string $ftConfiguracaogrupoparametros
     * @return TPerfis
     */
    public function setFtConfiguracaogrupoparametros($ftConfiguracaogrupoparametros)
    {
        $this->ftConfiguracaogrupoparametros = $ftConfiguracaogrupoparametros;

        return $this;
    }

    /**
     * Get ftConfiguracaogrupoparametros
     *
     * @return string 
     */
    public function getFtConfiguracaogrupoparametros()
    {
        return $this->ftConfiguracaogrupoparametros;
    }

    /**
     * Set ftConfiguracaolaboratorio
     *
     * @param string $ftConfiguracaolaboratorio
     * @return TPerfis
     */
    public function setFtConfiguracaolaboratorio($ftConfiguracaolaboratorio)
    {
        $this->ftConfiguracaolaboratorio = $ftConfiguracaolaboratorio;

        return $this;
    }

    /**
     * Get ftConfiguracaolaboratorio
     *
     * @return string 
     */
    public function getFtConfiguracaolaboratorio()
    {
        return $this->ftConfiguracaolaboratorio;
    }

    /**
     * Set ftConfiguracaoproduto
     *
     * @param string $ftConfiguracaoproduto
     * @return TPerfis
     */
    public function setFtConfiguracaoproduto($ftConfiguracaoproduto)
    {
        $this->ftConfiguracaoproduto = $ftConfiguracaoproduto;

        return $this;
    }

    /**
     * Get ftConfiguracaoproduto
     *
     * @return string 
     */
    public function getFtConfiguracaoproduto()
    {
        return $this->ftConfiguracaoproduto;
    }

    /**
     * Set ftConfiguracaoespecificacao
     *
     * @param string $ftConfiguracaoespecificacao
     * @return TPerfis
     */
    public function setFtConfiguracaoespecificacao($ftConfiguracaoespecificacao)
    {
        $this->ftConfiguracaoespecificacao = $ftConfiguracaoespecificacao;

        return $this;
    }

    /**
     * Get ftConfiguracaoespecificacao
     *
     * @return string 
     */
    public function getFtConfiguracaoespecificacao()
    {
        return $this->ftConfiguracaoespecificacao;
    }

    /**
     * Set ftConfiguracaofrasco
     *
     * @param string $ftConfiguracaofrasco
     * @return TPerfis
     */
    public function setFtConfiguracaofrasco($ftConfiguracaofrasco)
    {
        $this->ftConfiguracaofrasco = $ftConfiguracaofrasco;

        return $this;
    }

    /**
     * Get ftConfiguracaofrasco
     *
     * @return string 
     */
    public function getFtConfiguracaofrasco()
    {
        return $this->ftConfiguracaofrasco;
    }

    /**
     * Set fbResultado
     *
     * @param boolean $fbResultado
     * @return TPerfis
     */
    public function setFbResultado($fbResultado)
    {
        $this->fbResultado = $fbResultado;

        return $this;
    }

    /**
     * Get fbResultado
     *
     * @return boolean 
     */
    public function getFbResultado()
    {
        return $this->fbResultado;
    }

    /**
     * Set fbResultadointroduzirvalor
     *
     * @param boolean $fbResultadointroduzirvalor
     * @return TPerfis
     */
    public function setFbResultadointroduzirvalor($fbResultadointroduzirvalor)
    {
        $this->fbResultadointroduzirvalor = $fbResultadointroduzirvalor;

        return $this;
    }

    /**
     * Get fbResultadointroduzirvalor
     *
     * @return boolean 
     */
    public function getFbResultadointroduzirvalor()
    {
        return $this->fbResultadointroduzirvalor;
    }

    /**
     * Set fbResultadomodificarvalor
     *
     * @param boolean $fbResultadomodificarvalor
     * @return TPerfis
     */
    public function setFbResultadomodificarvalor($fbResultadomodificarvalor)
    {
        $this->fbResultadomodificarvalor = $fbResultadomodificarvalor;

        return $this;
    }

    /**
     * Get fbResultadomodificarvalor
     *
     * @return boolean 
     */
    public function getFbResultadomodificarvalor()
    {
        return $this->fbResultadomodificarvalor;
    }

    /**
     * Set fbResultadoeditar
     *
     * @param boolean $fbResultadoeditar
     * @return TPerfis
     */
    public function setFbResultadoeditar($fbResultadoeditar)
    {
        $this->fbResultadoeditar = $fbResultadoeditar;

        return $this;
    }

    /**
     * Get fbResultadoeditar
     *
     * @return boolean 
     */
    public function getFbResultadoeditar()
    {
        return $this->fbResultadoeditar;
    }

    /**
     * Set ftNaoconformidade
     *
     * @param string $ftNaoconformidade
     * @return TPerfis
     */
    public function setFtNaoconformidade($ftNaoconformidade)
    {
        $this->ftNaoconformidade = $ftNaoconformidade;

        return $this;
    }

    /**
     * Get ftNaoconformidade
     *
     * @return string 
     */
    public function getFtNaoconformidade()
    {
        return $this->ftNaoconformidade;
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
