<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TListastrabalho
 */
class TListastrabalho
{
    /**
     * @var string
     */
    private $ftUtilizador;

    /**
     * @var string
     */
    private $ftNomeparametro;

    /**
     * @var string
     */
    private $ftUnidadesparametro;

    /**
     * @var string
     */
    private $ftTipodata;

    /**
     * @var \DateTime
     */
    private $fdDatainicial;

    /**
     * @var \DateTime
     */
    private $fdDatafinal;

    /**
     * @var integer
     */
    private $fnIdModeloparametro;

    /**
     * @var string
     */
    private $ftCodigo;

    /**
     * @var integer
     */
    private $fnHora;

    /**
     * @var integer
     */
    private $fnData;


    /**
     * Set ftUtilizador
     *
     * @param string $ftUtilizador
     * @return TListastrabalho
     */
    public function setFtUtilizador($ftUtilizador)
    {
        $this->ftUtilizador = $ftUtilizador;

        return $this;
    }

    /**
     * Get ftUtilizador
     *
     * @return string 
     */
    public function getFtUtilizador()
    {
        return $this->ftUtilizador;
    }

    /**
     * Set ftNomeparametro
     *
     * @param string $ftNomeparametro
     * @return TListastrabalho
     */
    public function setFtNomeparametro($ftNomeparametro)
    {
        $this->ftNomeparametro = $ftNomeparametro;

        return $this;
    }

    /**
     * Get ftNomeparametro
     *
     * @return string 
     */
    public function getFtNomeparametro()
    {
        return $this->ftNomeparametro;
    }

    /**
     * Set ftUnidadesparametro
     *
     * @param string $ftUnidadesparametro
     * @return TListastrabalho
     */
    public function setFtUnidadesparametro($ftUnidadesparametro)
    {
        $this->ftUnidadesparametro = $ftUnidadesparametro;

        return $this;
    }

    /**
     * Get ftUnidadesparametro
     *
     * @return string 
     */
    public function getFtUnidadesparametro()
    {
        return $this->ftUnidadesparametro;
    }

    /**
     * Set ftTipodata
     *
     * @param string $ftTipodata
     * @return TListastrabalho
     */
    public function setFtTipodata($ftTipodata)
    {
        $this->ftTipodata = $ftTipodata;

        return $this;
    }

    /**
     * Get ftTipodata
     *
     * @return string 
     */
    public function getFtTipodata()
    {
        return $this->ftTipodata;
    }

    /**
     * Set fdDatainicial
     *
     * @param \DateTime $fdDatainicial
     * @return TListastrabalho
     */
    public function setFdDatainicial($fdDatainicial)
    {
        $this->fdDatainicial = $fdDatainicial;

        return $this;
    }

    /**
     * Get fdDatainicial
     *
     * @return \DateTime 
     */
    public function getFdDatainicial()
    {
        return $this->fdDatainicial;
    }

    /**
     * Set fdDatafinal
     *
     * @param \DateTime $fdDatafinal
     * @return TListastrabalho
     */
    public function setFdDatafinal($fdDatafinal)
    {
        $this->fdDatafinal = $fdDatafinal;

        return $this;
    }

    /**
     * Get fdDatafinal
     *
     * @return \DateTime 
     */
    public function getFdDatafinal()
    {
        return $this->fdDatafinal;
    }

    /**
     * Set fnIdModeloparametro
     *
     * @param integer $fnIdModeloparametro
     * @return TListastrabalho
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
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TListastrabalho
     */
    public function setFtCodigo($ftCodigo)
    {
        $this->ftCodigo = $ftCodigo;

        return $this;
    }

    /**
     * Get ftCodigo
     *
     * @return string 
     */
    public function getFtCodigo()
    {
        return $this->ftCodigo;
    }

    /**
     * Set fnHora
     *
     * @param integer $fnHora
     * @return TListastrabalho
     */
    public function setFnHora($fnHora)
    {
        $this->fnHora = $fnHora;

        return $this;
    }

    /**
     * Get fnHora
     *
     * @return integer 
     */
    public function getFnHora()
    {
        return $this->fnHora;
    }

    /**
     * Set fnData
     *
     * @param integer $fnData
     * @return TListastrabalho
     */
    public function setFnData($fnData)
    {
        $this->fnData = $fnData;

        return $this;
    }

    /**
     * Get fnData
     *
     * @return integer 
     */
    public function getFnData()
    {
        return $this->fnData;
    }
}
