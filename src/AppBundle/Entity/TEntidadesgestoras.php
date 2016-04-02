<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TEntidadesgestoras
 */
class TEntidadesgestoras
{
    /**
     * @var string
     */
    private $ftCodigoirar;

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
     * Set ftCodigoirar
     *
     * @param string $ftCodigoirar
     * @return TEntidadesgestoras
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
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
     * @return TEntidadesgestoras
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
