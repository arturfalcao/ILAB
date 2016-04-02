<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPermissoesresultados
 */
class TPermissoesresultados
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
     * @var boolean
     */
    private $fbValor;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdPerfil
     *
     * @param integer $fnIdPerfil
     * @return TPermissoesresultados
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
     * @return TPermissoesresultados
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
     * Set fbValor
     *
     * @param boolean $fbValor
     * @return TPermissoesresultados
     */
    public function setFbValor($fbValor)
    {
        $this->fbValor = $fbValor;

        return $this;
    }

    /**
     * Get fbValor
     *
     * @return boolean 
     */
    public function getFbValor()
    {
        return $this->fbValor;
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
