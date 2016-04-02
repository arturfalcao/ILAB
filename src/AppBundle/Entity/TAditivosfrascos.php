<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAditivosfrascos
 */
class TAditivosfrascos
{
    /**
     * @var string
     */
    private $ftCodigo;

    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var string
     */
    private $ftAlias;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var string
     */
    private $ftTipo;

    /**
     * @var string
     */
    private $ftFormulaquimica;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TAditivosfrascos
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
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TAditivosfrascos
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
     * Set ftAlias
     *
     * @param string $ftAlias
     * @return TAditivosfrascos
     */
    public function setFtAlias($ftAlias)
    {
        $this->ftAlias = $ftAlias;

        return $this;
    }

    /**
     * Get ftAlias
     *
     * @return string 
     */
    public function getFtAlias()
    {
        return $this->ftAlias;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TAditivosfrascos
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
     * Set ftTipo
     *
     * @param string $ftTipo
     * @return TAditivosfrascos
     */
    public function setFtTipo($ftTipo)
    {
        $this->ftTipo = $ftTipo;

        return $this;
    }

    /**
     * Get ftTipo
     *
     * @return string 
     */
    public function getFtTipo()
    {
        return $this->ftTipo;
    }

    /**
     * Set ftFormulaquimica
     *
     * @param string $ftFormulaquimica
     * @return TAditivosfrascos
     */
    public function setFtFormulaquimica($ftFormulaquimica)
    {
        $this->ftFormulaquimica = $ftFormulaquimica;

        return $this;
    }

    /**
     * Get ftFormulaquimica
     *
     * @return string 
     */
    public function getFtFormulaquimica()
    {
        return $this->ftFormulaquimica;
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
