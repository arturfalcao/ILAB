<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TListafacturacao
 */
class TListafacturacao
{
    /**
     * @var \DateTime
     */
    private $fdDatainicial;

    /**
     * @var \DateTime
     */
    private $fdDatafinal;

    /**
     * @var string
     */
    private $ftTipodata;

    /**
     * @var integer
     */
    private $fnIdCliente;

    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var string
     */
    private $ftCodigocentrocusto;

    /**
     * @var string
     */
    private $ftSerie;

    /**
     * @var integer
     */
    private $fnNumero;


    /**
     * Set fdDatainicial
     *
     * @param \DateTime $fdDatainicial
     * @return TListafacturacao
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
     * @return TListafacturacao
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
     * Set ftTipodata
     *
     * @param string $ftTipodata
     * @return TListafacturacao
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
     * Set fnIdCliente
     *
     * @param integer $fnIdCliente
     * @return TListafacturacao
     */
    public function setFnIdCliente($fnIdCliente)
    {
        $this->fnIdCliente = $fnIdCliente;

        return $this;
    }

    /**
     * Get fnIdCliente
     *
     * @return integer 
     */
    public function getFnIdCliente()
    {
        return $this->fnIdCliente;
    }

    /**
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TListafacturacao
     */
    public function setFtDescricao($ftDescricao)
    {
        $this->ftDescricao = $ftDescricao;

        return $this;
    }

    /**
     * Get ftDescricao
     *
     * @return string 
     */
    public function getFtDescricao()
    {
        return $this->ftDescricao;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TListafacturacao
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
     * Set ftCodigocentrocusto
     *
     * @param string $ftCodigocentrocusto
     * @return TListafacturacao
     */
    public function setFtCodigocentrocusto($ftCodigocentrocusto)
    {
        $this->ftCodigocentrocusto = $ftCodigocentrocusto;

        return $this;
    }

    /**
     * Get ftCodigocentrocusto
     *
     * @return string 
     */
    public function getFtCodigocentrocusto()
    {
        return $this->ftCodigocentrocusto;
    }

    /**
     * Set ftSerie
     *
     * @param string $ftSerie
     * @return TListafacturacao
     */
    public function setFtSerie($ftSerie)
    {
        $this->ftSerie = $ftSerie;

        return $this;
    }

    /**
     * Get ftSerie
     *
     * @return string 
     */
    public function getFtSerie()
    {
        return $this->ftSerie;
    }

    /**
     * Set fnNumero
     *
     * @param integer $fnNumero
     * @return TListafacturacao
     */
    public function setFnNumero($fnNumero)
    {
        $this->fnNumero = $fnNumero;

        return $this;
    }

    /**
     * Get fnNumero
     *
     * @return integer 
     */
    public function getFnNumero()
    {
        return $this->fnNumero;
    }
}
