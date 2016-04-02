<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPermissoesamostramodelos
 */
class TPermissoesamostramodelos
{
    /**
     * @var integer
     */
    private $fnIdPermissaoamostra;

    /**
     * @var integer
     */
    private $fnIdModeloamostra;


    /**
     * Set fnIdPermissaoamostra
     *
     * @param integer $fnIdPermissaoamostra
     * @return TPermissoesamostramodelos
     */
    public function setFnIdPermissaoamostra($fnIdPermissaoamostra)
    {
        $this->fnIdPermissaoamostra = $fnIdPermissaoamostra;

        return $this;
    }

    /**
     * Get fnIdPermissaoamostra
     *
     * @return integer 
     */
    public function getFnIdPermissaoamostra()
    {
        return $this->fnIdPermissaoamostra;
    }

    /**
     * Set fnIdModeloamostra
     *
     * @param integer $fnIdModeloamostra
     * @return TPermissoesamostramodelos
     */
    public function setFnIdModeloamostra($fnIdModeloamostra)
    {
        $this->fnIdModeloamostra = $fnIdModeloamostra;

        return $this;
    }

    /**
     * Get fnIdModeloamostra
     *
     * @return integer 
     */
    public function getFnIdModeloamostra()
    {
        return $this->fnIdModeloamostra;
    }
}
