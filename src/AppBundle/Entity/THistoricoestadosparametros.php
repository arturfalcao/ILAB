<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THistoricoestadosparametros
 */
class THistoricoestadosparametros
{
    /**
     * @var string
     */
    private $ftIdEstado;

    /**
     * @var string
     */
    private $ftNomeutilizador;

    /**
     * @var string
     */
    private $ftFuncaoutilizador;

    /**
     * @var string
     */
    private $ftMotivo;

    /**
     * @var integer
     */
    private $fnIdParametro;

    /**
     * @var \DateTime
     */
    private $fdTransicao;


    /**
     * Set ftIdEstado
     *
     * @param string $ftIdEstado
     * @return THistoricoestadosparametros
     */
    public function setFtIdEstado($ftIdEstado)
    {
        $this->ftIdEstado = $ftIdEstado;

        return $this;
    }

    /**
     * Get ftIdEstado
     *
     * @return string 
     */
    public function getFtIdEstado()
    {
        return $this->ftIdEstado;
    }

    /**
     * Set ftNomeutilizador
     *
     * @param string $ftNomeutilizador
     * @return THistoricoestadosparametros
     */
    public function setFtNomeutilizador($ftNomeutilizador)
    {
        $this->ftNomeutilizador = $ftNomeutilizador;

        return $this;
    }

    /**
     * Get ftNomeutilizador
     *
     * @return string 
     */
    public function getFtNomeutilizador()
    {
        return $this->ftNomeutilizador;
    }

    /**
     * Set ftFuncaoutilizador
     *
     * @param string $ftFuncaoutilizador
     * @return THistoricoestadosparametros
     */
    public function setFtFuncaoutilizador($ftFuncaoutilizador)
    {
        $this->ftFuncaoutilizador = $ftFuncaoutilizador;

        return $this;
    }

    /**
     * Get ftFuncaoutilizador
     *
     * @return string 
     */
    public function getFtFuncaoutilizador()
    {
        return $this->ftFuncaoutilizador;
    }

    /**
     * Set ftMotivo
     *
     * @param string $ftMotivo
     * @return THistoricoestadosparametros
     */
    public function setFtMotivo($ftMotivo)
    {
        $this->ftMotivo = $ftMotivo;

        return $this;
    }

    /**
     * Get ftMotivo
     *
     * @return string 
     */
    public function getFtMotivo()
    {
        return $this->ftMotivo;
    }

    /**
     * Set fnIdParametro
     *
     * @param integer $fnIdParametro
     * @return THistoricoestadosparametros
     */
    public function setFnIdParametro($fnIdParametro)
    {
        $this->fnIdParametro = $fnIdParametro;

        return $this;
    }

    /**
     * Get fnIdParametro
     *
     * @return integer 
     */
    public function getFnIdParametro()
    {
        return $this->fnIdParametro;
    }

    /**
     * Set fdTransicao
     *
     * @param \DateTime $fdTransicao
     * @return THistoricoestadosparametros
     */
    public function setFdTransicao($fdTransicao)
    {
        $this->fdTransicao = $fdTransicao;

        return $this;
    }

    /**
     * Get fdTransicao
     *
     * @return \DateTime 
     */
    public function getFdTransicao()
    {
        return $this->fdTransicao;
    }
}
