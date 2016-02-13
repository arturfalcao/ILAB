<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TClientes
 *
 * @ORM\Table(name="t_clientes", uniqueConstraints={@ORM\UniqueConstraint(name="IX_t_clientes_nome", columns={"ft_nome"}), @ORM\UniqueConstraint(name="IX_t_clientes_codigo", columns={"ft_codigo"})})
 * @ORM\Entity
 */
class TClientes
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
     * @ORM\Column(name="ft_Lote", type="string", length=50, nullable=false)
     */
    private $ftLote;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_acondicionamento", type="string", length=100, nullable=false)
     */
    private $ftAcondicionamento;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_validade", type="string", length=50, nullable=false)
     */
    private $ftValidade;
    /**
     * @var string
     *
     * @ORM\Column(name="ft_temperatura", type="string", length=50, nullable=false)
     */
    private $ftTemperatura;

    /**
     * @var string
     *
     * @ORM\Column(name="ft_faseprocesso", type="string", length=100, nullable=false)
     */
    private $ftFaseprocesso;


    /**
     * Get fnId
     *
     * @return integer 
     */
    public function __toString()
    {
        return $this->ftLote;
    }


}
