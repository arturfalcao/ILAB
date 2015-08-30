<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TModelosresultados
 *
 * @ORM\Table(name="t_modelosresultados", indexes={@ORM\Index(name="ModResult_TipoArre", columns={"fn_id_tipoarredondamento"})})
 * @ORM\Entity
 */
class TModelosresultados
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
     * @var boolean
     *
     * @ORM\Column(name="fb_activo", type="boolean", nullable=false)
     */
    private $fbActivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_unidade", type="bigint", nullable=false)
     */
    private $fnIdUnidade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_incluirnorelatorio", type="boolean", nullable=false)
     */
    private $fbIncluirnorelatorio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_gamavalores", type="boolean", nullable=false)
     */
    private $fbGamavalores;

    /**
     * @var string
     *
     * @ORM\Column(name="fn_maximo", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $fnMaximo;

    /**
     * @var string
     *
     * @ORM\Column(name="fn_minimo", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $fnMinimo;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_mensagemutilizador", type="string", length=200, nullable=true)
     */
    private $ftMensagemutilizador;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_descricao", type="string", length=100, nullable=false)
     */
    private $ftDescricao;

    /**
     * @var string
     *
     * @ORM\Column(name="fn_limitequantificacao", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $fnLimitequantificacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_observacao", type="string", length=300, nullable=true)
     */
    private $ftObservacao;

    /**
     * @var \TTiposarredondamento
     *
     * @ORM\ManyToOne(targetEntity="TTiposarredondamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fn_id_tipoarredondamento", referencedColumnName="fn_id")
     * })
     */
    private $fnTipoarredondamento;



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
     * Set fnTipoarredondamento
     *
     * @param \AppBundle\Entity\TTiposarredondamento $fnTipoarredondamento
     * @return TModelosresultados
     */
    public function setFnTipoarredondamento(\AppBundle\Entity\TTiposarredondamento $fnTipoarredondamento = null)
    {
        $this->fnTipoarredondamento = $fnTipoarredondamento;

        return $this;
    }

    /**
     * Get fnTipoarredondamento
     *
     * @return \AppBundle\Entity\TTiposarredondamento 
     */
    public function getFnTipoarredondamento()
    {

        return $this->fnTipoarredondamento;
    }
}
