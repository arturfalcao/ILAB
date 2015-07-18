<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TUtilizadores
 */
class TUtilizadores
{
    /**
     * @var string
     */
    private $ftUsername;

    /**
     * @var string
     */
    private $ftNome;

    /**
     * @var string
     */
    private $ftPass;

    /**
     * @var string
     */
    private $ftFuncao;

    /**
     * @var string
     */
    private $ftQualificacao;

    /**
     * @var integer
     */
    private $fnIdPerfil;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var boolean
     */
    private $fbPrimeirapassword;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftUsername
     *
     * @param string $ftUsername
     * @return TUtilizadores
     */
    public function setFtUsername($ftUsername)
    {
        $this->ftUsername = $ftUsername;

        return $this;
    }

    /**
     * Get ftUsername
     *
     * @return string 
     */
    public function getFtUsername()
    {
        return $this->ftUsername;
    }

    /**
     * Set ftNome
     *
     * @param string $ftNome
     * @return TUtilizadores
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
     * Set ftPass
     *
     * @param string $ftPass
     * @return TUtilizadores
     */
    public function setFtPass($ftPass)
    {
        $this->ftPass = $ftPass;

        return $this;
    }

    /**
     * Get ftPass
     *
     * @return string 
     */
    public function getFtPass()
    {
        return $this->ftPass;
    }

    /**
     * Set ftFuncao
     *
     * @param string $ftFuncao
     * @return TUtilizadores
     */
    public function setFtFuncao($ftFuncao)
    {
        $this->ftFuncao = $ftFuncao;

        return $this;
    }

    /**
     * Get ftFuncao
     *
     * @return string 
     */
    public function getFtFuncao()
    {
        return $this->ftFuncao;
    }

    /**
     * Set ftQualificacao
     *
     * @param string $ftQualificacao
     * @return TUtilizadores
     */
    public function setFtQualificacao($ftQualificacao)
    {
        $this->ftQualificacao = $ftQualificacao;

        return $this;
    }

    /**
     * Get ftQualificacao
     *
     * @return string 
     */
    public function getFtQualificacao()
    {
        return $this->ftQualificacao;
    }

    /**
     * Set fnIdPerfil
     *
     * @param integer $fnIdPerfil
     * @return TUtilizadores
     */
    public function setFnIdPerfil($fnIdPerfil)
    {
        $this->fnIdPerfil = $fnIdPerfil;

        return $this;
    }

    /**
     * Get fnIdPerfil
     *
     * @return integer 
     */
    public function getFnIdPerfil()
    {
        return $this->fnIdPerfil;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TUtilizadores
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
     * Set fbPrimeirapassword
     *
     * @param boolean $fbPrimeirapassword
     * @return TUtilizadores
     */
    public function setFbPrimeirapassword($fbPrimeirapassword)
    {
        $this->fbPrimeirapassword = $fbPrimeirapassword;

        return $this;
    }

    /**
     * Get fbPrimeirapassword
     *
     * @return boolean 
     */
    public function getFbPrimeirapassword()
    {
        return $this->fbPrimeirapassword;
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
