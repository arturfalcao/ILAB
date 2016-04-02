<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPermissoesparametrosareasensaio
 */
class TPermissoesparametrosareasensaio
{
    /**
     * @var integer
     */
    private $fnIdPermissaoparametro;

    /**
     * @var integer
     */
    private $fnIdAreaensaio;


    /**
     * Set fnIdPermissaoparametro
     *
     * @param integer $fnIdPermissaoparametro
     * @return TPermissoesparametrosareasensaio
     */
    public function setFnIdPermissaoparametro($fnIdPermissaoparametro)
    {
        $this->fnIdPermissaoparametro = $fnIdPermissaoparametro;

        return $this;
    }

    /**
     * Get fnIdPermissaoparametro
     *
     * @return integer 
     */
    public function getFnIdPermissaoparametro()
    {
        return $this->fnIdPermissaoparametro;
    }

    /**
     * Set fnIdAreaensaio
     *
     * @param integer $fnIdAreaensaio
     * @return TPermissoesparametrosareasensaio
     */
    public function setFnIdAreaensaio($fnIdAreaensaio)
    {
        $this->fnIdAreaensaio = $fnIdAreaensaio;

        return $this;
    }

    /**
     * Get fnIdAreaensaio
     *
     * @return integer 
     */
    public function getFnIdAreaensaio()
    {
        return $this->fnIdAreaensaio;
    }
}
