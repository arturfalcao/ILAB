<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAmostras
 *
 * @ORM\Table(name="t_amostras", indexes={@ORM\Index(name="IX_t_amostras_cliente", columns={"fn_id_cliente"}), @ORM\Index(name="IX_t_amostras_data_colheita", columns={"fd_colheita"}), @ORM\Index(name="IX_t_amostras_estado", columns={"ft_id_estado"}), @ORM\Index(name="IX_t_amostras_local_colheita", columns={"fn_id_localcolheita"}), @ORM\Index(name="IX_t_amostras_orcamento", columns={"fn_id_orcamento"}), @ORM\Index(name="IX_t_amostras_produto", columns={"fn_id_produto"})})
 * @ORM\Entity
 */
class TAmostras
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
     * @var integer
     *
     * @ORM\Column(name="fn_numero", type="bigint", nullable=false)
     */
    private $fnNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_serie", type="string", length=5, nullable=false)
     */
    private $ftSerie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_criacao", type="datetime", nullable=false)
     */
    private $fdCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_colheita", type="datetime", nullable=false)
     */
    private $fdColheita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_recepcao", type="datetime", nullable=false)
     */
    private $fdRecepcao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_conclusao", type="datetime", nullable=true)
     */
    private $fdConclusao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_limite", type="datetime", nullable=true)
     */
    private $fdLimite;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_responsavelcolheita", type="string", length=100, nullable=false)
     */
    private $ftResponsavelcolheita;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_localcolheita", type="bigint", nullable=false)
     */
    private $fnIdLocalcolheita;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_operador", type="bigint", nullable=false)
     */
    private $fnIdOperador;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_cliente", type="bigint", nullable=false)
     */
    private $fnIdCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_modelo", type="bigint", nullable=false)
     */
    private $fnIdModelo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_tipoaprovacao", type="bigint", nullable=false)
     */
    private $fnIdTipoaprovacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_autorizacao", type="datetime", nullable=true)
     */
    private $fdAutorizacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_produto", type="bigint", nullable=false)
     */
    private $fnIdProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_origem", type="string", length=100, nullable=false)
     */
    private $ftOrigem;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_grupoparametros", type="string", length=100, nullable=false)
     */
    private $ftGrupoparametros;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_legislacao", type="bigint", nullable=false)
     */
    private $fnIdLegislacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_tipoemissaorelatorio", type="string", length=2, nullable=false)
     */
    private $ftTipoemissaorelatorio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_relatorioemitido", type="boolean", nullable=false)
     */
    private $fbRelatorioemitido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_emissaorelatorio", type="datetime", nullable=true)
     */
    private $fdEmissaorelatorio;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_tipo", type="bigint", nullable=false)
     */
    private $fnIdTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_refexterna", type="string", length=300, nullable=true)
     */
    private $ftRefexterna;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_conclusao", type="string", length=300, nullable=false)
     */
    private $ftConclusao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_obs", type="string", length=300, nullable=false)
     */
    private $ftObs;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_tipocontrolo", type="bigint", nullable=false)
     */
    private $fnIdTipocontrolo;

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_orcamento", type="bigint", nullable=true)
     */
    private $fnIdOrcamento = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="ft_id_estado", type="string", length=1, nullable=false)
     */
    private $ftIdEstado = 'I';

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_especificacao", type="bigint", nullable=true)
     */
    private $fnIdEspecificacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_cumpreespecificacao", type="string", length=1, nullable=true)
     */
    private $ftCumpreespecificacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fd_inicioanalise", type="datetime", nullable=true)
     */
    private $fdInicioanalise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_facturada", type="boolean", nullable=true)
     */
    private $fbFacturada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fn_id_requisicaocliente", type="bigint", nullable=false)
     */
    private $fnIdRequisicaocliente = '-1';


}
