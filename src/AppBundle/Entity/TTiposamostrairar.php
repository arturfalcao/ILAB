<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTiposamostrairar
 */
class TTiposamostrairar
{
    /**
     * @var integer
     */
    private $fnIdTipoamostra;

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
     * Set fnIdTipoamostra
     *
     * @param integer $fnIdTipoamostra
     * @return TTiposamostrairar
     */
    public function setFnIdTipoamostra($fnIdTipoamostra)
    {
        $this->fnIdTipoamostra = $fnIdTipoamostra;

        return $this;
    }

    /**
     * Get fnIdTipoamostra
     *
     * @return integer 
     */
    public function getFnIdTipoamostra()
    {
        return $this->fnIdTipoamostra;
    }

    /**
     * Set ftCodigoirar
     *
     * @param string $ftCodigoirar
     * @return TTiposamostrairar
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
     * @return TTiposamostrairar
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
