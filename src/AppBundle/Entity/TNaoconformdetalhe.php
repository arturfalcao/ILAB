<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TNaoconformdetalhe
 */
class TNaoconformdetalhe
{
    /**
     * @var integer
     */
    private $fnIdNaoconformcabecalho;

    /**
     * @var integer
     */
    private $fnDatalng;

    /**
     * @var integer
     */
    private $fnHoralng;

    /**
     * @var string
     */
    private $ftEstadoinicial;

    /**
     * @var string
     */
    private $ftEstadofinal;

    /**
     * @var string
     */
    private $ftValidacao;

    /**
     * @var string
     */
    private $ftEmaildestino;

    /**
     * @var string
     */
    private $ftUtilizadorenvio;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdNaoconformcabecalho
     *
     * @param integer $fnIdNaoconformcabecalho
     * @return TNaoconformdetalhe
     */
    public function setFnIdNaoconformcabecalho($fnIdNaoconformcabecalho)
    {
        $this->fnIdNaoconformcabecalho = $fnIdNaoconformcabecalho;

        return $this;
    }

    /**
     * Get fnIdNaoconformcabecalho
     *
     * @return integer 
     */
    public function getFnIdNaoconformcabecalho()
    {
        return $this->fnIdNaoconformcabecalho;
    }

    /**
     * Set fnDatalng
     *
     * @param integer $fnDatalng
     * @return TNaoconformdetalhe
     */
    public function setFnDatalng($fnDatalng)
    {
        $this->fnDatalng = $fnDatalng;

        return $this;
    }

    /**
     * Get fnDatalng
     *
     * @return integer 
     */
    public function getFnDatalng()
    {
        return $this->fnDatalng;
    }

    /**
     * Set fnHoralng
     *
     * @param integer $fnHoralng
     * @return TNaoconformdetalhe
     */
    public function setFnHoralng($fnHoralng)
    {
        $this->fnHoralng = $fnHoralng;

        return $this;
    }

    /**
     * Get fnHoralng
     *
     * @return integer 
     */
    public function getFnHoralng()
    {
        return $this->fnHoralng;
    }

    /**
     * Set ftEstadoinicial
     *
     * @param string $ftEstadoinicial
     * @return TNaoconformdetalhe
     */
    public function setFtEstadoinicial($ftEstadoinicial)
    {
        $this->ftEstadoinicial = $ftEstadoinicial;

        return $this;
    }

    /**
     * Get ftEstadoinicial
     *
     * @return string 
     */
    public function getFtEstadoinicial()
    {
        return $this->ftEstadoinicial;
    }

    /**
     * Set ftEstadofinal
     *
     * @param string $ftEstadofinal
     * @return TNaoconformdetalhe
     */
    public function setFtEstadofinal($ftEstadofinal)
    {
        $this->ftEstadofinal = $ftEstadofinal;

        return $this;
    }

    /**
     * Get ftEstadofinal
     *
     * @return string 
     */
    public function getFtEstadofinal()
    {
        return $this->ftEstadofinal;
    }

    /**
     * Set ftValidacao
     *
     * @param string $ftValidacao
     * @return TNaoconformdetalhe
     */
    public function setFtValidacao($ftValidacao)
    {
        $this->ftValidacao = $ftValidacao;

        return $this;
    }

    /**
     * Get ftValidacao
     *
     * @return string 
     */
    public function getFtValidacao()
    {
        return $this->ftValidacao;
    }

    /**
     * Set ftEmaildestino
     *
     * @param string $ftEmaildestino
     * @return TNaoconformdetalhe
     */
    public function setFtEmaildestino($ftEmaildestino)
    {
        $this->ftEmaildestino = $ftEmaildestino;

        return $this;
    }

    /**
     * Get ftEmaildestino
     *
     * @return string 
     */
    public function getFtEmaildestino()
    {
        return $this->ftEmaildestino;
    }

    /**
     * Set ftUtilizadorenvio
     *
     * @param string $ftUtilizadorenvio
     * @return TNaoconformdetalhe
     */
    public function setFtUtilizadorenvio($ftUtilizadorenvio)
    {
        $this->ftUtilizadorenvio = $ftUtilizadorenvio;

        return $this;
    }

    /**
     * Get ftUtilizadorenvio
     *
     * @return string 
     */
    public function getFtUtilizadorenvio()
    {
        return $this->ftUtilizadorenvio;
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
