<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProdutos
 */
class TProdutos
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
    private $fnIdFamiliaproduto;

    /**
     * @var integer
     */
    private $fnIdLegislacao;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var boolean
     */
    private $fbActivo;

    /**
     * @var boolean
     */
    private $fbAcreditacaoamostragem;

    /**
     * @var boolean
     */
    private $fbAcreditacaoamostragemmicro;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TProdutos
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
     * @return TProdutos
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
     * @return TProdutos
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
     * Set fnIdFamiliaproduto
     *
     * @param integer $fnIdFamiliaproduto
     * @return TProdutos
     */
    public function setFnIdFamiliaproduto($fnIdFamiliaproduto)
    {
        $this->fnIdFamiliaproduto = $fnIdFamiliaproduto;

        return $this;
    }

    /**
     * Get fnIdFamiliaproduto
     *
     * @return integer 
     */
    public function getFnIdFamiliaproduto()
    {
        return $this->fnIdFamiliaproduto;
    }

    /**
     * Set fnIdLegislacao
     *
     * @param integer $fnIdLegislacao
     * @return TProdutos
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
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TProdutos
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
     * @return TProdutos
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
     * Set fbAcreditacaoamostragem
     *
     * @param boolean $fbAcreditacaoamostragem
     * @return TProdutos
     */
    public function setFbAcreditacaoamostragem($fbAcreditacaoamostragem)
    {
        $this->fbAcreditacaoamostragem = $fbAcreditacaoamostragem;

        return $this;
    }

    /**
     * Get fbAcreditacaoamostragem
     *
     * @return boolean 
     */
    public function getFbAcreditacaoamostragem()
    {
        return $this->fbAcreditacaoamostragem;
    }

    /**
     * Set fbAcreditacaoamostragemmicro
     *
     * @param boolean $fbAcreditacaoamostragemmicro
     * @return TProdutos
     */
    public function setFbAcreditacaoamostragemmicro($fbAcreditacaoamostragemmicro)
    {
        $this->fbAcreditacaoamostragemmicro = $fbAcreditacaoamostragemmicro;

        return $this;
    }

    /**
     * Get fbAcreditacaoamostragemmicro
     *
     * @return boolean 
     */
    public function getFbAcreditacaoamostragemmicro()
    {
        return $this->fbAcreditacaoamostragemmicro;
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
