<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAmostrasalimentos
 */
class TAmostrasalimentos
{
    /**
     * @var string
     */
    private $ftLote;

    /**
     * @var string
     */
    private $ftAcondicionamento;

    /**
     * @var string
     */
    private $ftValidade;

    /**
     * @var string
     */
    private $ftTemperatura;

    /**
     * @var string
     */
    private $ftFaseprocesso;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftLote
     *
     * @param string $ftLote
     * @return TAmostrasalimentos
     */
    public function setFtLote($ftLote)
    {
        $this->ftLote = $ftLote;

        return $this;
    }

    /**
     * Get ftLote
     *
     * @return string 
     */
    public function getFtLote()
    {
        return $this->ftLote;
    }

    /**
     * Set ftAcondicionamento
     *
     * @param string $ftAcondicionamento
     * @return TAmostrasalimentos
     */
    public function setFtAcondicionamento($ftAcondicionamento)
    {
        $this->ftAcondicionamento = $ftAcondicionamento;

        return $this;
    }

    /**
     * Get ftAcondicionamento
     *
     * @return string 
     */
    public function getFtAcondicionamento()
    {
        return $this->ftAcondicionamento;
    }

    /**
     * Set ftValidade
     *
     * @param string $ftValidade
     * @return TAmostrasalimentos
     */
    public function setFtValidade($ftValidade)
    {
        $this->ftValidade = $ftValidade;

        return $this;
    }

    /**
     * Get ftValidade
     *
     * @return string 
     */
    public function getFtValidade()
    {
        return $this->ftValidade;
    }

    /**
     * Set ftTemperatura
     *
     * @param string $ftTemperatura
     * @return TAmostrasalimentos
     */
    public function setFtTemperatura($ftTemperatura)
    {
        $this->ftTemperatura = $ftTemperatura;

        return $this;
    }

    /**
     * Get ftTemperatura
     *
     * @return string 
     */
    public function getFtTemperatura()
    {
        return $this->ftTemperatura;
    }

    /**
     * Set ftFaseprocesso
     *
     * @param string $ftFaseprocesso
     * @return TAmostrasalimentos
     */
    public function setFtFaseprocesso($ftFaseprocesso)
    {
        $this->ftFaseprocesso = $ftFaseprocesso;

        return $this;
    }

    /**
     * Get ftFaseprocesso
     *
     * @return string 
     */
    public function getFtFaseprocesso()
    {
        return $this->ftFaseprocesso;
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
