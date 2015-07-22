<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * TParametros
 *
 * @ORM\Table(name="t_parametros", indexes={@ORM\Index(name="IX_t_parametros_amostra", columns={"fn_id_amostra"}), @ORM\Index(name="IX_t_parametros_estado", columns={"ft_id_estado"}), @ORM\Index(name="IX_t_parametros_familiaparametro", columns={"fn_id_familiaparametro"}), @ORM\Index(name="IX_t_parametros_laboratorio", columns={"fn_id_laboratorio"}), @ORM\Index(name="FK_t_parametros_t_metodos", columns={"fn_id_metodo"}), @ORM\Index(name="FK_t_parametros_t_tecnicas", columns={"fn_id_tecnica"}), @ORM\Index(name="FK_t_parametros_t_modelosparametro1", columns={"fn_id_modeloparametro"}), @ORM\Index(name="FK_t_parametros_t_areasensaio", columns={"fn_id_areaensaio"}), @ORM\Index(name="FK_t_parametros_t_frascos", columns={"fn_id_frasco"})})
 * @ORM\Entity
 */
class TParametros
{
    /**
     * @var string
     *
     * @ORM\Column(name="ft_descricao", type="string", length=100, nullable=false)
     */
    private $ftDescricao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_limiterealizacao", type="datetime", nullable=false)
     */
    private $fdLimiterealizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_cumpreespecificacao", type="string", length=1, nullable=true)
     */
    private $ftCumpreespecificacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_conclusao", type="string", length=300, nullable=false)
     */
    private $ftConclusao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_observacao", type="string", length=300, nullable=false)
     */
    private $ftObservacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_criacao", type="datetime", nullable=false)
     */
    private $fdCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_conclusao", type="datetime", nullable=true)
     */
    private $fdConclusao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_autorizacao", type="datetime", nullable=true)
     */
    private $fdAutorizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="fn_precocompra", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $fnPrecocompra;

    /**
     * @var string
     *
     * @ORM\Column(name="fn_precovenda", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $fnPrecovenda;

    /**
     * @var string
     *
     * @ORM\Column(name="fn_factorcorreccao", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $fnFactorcorreccao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_acreditado", type="boolean", nullable=false)
     */
    private $fbAcreditado;

    /**
     * @var string
     *
     * @ORM\Column(name="fn_limitelegal", type="decimal", precision=10, scale=5, nullable=false)
     */
    private $fnLimitelegal;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_formulaquimica", type="string", length=50, nullable=true)
     */
    private $ftFormulaquimica;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_volumeminimo", type="integer", nullable=true)
     */
    private $fnVolumeminimo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_confirmacao", type="boolean", nullable=false)
     */
    private $fbConfirmacao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_contraanalise", type="boolean", nullable=true)
     */
    private $fbContraanalise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_Realizacao", type="datetime", nullable=false)
     */
    private $fdRealizacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id", type="int")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fnId;

    /**
     *
     * @ORM\ManyToOne(targetEntity="TMetodos")
     */
    private $fnMetodo;

    public function __toString()
    {
        return $this->getFtDescricao();
    }

