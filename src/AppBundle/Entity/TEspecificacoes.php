<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TEspecificacoes
 */
class TEspecificacoes
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
    private $ftMensagemUtilizador;

    /**
     * @var string
     */
    private $ftTextoQdPassaP;

    /**
     * @var string
     */
    private $ftTextoQdNaoPassaP;

    /**
     * @var string
     */
    private $ftTextoQdCumpreA;

    /**
     * @var string
     */
    private $ftTextoQdNaoCumpreA;

    /**
     * @var boolean
     */
    private $fbEmissaoDeRelatorio;

    /**
     * @var integer
     */
    private $fnIdLegislacao;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var string
     */
    private $ftSiglavl;

    /**
     * @var string
     */
    private $ftLegendavl;

    /**
     * @var boolean
     */
    private $fbActivo;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftCodigo
     *
     * @param string $ftCodigo
     * @return TEspecificacoes
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
     * @return TEspecificacoes
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
     * @return TEspecificacoes
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
     * Set ftMensagemUtilizador
     *
     * @param string $ftMensagemUtilizador
     * @return TEspecificacoes
     */
    public function setFtMensagemUtilizador($ftMensagemUtilizador)
    {
        $this->ftMensagemUtilizador = $ftMensagemUtilizador;

        return $this;
    }

    /**
     * Get ftMensagemUtilizador
     *
     * @return string 
     */
    public function getFtMensagemUtilizador()
    {
        return $this->ftMensagemUtilizador;
    }

    /**
     * Set ftTextoQdPassaP
     *
     * @param string $ftTextoQdPassaP
     * @return TEspecificacoes
     */
    public function setFtTextoQdPassaP($ftTextoQdPassaP)
    {
        $this->ftTextoQdPassaP = $ftTextoQdPassaP;

        return $this;
    }

    /**
     * Get ftTextoQdPassaP
     *
     * @return string 
     */
    public function getFtTextoQdPassaP()
    {
        return $this->ftTextoQdPassaP;
    }

    /**
     * Set ftTextoQdNaoPassaP
     *
     * @param string $ftTextoQdNaoPassaP
     * @return TEspecificacoes
     */
    public function setFtTextoQdNaoPassaP($ftTextoQdNaoPassaP)
    {
        $this->ftTextoQdNaoPassaP = $ftTextoQdNaoPassaP;

        return $this;
    }

    /**
     * Get ftTextoQdNaoPassaP
     *
     * @return string 
     */
    public function getFtTextoQdNaoPassaP()
    {
        return $this->ftTextoQdNaoPassaP;
    }

    /**
     * Set ftTextoQdCumpreA
     *
     * @param string $ftTextoQdCumpreA
     * @return TEspecificacoes
     */
    public function setFtTextoQdCumpreA($ftTextoQdCumpreA)
    {
        $this->ftTextoQdCumpreA = $ftTextoQdCumpreA;

        return $this;
    }

    /**
     * Get ftTextoQdCumpreA
     *
     * @return string 
     */
    public function getFtTextoQdCumpreA()
    {
        return $this->ftTextoQdCumpreA;
    }

    /**
     * Set ftTextoQdNaoCumpreA
     *
     * @param string $ftTextoQdNaoCumpreA
     * @return TEspecificacoes
     */
    public function setFtTextoQdNaoCumpreA($ftTextoQdNaoCumpreA)
    {
        $this->ftTextoQdNaoCumpreA = $ftTextoQdNaoCumpreA;

        return $this;
    }

    /**
     * Get ftTextoQdNaoCumpreA
     *
     * @return string 
     */
    public function getFtTextoQdNaoCumpreA()
    {
        return $this->ftTextoQdNaoCumpreA;
    }

    /**
     * Set fbEmissaoDeRelatorio
     *
     * @param boolean $fbEmissaoDeRelatorio
     * @return TEspecificacoes
     */
    public function setFbEmissaoDeRelatorio($fbEmissaoDeRelatorio)
    {
        $this->fbEmissaoDeRelatorio = $fbEmissaoDeRelatorio;

        return $this;
    }

    /**
     * Get fbEmissaoDeRelatorio
     *
     * @return boolean 
     */
    public function getFbEmissaoDeRelatorio()
    {
        return $this->fbEmissaoDeRelatorio;
    }

    /**
     * Set fnIdLegislacao
     *
     * @param integer $fnIdLegislacao
     * @return TEspecificacoes
     */
    public function setFnIdLegislacao($fnIdLegislacao)
    {
        $this->fnIdLegislacao = $fnIdLegislacao;

        return $this;
    }

    /**
     * Get fnIdLegislacao
     *
     * @return integer 
     */
    public function getFnIdLegislacao()
    {
        return $this->fnIdLegislacao;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TEspecificacoes
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
     * Set ftSiglavl
     *
     * @param string $ftSiglavl
     * @return TEspecificacoes
     */
    public function setFtSiglavl($ftSiglavl)
    {
        $this->ftSiglavl = $ftSiglavl;

        return $this;
    }

    /**
     * Get ftSiglavl
     *
     * @return string 
     */
    public function getFtSiglavl()
    {
        return $this->ftSiglavl;
    }

    /**
     * Set ftLegendavl
     *
     * @param string $ftLegendavl
     * @return TEspecificacoes
     */
    public function setFtLegendavl($ftLegendavl)
    {
        $this->ftLegendavl = $ftLegendavl;

        return $this;
    }

    /**
     * Get ftLegendavl
     *
     * @return string 
     */
    public function getFtLegendavl()
    {
        return $this->ftLegendavl;
    }

    /**
     * Set fbActivo
     *
     * @param boolean $fbActivo
     * @return TEspecificacoes
     */
    public function setFbActivo($fbActivo)
    {
        $this->fbActivo = $fbActivo;

        return $this;
    }

    /**
     * Get fbActivo
     *
     * @return boolean 
     */
    public function getFbActivo()
    {
        return $this->fbActivo;
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
