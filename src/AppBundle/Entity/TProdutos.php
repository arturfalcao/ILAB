<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProdutos
 *
 * @ORM\Table(name="t_produtos")
 * @ORM\Entity
 */
class TProdutos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fnId;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_codigo", type="string", length=20, nullable=false)
     */
    private $ftCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_descricao", type="string", length=100, nullable=false)
     */
    private $ftDescricao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_alias", type="string", length=100, nullable=true)
     */
    private $ftAlias;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_familiaproduto", type="bigint", nullable=false)
     */
    private $fnIdFamiliaproduto;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_legislacao", type="bigint", nullable=false)
     */
    private $fnIdLegislacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_observacao", type="string", length=300, nullable=true)
     */
    private $ftObservacao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_activo", type="boolean", nullable=false)
     */
    private $fbActivo = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_AcreditacaoAmostragem", type="boolean", nullable=false)
     */
    private $fbAcreditacaoamostragem = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_AcreditacaoAmostragemMicro", type="boolean", nullable=false)
     */
    private $fbAcreditacaoamostragemmicro = '0';

    public function __toString() {
        return $this->ftDescricao;
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
}
