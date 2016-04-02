<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTiposcontroloirar
 */
class TTiposcontroloirar
{
    /**
     * @var integer
     */
    private $fnIdTipocontrolo;

    /**
     * @var string
     */
    private $ftCodigoirar;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdTipocontrolo
     *
     * @param integer $fnIdTipocontrolo
     * @return TTiposcontroloirar
     */
    public function setFnIdTipocontrolo($fnIdTipocontrolo)
    {
        $this->fnIdTipocontrolo = $fnIdTipocontrolo;

        return $this;
    }

    /**
     * Get fnIdTipocontrolo
     *
     * @return integer 
     */
    public function getFnIdTipocontrolo()
    {
        return $this->fnIdTipocontrolo;
    }

    /**
     * Set ftCodigoirar
     *
     * @param string $ftCodigoirar
     * @return TTiposcontroloirar
     */
    public function setFtCodigoirar($ftCodigoirar)
    {
        $this->ftCodigoirar = $ftCodigoirar;

        return $this;
    }

    /**
     * Get ftCodigoirar
     *
     * @return string 
     */
    public function getFtCodigoirar()
    {
        return $this->ftCodigoirar;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TTiposcontroloirar
     */
    public function setFtObservacao($ftObservacao)
    {
        $this->ftObservacao = $ftObservacao;

        return $this;
    }

    /**
     * Get ftObservacao
     *
     * @return string 
     */
    public function getFtObservacao()
    {
        return $this->ftObservacao;
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
