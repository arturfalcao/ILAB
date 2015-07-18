<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TModelosparametrosgrupo
 */
class TModelosparametrosgrupo
{
    /**
     * @var integer
     */
    private $fnIdGrupo;

    /**
     * @var integer
     */
    private $fnIdModeloparametro;


    /**
     * Set fnIdGrupo
     *
     * @param integer $fnIdGrupo
     * @return TModelosparametrosgrupo
     */
    public function setFnIdGrupo($fnIdGrupo)
    {
        $this->fnIdGrupo = $fnIdGrupo;

        return $this;
    }

    /**
     * Get fnIdGrupo
     *
     * @return integer 
     */
    public function getFnIdGrupo()
    {
        return $this->fnIdGrupo;
    }

    /**
     * Set fnIdModeloparametro
     *
     * @param integer $fnIdModeloparametro
     * @return TModelosparametrosgrupo
     */
    public function setFnIdModeloparametro($fnIdModeloparametro)
    {
        $this->fnIdModeloparametro = $fnIdModeloparametro;

        return $this;
    }

    /**
     * Get fnIdModeloparametro
     *
     * @return integer 
     */
    public function getFnIdModeloparametro()
    {
        return $this->fnIdModeloparametro;
    }
}
