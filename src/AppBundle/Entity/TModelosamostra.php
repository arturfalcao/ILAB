<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TModelosamostra
 */
class TModelosamostra
{
    /**
     * @var boolean
     */
    private $fbActivo;

    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var boolean
     */
    private $fnLimitedias;

    /**
     * @var integer
     */
    private $fnIdCliente;

    /**
     * @var integer
     */
    private $fnIdTipoaprovacao;

    /**
     * @var integer
     */
    private $fnIdProduto;

    /**
     * @var integer
     */
    private $fnIdLegislacao;

    /**
     * @var integer
     */
    private $fnIdTipoamostra;

    /**
     * @var integer
     */
    private $fnIdTipocontrolo;

    /**
     * @var integer
     */
    private $fnIdOrcamento;

    /**
     * @var integer
     */
    private $fnIdGrupoparametros;

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
     * @return TModelosamostra
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
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TModelosamostra
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
     * Set fnLimitedias
     *
     * @param boolean $fnLimitedias
     * @return TModelosamostra
     */
    public function setFnLimitedias($fnLimitedias)
    {
        $this->fnLimitedias = $fnLimitedias;

        return $this;
    }

    /**
     * Get fnLimitedias
     *
     * @return boolean 
     */
    public function getFnLimitedias()
    {
        return $this->fnLimitedias;
    }

    /**
     * Set fnIdCliente
     *
     * @param integer $fnIdCliente
     * @return TModelosamostra
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
     * Set fnIdTipoaprovacao
     *
     * @param integer $fnIdTipoaprovacao
     * @return TModelosamostra
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
     * Set fnIdProduto
     *
     * @param integer $fnIdProduto
     * @return TModelosamostra
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
     * Set fnIdLegislacao
     *
     * @param integer $fnIdLegislacao
     * @return TModelosamostra
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
     * Set fnIdTipoamostra
     *
     * @param integer $fnIdTipoamostra
     * @return TModelosamostra
     */
    public function setFnIdTipoamostra($fnIdTipoamostra)
    {
        $this->fnIdTipoamostra = $fnIdTipoamostra;

        return $this;
    }

    /**
     * Get fnIdTipoamostra
     *
     * @return integer 
     */
    public function getFnIdTipoamostra()
    {
        return $this->fnIdTipoamostra;
    }

    /**
     * Set fnIdTipocontrolo
     *
     * @param integer $fnIdTipocontrolo
     * @return TModelosamostra
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
     * @return TModelosamostra
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
     * Set fnIdGrupoparametros
     *
     * @param integer $fnIdGrupoparametros
     * @return TModelosamostra
     */
    public function setFnIdGrupoparametros($fnIdGrupoparametros)
    {
        $this->fnIdGrupoparametros = $fnIdGrupoparametros;

        return $this;
    }

    /**
     * Get fnIdGrupoparametros
     *
     * @return integer 
     */
    public function getFnIdGrupoparametros()
    {
        return $this->fnIdGrupoparametros;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TModelosamostra
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
