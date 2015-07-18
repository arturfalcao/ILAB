<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TClassificacaoirar
 */
class TClassificacaoirar
{
    /**
     * @var string
     */
    private $ftCodigoirar;

    /**
     * @var integer
     */
    private $fnIdDescricaoirar;

    /**
     * @var integer
     */
    private $fnIdEntidadegestora;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var integer
     */
    private $fnIdLocalcolheita;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftCodigoirar
     *
     * @param string $ftCodigoirar
     * @return TClassificacaoirar
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
     * Set fnIdDescricaoirar
     *
     * @param integer $fnIdDescricaoirar
     * @return TClassificacaoirar
     */
    public function setFnIdDescricaoirar($fnIdDescricaoirar)
    {
        $this->fnIdDescricaoirar = $fnIdDescricaoirar;

        return $this;
    }

    /**
     * Get fnIdDescricaoirar
     *
     * @return integer 
     */
    public function getFnIdDescricaoirar()
    {
        return $this->fnIdDescricaoirar;
    }

    /**
     * Set fnIdEntidadegestora
     *
     * @param integer $fnIdEntidadegestora
     * @return TClassificacaoirar
     */
    public function setFnIdEntidadegestora($fnIdEntidadegestora)
    {
        $this->fnIdEntidadegestora = $fnIdEntidadegestora;

        return $this;
    }

    /**
     * Get fnIdEntidadegestora
     *
     * @return integer 
     */
    public function getFnIdEntidadegestora()
    {
        return $this->fnIdEntidadegestora;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TClassificacaoirar
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
     * Set fnIdLocalcolheita
     *
     * @param integer $fnIdLocalcolheita
     * @return TClassificacaoirar
     */
    public function setFnIdLocalcolheita($fnIdLocalcolheita)
    {
        $this->fnIdLocalcolheita = $fnIdLocalcolheita;

        return $this;
    }

    /**
     * Get fnIdLocalcolheita
     *
     * @return integer 
     */
    public function getFnIdLocalcolheita()
    {
        return $this->fnIdLocalcolheita;
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
