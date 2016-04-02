<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLinhasporrequisicao
 */
class TLinhasporrequisicao
{
    /**
     * @var integer
     */
    private $fnIdRequisicao;

    /**
     * @var string
     */
    private $ftCodigoamostra;

    /**
     * @var string
     */
    private $ftNomeparametro1;

    /**
     * @var string
     */
    private $fnCusto1;

    /**
     * @var string
     */
    private $ftNomeparametro2;

    /**
     * @var string
     */
    private $fnCusto2;

    /**
     * @var string
     */
    private $ftNomeparametro3;

    /**
     * @var string
     */
    private $fnCusto3;

    /**
     * @var integer
     */
    private $fnIdAmostra;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdRequisicao
     *
     * @param integer $fnIdRequisicao
     * @return TLinhasporrequisicao
     */
    public function setFnIdRequisicao($fnIdRequisicao)
    {
        $this->fnIdRequisicao = $fnIdRequisicao;

        return $this;
    }

    /**
     * Get fnIdRequisicao
     *
     * @return integer 
     */
    public function getFnIdRequisicao()
    {
        return $this->fnIdRequisicao;
    }

    /**
     * Set ftCodigoamostra
     *
     * @param string $ftCodigoamostra
     * @return TLinhasporrequisicao
     */
    public function setFtCodigoamostra($ftCodigoamostra)
    {
        $this->ftCodigoamostra = $ftCodigoamostra;

        return $this;
    }

    /**
     * Get ftCodigoamostra
     *
     * @return string 
     */
    public function getFtCodigoamostra()
    {
        return $this->ftCodigoamostra;
    }

    /**
     * Set ftNomeparametro1
     *
     * @param string $ftNomeparametro1
     * @return TLinhasporrequisicao
     */
    public function setFtNomeparametro1($ftNomeparametro1)
    {
        $this->ftNomeparametro1 = $ftNomeparametro1;

        return $this;
    }

    /**
     * Get ftNomeparametro1
     *
     * @return string 
     */
    public function getFtNomeparametro1()
    {
        return $this->ftNomeparametro1;
    }

    /**
     * Set fnCusto1
     *
     * @param string $fnCusto1
     * @return TLinhasporrequisicao
     */
    public function setFnCusto1($fnCusto1)
    {
        $this->fnCusto1 = $fnCusto1;

        return $this;
    }

    /**
     * Get fnCusto1
     *
     * @return string 
     */
    public function getFnCusto1()
    {
        return $this->fnCusto1;
    }

    /**
     * Set ftNomeparametro2
     *
     * @param string $ftNomeparametro2
     * @return TLinhasporrequisicao
     */
    public function setFtNomeparametro2($ftNomeparametro2)
    {
        $this->ftNomeparametro2 = $ftNomeparametro2;

        return $this;
    }

    /**
     * Get ftNomeparametro2
     *
     * @return string 
     */
    public function getFtNomeparametro2()
    {
        return $this->ftNomeparametro2;
    }

    /**
     * Set fnCusto2
     *
     * @param string $fnCusto2
     * @return TLinhasporrequisicao
     */
    public function setFnCusto2($fnCusto2)
    {
        $this->fnCusto2 = $fnCusto2;

        return $this;
    }

    /**
     * Get fnCusto2
     *
     * @return string 
     */
    public function getFnCusto2()
    {
        return $this->fnCusto2;
    }

    /**
     * Set ftNomeparametro3
     *
     * @param string $ftNomeparametro3
     * @return TLinhasporrequisicao
     */
    public function setFtNomeparametro3($ftNomeparametro3)
    {
        $this->ftNomeparametro3 = $ftNomeparametro3;

        return $this;
    }

    /**
     * Get ftNomeparametro3
     *
     * @return string 
     */
    public function getFtNomeparametro3()
    {
        return $this->ftNomeparametro3;
    }

    /**
     * Set fnCusto3
     *
     * @param string $fnCusto3
     * @return TLinhasporrequisicao
     */
    public function setFnCusto3($fnCusto3)
    {
        $this->fnCusto3 = $fnCusto3;

        return $this;
    }

    /**
     * Get fnCusto3
     *
     * @return string 
     */
    public function getFnCusto3()
    {
        return $this->fnCusto3;
    }

    /**
     * Set fnIdAmostra
     *
     * @param integer $fnIdAmostra
     * @return TLinhasporrequisicao
     */
    public function setFnIdAmostra($fnIdAmostra)
    {
        $this->fnIdAmostra = $fnIdAmostra;

        return $this;
    }

    /**
     * Get fnIdAmostra
     *
     * @return integer 
     */
    public function getFnIdAmostra()
    {
        return $this->fnIdAmostra;
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
