<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMapaindaqua
 */
class TMapaindaqua
{
    /**
     * @var integer
     */
    private $fnIdModeloparametro;

    /**
     * @var integer
     */
    private $fnIdParametroindaqua;


    /**
     * Set fnIdModeloparametro
     *
     * @param integer $fnIdModeloparametro
     * @return TMapaindaqua
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

    /**
     * Set fnIdParametroindaqua
     *
     * @param integer $fnIdParametroindaqua
     * @return TMapaindaqua
     */
    public function setFnIdParametroindaqua($fnIdParametroindaqua)
    {
        $this->fnIdParametroindaqua = $fnIdParametroindaqua;

        return $this;
    }

    /**
     * Get fnIdParametroindaqua
     *
     * @return integer 
     */
    public function getFnIdParametroindaqua()
    {
        return $this->fnIdParametroindaqua;
    }
}
