<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelosListas
 *
 * @ORM\Table(name="modelos_listas", indexes={@ORM\Index(name="aasdsadsadsad", columns={"id_parametro"})})
 * @ORM\Entity
 */
class ModelosListas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tablejson", type="string", length=100000, nullable=false)
     */
    private $tablejson;

    /**
     * @var \TParametros
     *
     * @ORM\ManyToOne(targetEntity="TParametros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_parametro", referencedColumnName="fn_id")
     * })
     */
    private $idParametro;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tablejson
     *
     * @param string $tablejson
     * @return ModelosListas
     */
    public function setTablejson($tablejson)
    {
        $this->tablejson = $tablejson;

        return $this;
    }

    /**
     * Get tablejson
     *
     * @return string 
     */
    public function getTablejson()
    {
        return $this->tablejson;
    }

    /**
     * Set idParametro
     *
     * @param \AppBundle\Entity\TParametros $idParametro
     * @return ModelosListas
     */
    public function setIdParametro(\AppBundle\Entity\TParametros $idParametro = null)
    {
        $this->idParametro = $idParametro;

        return $this;
    }

    /**
     * Get idParametro
     *
     * @return \AppBundle\Entity\TParametros 
     */
    public function getIdParametro()
    {
        return $this->idParametro;
    }
}
