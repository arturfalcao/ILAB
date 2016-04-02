<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TParametrosirar
 */
class TParametrosirar
{
    /**
     * @var integer
     */
    private $fnIdModeloparametro;

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
     * Set fnIdModeloparametro
     *
     * @param integer $fnIdModeloparametro
     * @return TParametrosirar
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
     * Set ftCodigoirar
     *
     * @param string $ftCodigoirar
     * @return TParametrosirar
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
     * @return TParametrosirar
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
