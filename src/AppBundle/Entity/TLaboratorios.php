<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLaboratorios
 */
class TLaboratorios
{
    /**
     * @var string
     */
    private $ftNclaboratorio;

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
     * Set ftNclaboratorio
     *
     * @param string $ftNclaboratorio
     * @return TLaboratorios
     */
    public function setFtNclaboratorio($ftNclaboratorio)
    {
        $this->ftNclaboratorio = $ftNclaboratorio;

        return $this;
    }

    /**
     * Get ftNclaboratorio
     *
     * @return string 
     */
    public function getFtNclaboratorio()
    {
        return $this->ftNclaboratorio;
    }

    /**
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
     * @return TLaboratorios
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
