<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPermissoesparametros
 */
class TPermissoesparametros
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
     * @return TPermissoesparametros
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
     * @return TPermissoesparametros
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
