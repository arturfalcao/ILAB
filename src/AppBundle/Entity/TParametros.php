<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TParametros
 *
 * @ORM\Table(name="t_parametros", indexes={@ORM\Index(name="IX_t_parametros_amostra", columns={"fn_id_amostra"}), @ORM\Index(name="IX_t_parametros_estado", columns={"ft_id_estado"}), @ORM\Index(name="IX_t_parametros_familiaparametro", columns={"fn_id_familiaparametro"}), @ORM\Index(name="IX_t_parametros_laboratorio", columns={"fn_id_laboratorio"})})
 * @ORM\Entity
 */
class TParametros
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
     * @ORM\Column(name="ft_descricao", type="string", length=100, nullable=false)
     */
    private $ftDescricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_metodo", type="bigint", nullable=false)
     */
    private $fnIdMetodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_tecnica", type="bigint", nullable=false)
     */
    private $fnIdTecnica;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_amostra", type="bigint", nullable=false)
     */
    private $fnIdAmostra;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_areaensaio", type="bigint", nullable=false)
     */
    private $fnIdAreaensaio;

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
     * @var integer
     *
     * @ORM\Column(name="fn_id_modeloparametro", type="bigint", nullable=false)
     */
    private $fnIdModeloparametro;

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
     * @var integer
     *
     * @ORM\Column(name="fn_id_laboratorio", type="bigint", nullable=false)
     */
    private $fnIdLaboratorio;

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
     * @var integer
     *
     * @ORM\Column(name="fn_id_familiaparametro", type="bigint", nullable=false)
     */
    private $fnIdFamiliaparametro = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="ft_formulaquimica", type="string", length=50, nullable=true)
     */
    private $ftFormulaquimica;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_frasco", type="bigint", nullable=true)
     */
    private $fnIdFrasco = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_volumeminimo", type="integer", nullable=true)
     */
    private $fnVolumeminimo = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_confirmacao", type="boolean", nullable=false)
     */
    private $fbConfirmacao = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ft_id_estado", type="string", length=1, nullable=true)
     */
    private $ftIdEstado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_contraanalise", type="boolean", nullable=true)
     */
    private $fbContraanalise = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_Realizacao", type="datetime", nullable=false)
     */
    private $fdRealizacao;


}
