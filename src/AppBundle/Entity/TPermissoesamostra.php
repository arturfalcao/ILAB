<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPermissoesamostra
 */
class TPermissoesamostra
{
    /**
     * @var integer
     */
    private $fnIdPerfil;

    /**
     * @var integer
     */
    private $fnIdTipopermissao;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdPerfil
     *
     * @param integer $fnIdPerfil
     * @return TPermissoesamostra
     */
    public function setFnIdPerfil($fnIdPerfil)
    {
        $this->fnIdPerfil = $fnIdPerfil;

        return $this;
    }

    /**
     * Get fnIdPerfil
     *
     * @return integer 
     */
    public function getFnIdPerfil()
    {
        return $this->fnIdPerfil;
    }

    /**
     * Set fnIdTipopermissao
     *
     * @param integer $fnIdTipopermissao
     * @return TPermissoesamostra
     */
    public function setFnIdTipopermissao($fnIdTipopermissao)
    {
        $this->fnIdTipopermissao = $fnIdTipopermissao;

        return $this;
    }

    /**
     * Get fnIdTipopermissao
     *
     * @return integer 
     */
    public function getFnIdTipopermissao()
    {
        return $this->fnIdTipopermissao;
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
}
