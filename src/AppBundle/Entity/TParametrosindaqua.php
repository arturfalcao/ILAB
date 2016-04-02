<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TParametrosindaqua
 */
class TParametrosindaqua
{
    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var integer
     */
    private $fnNrordemA;

    /**
     * @var integer
     */
    private $fnNrordemB;

    /**
     * @var integer
     */
    private $fnNrordemC;

    /**
     * @var integer
     */
    private $fnNrordemD;

    /**
     * @var integer
     */
    private $fnNrordemE;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TParametrosindaqua
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
     * Set fnNrordemA
     *
     * @param integer $fnNrordemA
     * @return TParametrosindaqua
     */
    public function setFnNrordemA($fnNrordemA)
    {
        $this->fnNrordemA = $fnNrordemA;

        return $this;
    }

    /**
     * Get fnNrordemA
     *
     * @return integer 
     */
    public function getFnNrordemA()
    {
        return $this->fnNrordemA;
    }

    /**
     * Set fnNrordemB
     *
     * @param integer $fnNrordemB
     * @return TParametrosindaqua
     */
    public function setFnNrordemB($fnNrordemB)
    {
        $this->fnNrordemB = $fnNrordemB;

        return $this;
    }

    /**
     * Get fnNrordemB
     *
     * @return integer 
     */
    public function getFnNrordemB()
    {
        return $this->fnNrordemB;
    }

    /**
     * Set fnNrordemC
     *
     * @param integer $fnNrordemC
     * @return TParametrosindaqua
     */
    public function setFnNrordemC($fnNrordemC)
    {
        $this->fnNrordemC = $fnNrordemC;

        return $this;
    }

    /**
     * Get fnNrordemC
     *
     * @return integer 
     */
    public function getFnNrordemC()
    {
        return $this->fnNrordemC;
    }

    /**
     * Set fnNrordemD
     *
     * @param integer $fnNrordemD
     * @return TParametrosindaqua
     */
    public function setFnNrordemD($fnNrordemD)
    {
        $this->fnNrordemD = $fnNrordemD;

        return $this;
    }

    /**
     * Get fnNrordemD
     *
     * @return integer 
     */
    public function getFnNrordemD()
    {
        return $this->fnNrordemD;
    }

    /**
     * Set fnNrordemE
     *
     * @param integer $fnNrordemE
     * @return TParametrosindaqua
     */
    public function setFnNrordemE($fnNrordemE)
    {
        $this->fnNrordemE = $fnNrordemE;

        return $this;
    }

    /**
     * Get fnNrordemE
     *
     * @return integer 
     */
    public function getFnNrordemE()
    {
        return $this->fnNrordemE;
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
