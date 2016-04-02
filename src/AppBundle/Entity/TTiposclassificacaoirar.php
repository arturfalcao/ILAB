<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTiposclassificacaoirar
 */
class TTiposclassificacaoirar
{
    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var string
     */
    private $ftCodigo;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TTiposclassificacaoirar
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
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TTiposclassificacaoirar
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
     * Get fnId
     *
     * @return integer 
     */
    public function getFnId()
    {
        return $this->fnId;
    }
}
