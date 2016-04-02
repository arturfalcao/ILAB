<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDescricaoirar
 */
class TDescricaoirar
{
    /**
     * @var integer
     */
    private $fnIdTipoclassificacaoirar;

    /**
     * @var string
     */
    private $ftDescricaoirar;

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
     * Set fnIdTipoclassificacaoirar
     *
     * @param integer $fnIdTipoclassificacaoirar
     * @return TDescricaoirar
     */
    public function setFnIdTipoclassificacaoirar($fnIdTipoclassificacaoirar)
    {
        $this->fnIdTipoclassificacaoirar = $fnIdTipoclassificacaoirar;

        return $this;
    }

    /**
     * Get fnIdTipoclassificacaoirar
     *
     * @return integer 
     */
    public function getFnIdTipoclassificacaoirar()
    {
        return $this->fnIdTipoclassificacaoirar;
    }

    /**
     * Set ftDescricaoirar
     *
     * @param string $ftDescricaoirar
     * @return TDescricaoirar
     */
    public function setFtDescricaoirar($ftDescricaoirar)
    {
        $this->ftDescricaoirar = $ftDescricaoirar;

        return $this;
    }

    /**
     * Get ftDescricaoirar
     *
     * @return string 
     */
    public function getFtDescricaoirar()
    {
        return $this->ftDescricaoirar;
    }

    /**
     * Set ftCodigoirar
     *
     * @param string $ftCodigoirar
     * @return TDescricaoirar
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
     * @return TDescricaoirar
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
