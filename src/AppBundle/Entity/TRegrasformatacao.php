<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRegrasformatacao
 */
class TRegrasformatacao
{
    /**
     * @var integer
     */
    private $fnIdModeloresultado;

    /**
     * @var integer
     */
    private $fnOrdem;

    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var string
     */
    private $fnLimiteinferior;

    /**
     * @var string
     */
    private $fnLimitesuperior;

    /**
     * @var integer
     */
    private $fnCasasdecimais;

    /**
     * @var boolean
     */
    private $fbFormatoexponencial;

    /**
     * @var boolean
     */
    private $fbFormatoutilizador;

    /**
     * @var string
     */
    private $ftExpressaoutilizador;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdModeloresultado
     *
     * @param integer $fnIdModeloresultado
     * @return TRegrasformatacao
     */
    public function setFnIdModeloresultado($fnIdModeloresultado)
    {
        $this->fnIdModeloresultado = $fnIdModeloresultado;

        return $this;
    }

    /**
     * Get fnIdModeloresultado
     *
     * @return integer 
     */
    public function getFnIdModeloresultado()
    {
        return $this->fnIdModeloresultado;
    }

    /**
     * Set fnOrdem
     *
     * @param integer $fnOrdem
     * @return TRegrasformatacao
     */
    public function setFnOrdem($fnOrdem)
    {
        $this->fnOrdem = $fnOrdem;

        return $this;
    }

    /**
     * Get fnOrdem
     *
     * @return integer 
     */
    public function getFnOrdem()
    {
        return $this->fnOrdem;
    }

    /**
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TRegrasformatacao
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
     * Set fnLimiteinferior
     *
     * @param string $fnLimiteinferior
     * @return TRegrasformatacao
     */
    public function setFnLimiteinferior($fnLimiteinferior)
    {
        $this->fnLimiteinferior = $fnLimiteinferior;

        return $this;
    }

    /**
     * Get fnLimiteinferior
     *
     * @return string 
     */
    public function getFnLimiteinferior()
    {
        return $this->fnLimiteinferior;
    }

    /**
     * Set fnLimitesuperior
     *
     * @param string $fnLimitesuperior
     * @return TRegrasformatacao
     */
    public function setFnLimitesuperior($fnLimitesuperior)
    {
        $this->fnLimitesuperior = $fnLimitesuperior;

        return $this;
    }

    /**
     * Get fnLimitesuperior
     *
     * @return string 
     */
    public function getFnLimitesuperior()
    {
        return $this->fnLimitesuperior;
    }

    /**
     * Set fnCasasdecimais
     *
     * @param integer $fnCasasdecimais
     * @return TRegrasformatacao
     */
    public function setFnCasasdecimais($fnCasasdecimais)
    {
        $this->fnCasasdecimais = $fnCasasdecimais;

        return $this;
    }

    /**
     * Get fnCasasdecimais
     *
     * @return integer 
     */
    public function getFnCasasdecimais()
    {
        return $this->fnCasasdecimais;
    }

    /**
     * Set fbFormatoexponencial
     *
     * @param boolean $fbFormatoexponencial
     * @return TRegrasformatacao
     */
    public function setFbFormatoexponencial($fbFormatoexponencial)
    {
        $this->fbFormatoexponencial = $fbFormatoexponencial;

        return $this;
    }

    /**
     * Get fbFormatoexponencial
     *
     * @return boolean 
     */
    public function getFbFormatoexponencial()
    {
        return $this->fbFormatoexponencial;
    }

    /**
     * Set fbFormatoutilizador
     *
     * @param boolean $fbFormatoutilizador
     * @return TRegrasformatacao
     */
    public function setFbFormatoutilizador($fbFormatoutilizador)
    {
        $this->fbFormatoutilizador = $fbFormatoutilizador;

        return $this;
    }

    /**
     * Get fbFormatoutilizador
     *
     * @return boolean 
     */
    public function getFbFormatoutilizador()
    {
        return $this->fbFormatoutilizador;
    }

    /**
     * Set ftExpressaoutilizador
     *
     * @param string $ftExpressaoutilizador
     * @return TRegrasformatacao
     */
    public function setFtExpressaoutilizador($ftExpressaoutilizador)
    {
        $this->ftExpressaoutilizador = $ftExpressaoutilizador;

        return $this;
    }

    /**
     * Get ftExpressaoutilizador
     *
     * @return string 
     */
    public function getFtExpressaoutilizador()
    {
        return $this->ftExpressaoutilizador;
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
