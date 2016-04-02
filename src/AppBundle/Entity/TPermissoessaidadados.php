<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPermissoessaidadados
 */
class TPermissoessaidadados
{
    /**
     * @var integer
     */
    private $fnIdPerfil;

    /**
     * @var boolean
     */
    private $fbBoletins;

    /**
     * @var boolean
     */
    private $fbListas;

    /**
     * @var boolean
     */
    private $fbExportar;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdPerfil
     *
     * @param integer $fnIdPerfil
     * @return TPermissoessaidadados
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
     * Set fbBoletins
     *
     * @param boolean $fbBoletins
     * @return TPermissoessaidadados
     */
    public function setFbBoletins($fbBoletins)
    {
        $this->fbBoletins = $fbBoletins;

        return $this;
    }

    /**
     * Get fbBoletins
     *
     * @return boolean 
     */
    public function getFbBoletins()
    {
        return $this->fbBoletins;
    }

    /**
     * Set fbListas
     *
     * @param boolean $fbListas
     * @return TPermissoessaidadados
     */
    public function setFbListas($fbListas)
    {
        $this->fbListas = $fbListas;

        return $this;
    }

    /**
     * Get fbListas
     *
     * @return boolean 
     */
    public function getFbListas()
    {
        return $this->fbListas;
    }

    /**
     * Set fbExportar
     *
     * @param boolean $fbExportar
     * @return TPermissoessaidadados
     */
    public function setFbExportar($fbExportar)
    {
        $this->fbExportar = $fbExportar;

        return $this;
    }

    /**
     * Get fbExportar
     *
     * @return boolean 
     */
    public function getFbExportar()
    {
        return $this->fbExportar;
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
