<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THistoricoestadosamostras
 */
class THistoricoestadosamostras
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
    private $fnIdAmostra;

    /**
     * @var \DateTime
     */
    private $fdTransicao;


    /**
     * Set ftIdEstado
     *
     * @param string $ftIdEstado
     * @return THistoricoestadosamostras
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
     * @return THistoricoestadosamostras
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
     * @return THistoricoestadosamostras
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
     * @return THistoricoestadosamostras
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
     * Set fnIdAmostra
     *
     * @param integer $fnIdAmostra
     * @return THistoricoestadosamostras
     */
    public function setFnIdAmostra($fnIdAmostra)
    {
        $this->fnIdAmostra = $fnIdAmostra;

        return $this;
    }

    /**
     * Get fnIdAmostra
     *
     * @return integer 
     */
    public function getFnIdAmostra()
    {
        return $this->fnIdAmostra;
    }

    /**
     * Set fdTransicao
     *
     * @param \DateTime $fdTransicao
     * @return THistoricoestadosamostras
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
