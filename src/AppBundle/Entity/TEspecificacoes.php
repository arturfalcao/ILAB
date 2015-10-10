<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TEspecificacoes
 *
 * @ORM\Table(name="t_especificacoes", uniqueConstraints={@ORM\UniqueConstraint(name="IX_t_especificacoes_descricao", columns={"ft_descricao"}), @ORM\UniqueConstraint(name="IX_t_especificacoes_codigo", columns={"ft_codigo"})}, indexes={@ORM\Index(name="especificacoes_legis", columns={"fn_id_legislacao"})})
 * @ORM\Entity
 */
class TEspecificacoes
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
     * @var string
     *
     * @ORM\Column(name="ft_mensagem_utilizador", type="string", length=300, nullable=true)
     */
    private $ftMensagemUtilizador;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_texto_qd_passa_p", type="string", length=300, nullable=true)
     */
    private $ftTextoQdPassaP;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_texto_qd_nao_passa_p", type="string", length=300, nullable=true)
     */
    private $ftTextoQdNaoPassaP;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_texto_qd_cumpre_a", type="string", length=300, nullable=true)
     */
    private $ftTextoQdCumpreA;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_texto_qd_nao_cumpre_a", type="string", length=300, nullable=true)
     */
    private $ftTextoQdNaoCumpreA;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_emissao_de_relatorio", type="boolean", nullable=false)
     */
    private $fbEmissaoDeRelatorio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ft_observacao", type="string", length=300, nullable=true)
     */
    private $ftObservacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_siglavl", type="string", length=20, nullable=true)
     */
    private $ftSiglavl;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_legendavl", type="string", length=100, nullable=true)
     */
    private $ftLegendavl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fb_activo", type="boolean", nullable=false)
     */
    private $fbActivo = '1';

    /**
     * @var \TLegislacao
     *
     * @ORM\ManyToOne(targetEntity="TLegislacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fn_id_legislacao", referencedColumnName="fn_id")
     * })
     */
    private $fnLegislacao;


}
