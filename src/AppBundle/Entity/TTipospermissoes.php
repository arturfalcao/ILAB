<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTipospermissoes
 */
class TTipospermissoes
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
     * @var boolean
     */
    private $fbAmostras;

    /**
     * @var boolean
     */
    private $fbParametros;

    /**
     * @var boolean
     */
    private $fbResultados;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TTipospermissoes
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
     * @return TTipospermissoes
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
     * Set fbAmostras
     *
     * @param boolean $fbAmostras
     * @return TTipospermissoes
     */
    public function setFbAmostras($fbAmostras)
    {
        $this->fbAmostras = $fbAmostras;

        return $this;
    }

    /**
     * Get fbAmostras
     *
     * @return boolean 
     */
    public function getFbAmostras()
    {
        return $this->fbAmostras;
    }

    /**
     * Set fbParametros
     *
     * @param boolean $fbParametros
     * @return TTipospermissoes
     */
    public function setFbParametros($fbParametros)
    {
        $this->fbParametros = $fbParametros;

        return $this;
    }

    /**
     * Get fbParametros
     *
     * @return boolean 
     */
    public function getFbParametros()
    {
        return $this->fbParametros;
    }

    /**
     * Set fbResultados
     *
     * @param boolean $fbResultados
     * @return TTipospermissoes
     */
    public function setFbResultados($fbResultados)
    {
        $this->fbResultados = $fbResultados;

        return $this;
    }

    /**
     * Get fbResultados
     *
     * @return boolean 
     */
    public function getFbResultados()
    {
        return $this->fbResultados;
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
