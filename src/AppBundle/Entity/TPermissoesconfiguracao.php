<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPermissoesconfiguracao
 */
class TPermissoesconfiguracao
{
    /**
     * @var integer
     */
    private $fnIdPerfil;

    /**
     * @var boolean
     */
    private $fbModelos;

    /**
     * @var boolean
     */
    private $fbGruposparametros;

    /**
     * @var boolean
     */
    private $fbProdutos;

    /**
     * @var boolean
     */
    private $fbUtilizadores;

    /**
     * @var boolean
     */
    private $fbPerfis;

    /**
     * @var boolean
     */
    private $fbClientes;

    /**
     * @var boolean
     */
    private $fbLocaiscolheita;

    /**
     * @var boolean
     */
    private $fbOrcamentos;

    /**
     * @var boolean
     */
    private $fbPlanificador;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdPerfil
     *
     * @param integer $fnIdPerfil
     * @return TPermissoesconfiguracao
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
     * Set fbModelos
     *
     * @param boolean $fbModelos
     * @return TPermissoesconfiguracao
     */
    public function setFbModelos($fbModelos)
    {
        $this->fbModelos = $fbModelos;

        return $this;
    }

    /**
     * Get fbModelos
     *
     * @return boolean 
     */
    public function getFbModelos()
    {
        return $this->fbModelos;
    }

    /**
     * Set fbGruposparametros
     *
     * @param boolean $fbGruposparametros
     * @return TPermissoesconfiguracao
     */
    public function setFbGruposparametros($fbGruposparametros)
    {
        $this->fbGruposparametros = $fbGruposparametros;

        return $this;
    }

    /**
     * Get fbGruposparametros
     *
     * @return boolean 
     */
    public function getFbGruposparametros()
    {
        return $this->fbGruposparametros;
    }

    /**
     * Set fbProdutos
     *
     * @param boolean $fbProdutos
     * @return TPermissoesconfiguracao
     */
    public function setFbProdutos($fbProdutos)
    {
        $this->fbProdutos = $fbProdutos;

        return $this;
    }

    /**
     * Get fbProdutos
     *
     * @return boolean 
     */
    public function getFbProdutos()
    {
        return $this->fbProdutos;
    }

    /**
     * Set fbUtilizadores
     *
     * @param boolean $fbUtilizadores
     * @return TPermissoesconfiguracao
     */
    public function setFbUtilizadores($fbUtilizadores)
    {
        $this->fbUtilizadores = $fbUtilizadores;

        return $this;
    }

    /**
     * Get fbUtilizadores
     *
     * @return boolean 
     */
    public function getFbUtilizadores()
    {
        return $this->fbUtilizadores;
    }

    /**
     * Set fbPerfis
     *
     * @param boolean $fbPerfis
     * @return TPermissoesconfiguracao
     */
    public function setFbPerfis($fbPerfis)
    {
        $this->fbPerfis = $fbPerfis;

        return $this;
    }

    /**
     * Get fbPerfis
     *
     * @return boolean 
     */
    public function getFbPerfis()
    {
        return $this->fbPerfis;
    }

    /**
     * Set fbClientes
     *
     * @param boolean $fbClientes
     * @return TPermissoesconfiguracao
     */
    public function setFbClientes($fbClientes)
    {
        $this->fbClientes = $fbClientes;

        return $this;
    }

    /**
     * Get fbClientes
     *
     * @return boolean 
     */
    public function getFbClientes()
    {
        return $this->fbClientes;
    }

    /**
     * Set fbLocaiscolheita
     *
     * @param boolean $fbLocaiscolheita
     * @return TPermissoesconfiguracao
     */
    public function setFbLocaiscolheita($fbLocaiscolheita)
    {
        $this->fbLocaiscolheita = $fbLocaiscolheita;

        return $this;
    }

    /**
     * Get fbLocaiscolheita
     *
     * @return boolean 
     */
    public function getFbLocaiscolheita()
    {
        return $this->fbLocaiscolheita;
    }

    /**
     * Set fbOrcamentos
     *
     * @param boolean $fbOrcamentos
     * @return TPermissoesconfiguracao
     */
    public function setFbOrcamentos($fbOrcamentos)
    {
        $this->fbOrcamentos = $fbOrcamentos;

        return $this;
    }

    /**
     * Get fbOrcamentos
     *
     * @return boolean 
     */
    public function getFbOrcamentos()
    {
        return $this->fbOrcamentos;
    }

    /**
     * Set fbPlanificador
     *
     * @param boolean $fbPlanificador
     * @return TPermissoesconfiguracao
     */
    public function setFbPlanificador($fbPlanificador)
    {
        $this->fbPlanificador = $fbPlanificador;

        return $this;
    }

    /**
     * Get fbPlanificador
     *
     * @return boolean 
     */
    public function getFbPlanificador()
    {
        return $this->fbPlanificador;
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