    public function __construct()
    {
        $this->fnMetodo = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TParametros
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
     * Set fdLimiterealizacao
     *
     * @param \DateTime $fdLimiterealizacao
     * @return TParametros
     */
    public function setFdLimiterealizacao($fdLimiterealizacao)
    {
        $this->fdLimiterealizacao = $fdLimiterealizacao;

        return $this;
    }

    /**
     * Get fdLimiterealizacao
     *
     * @return \DateTime 
     */
    public function getFdLimiterealizacao()
    {
        return $this->fdLimiterealizacao;
    }

    /**
     * Set ftCumpreespecificacao
     *
     * @param string $ftCumpreespecificacao
     * @return TParametros
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
     * Set ftConclusao
     *
     * @param string $ftConclusao
     * @return TParametros
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
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TParametros
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
     * @return TParametros
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
     * @return TParametros
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
     * @return TParametros
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
     * Set fnPrecocompra
     *
     * @param string $fnPrecocompra
     * @return TParametros
     */
    public function setFnPrecocompra($fnPrecocompra)
    {
        $this->fnPrecocompra = $fnPrecocompra;

        return $this;
    }

    /**
     * Get fnPrecocompra
     *
     * @return string 
     */
    public function getFnPrecocompra()
    {
        return $this->fnPrecocompra;
    }

    /**
     * Set fnPrecovenda
     *
     * @param string $fnPrecovenda
     * @return TParametros
     */
    public function setFnPrecovenda($fnPrecovenda)
    {
        $this->fnPrecovenda = $fnPrecovenda;

        return $this;
    }

    /**
     * Get fnPrecovenda
     *
     * @return string 
     */
    public function getFnPrecovenda()
    {
        return $this->fnPrecovenda;
    }

    /**
     * Set fnFactorcorreccao
     *
     * @param string $fnFactorcorreccao
     * @return TParametros
     */
    public function setFnFactorcorreccao($fnFactorcorreccao)
    {
        $this->fnFactorcorreccao = $fnFactorcorreccao;

        return $this;
    }

    /**
     * Get fnFactorcorreccao
     *
     * @return string 
     */
    public function getFnFactorcorreccao()
    {
        return $this->fnFactorcorreccao;
    }

    /**
     * Set fbAcreditado
     *
     * @param boolean $fbAcreditado
     * @return TParametros
     */
    public function setFbAcreditado($fbAcreditado)
    {
        $this->fbAcreditado = $fbAcreditado;

        return $this;
    }

    /**
     * Get fbAcreditado
     *
     * @return boolean 
     */
    public function getFbAcreditado()
    {
        return $this->fbAcreditado;
    }

    /**
     * Set fnLimitelegal
     *
     * @param string $fnLimitelegal
     * @return TParametros
     */
    public function setFnLimitelegal($fnLimitelegal)
    {
        $this->fnLimitelegal = $fnLimitelegal;

        return $this;
    }

    /**
     * Get fnLimitelegal
     *
     * @return string 
     */
    public function getFnLimitelegal()
    {
        return $this->fnLimitelegal;
    }

    /**
     * Set ftFormulaquimica
     *
     * @param string $ftFormulaquimica
     * @return TParametros
     */
    public function setFtFormulaquimica($ftFormulaquimica)
    {
        $this->ftFormulaquimica = $ftFormulaquimica;

        return $this;
    }

    /**
     * Get ftFormulaquimica
     *
     * @return string 
     */
    public function getFtFormulaquimica()
    {
        return $this->ftFormulaquimica;
    }

    /**
     * Set fnVolumeminimo
     *
     * @param integer $fnVolumeminimo
     * @return TParametros
     */
    public function setFnVolumeminimo($fnVolumeminimo)
    {
        $this->fnVolumeminimo = $fnVolumeminimo;

        return $this;
    }

    /**
     * Get fnVolumeminimo
     *
     * @return integer 
     */
    public function getFnVolumeminimo()
    {
        return $this->fnVolumeminimo;
    }

    /**
     * Set fbConfirmacao
     *
     * @param boolean $fbConfirmacao
     * @return TParametros
     */
    public function setFbConfirmacao($fbConfirmacao)
    {
        $this->fbConfirmacao = $fbConfirmacao;

        return $this;
    }

    /**
     * Get fbConfirmacao
     *
     * @return boolean 
     */
    public function getFbConfirmacao()
    {
        return $this->fbConfirmacao;
    }

    /**
     * Set fbContraanalise
     *
     * @param boolean $fbContraanalise
     * @return TParametros
     */
    public function setFbContraanalise($fbContraanalise)
    {
        $this->fbContraanalise = $fbContraanalise;

        return $this;
    }

    /**
     * Get fbContraanalise
     *
     * @return boolean 
     */
    public function getFbContraanalise()
    {
        return $this->fbContraanalise;
    }

    /**
     * Set fdRealizacao
     *
     * @param \DateTime $fdRealizacao
     * @return TParametros
     */
    public function setFdRealizacao($fdRealizacao)
    {
        $this->fdRealizacao = $fdRealizacao;

        return $this;
    }

    /**
     * Get fdRealizacao
     *
     * @return \DateTime 
     */
    public function getFdRealizacao()
    {
        return $this->fdRealizacao;
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
     * Set fnMetodo
     *
     * @param \AppBundle\Entity\TMetodos $fnMetodo
     * @return TParametros
     */
    public function setFnMetodo(\AppBundle\Entity\TMetodos $fnMetodo = null)
    {
        $this->fnMetodo = $fnMetodo;

        return $this;
    }

    /**
     * Get fnMetodo
     *
     * @return \AppBundle\Entity\TMetodos 
     */
    public function getFnMetodo()
    {
        return $this->fnMetodo;
    }
}
