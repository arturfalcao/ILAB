<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TClientes
 */
class TClientes
{
    /**
     * @var string
     */
    private $ftCodigo;

    /**
     * @var string
     */
    private $ftNome;

    /**
     * @var string
     */
    private $ftAlias;

    /**
     * @var string
     */
    private $ftMorada;

    /**
     * @var string
     */
    private $ftCodpostal;

    /**
     * @var string
     */
    private $ftLocalidade;

    /**
     * @var string
     */
    private $ftPais;

    /**
     * @var string
     */
    private $ftTelefone;

    /**
     * @var string
     */
    private $ftFax;

    /**
     * @var string
     */
    private $ftEmail;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var string
     */
    private $ftNomecontacto;

    /**
     * @var string
     */
    private $ftTelefonecontacto;

    /**
     * @var string
     */
    private $ftEmailcontacto;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TClientes
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
     * Set ftNome
     *
     * @param string $ftNome
     * @return TClientes
     */
    public function setFtNome($ftNome)
    {
        $this->ftNome = $ftNome;

        return $this;
    }

    /**
     * Get ftNome
     *
     * @return string 
     */
    public function getFtNome()
    {
        return $this->ftNome;
    }

    /**
     * Set ftAlias
     *
     * @param string $ftAlias
     * @return TClientes
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
     * Set ftMorada
     *
     * @param string $ftMorada
     * @return TClientes
     */
    public function setFtMorada($ftMorada)
    {
        $this->ftMorada = $ftMorada;

        return $this;
    }

    /**
     * Get ftMorada
     *
     * @return string 
     */
    public function getFtMorada()
    {
        return $this->ftMorada;
    }

    /**
     * Set ftCodpostal
     *
     * @param string $ftCodpostal
     * @return TClientes
     */
    public function setFtCodpostal($ftCodpostal)
    {
        $this->ftCodpostal = $ftCodpostal;

        return $this;
    }

    /**
     * Get ftCodpostal
     *
     * @return string 
     */
    public function getFtCodpostal()
    {
        return $this->ftCodpostal;
    }

    /**
     * Set ftLocalidade
     *
     * @param string $ftLocalidade
     * @return TClientes
     */
    public function setFtLocalidade($ftLocalidade)
    {
        $this->ftLocalidade = $ftLocalidade;

        return $this;
    }

    /**
     * Get ftLocalidade
     *
     * @return string 
     */
    public function getFtLocalidade()
    {
        return $this->ftLocalidade;
    }

    /**
     * Set ftPais
     *
     * @param string $ftPais
     * @return TClientes
     */
    public function setFtPais($ftPais)
    {
        $this->ftPais = $ftPais;

        return $this;
    }

    /**
     * Get ftPais
     *
     * @return string 
     */
    public function getFtPais()
    {
        return $this->ftPais;
    }

    /**
     * Set ftTelefone
     *
     * @param string $ftTelefone
     * @return TClientes
     */
    public function setFtTelefone($ftTelefone)
    {
        $this->ftTelefone = $ftTelefone;

        return $this;
    }

    /**
     * Get ftTelefone
     *
     * @return string 
     */
    public function getFtTelefone()
    {
        return $this->ftTelefone;
    }

    /**
     * Set ftFax
     *
     * @param string $ftFax
     * @return TClientes
     */
    public function setFtFax($ftFax)
    {
        $this->ftFax = $ftFax;

        return $this;
    }

    /**
     * Get ftFax
     *
     * @return string 
     */
    public function getFtFax()
    {
        return $this->ftFax;
    }

    /**
     * Set ftEmail
     *
     * @param string $ftEmail
     * @return TClientes
     */
    public function setFtEmail($ftEmail)
    {
        $this->ftEmail = $ftEmail;

        return $this;
    }

    /**
     * Get ftEmail
     *
     * @return string 
     */
    public function getFtEmail()
    {
        return $this->ftEmail;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TClientes
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
     * Set ftNomecontacto
     *
     * @param string $ftNomecontacto
     * @return TClientes
     */
    public function setFtNomecontacto($ftNomecontacto)
    {
        $this->ftNomecontacto = $ftNomecontacto;

        return $this;
    }

    /**
     * Get ftNomecontacto
     *
     * @return string 
     */
    public function getFtNomecontacto()
    {
        return $this->ftNomecontacto;
    }

    /**
     * Set ftTelefonecontacto
     *
     * @param string $ftTelefonecontacto
     * @return TClientes
     */
    public function setFtTelefonecontacto($ftTelefonecontacto)
    {
        $this->ftTelefonecontacto = $ftTelefonecontacto;

        return $this;
    }

    /**
     * Get ftTelefonecontacto
     *
     * @return string 
     */
    public function getFtTelefonecontacto()
    {
        return $this->ftTelefonecontacto;
    }

    /**
     * Set ftEmailcontacto
     *
     * @param string $ftEmailcontacto
     * @return TClientes
     */
    public function setFtEmailcontacto($ftEmailcontacto)
    {
        $this->ftEmailcontacto = $ftEmailcontacto;

        return $this;
    }

    /**
     * Get ftEmailcontacto
     *
     * @return string 
     */
    public function getFtEmailcontacto()
    {
        return $this->ftEmailcontacto;
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
