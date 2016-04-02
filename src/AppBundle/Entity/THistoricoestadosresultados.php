<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THistoricoestadosresultados
 */
class THistoricoestadosresultados
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
    private $fnIdResultado;

    /**
     * @var \DateTime
     */
    private $fdTransicao;


    /**
     * Set ftIdEstado
     *
     * @param string $ftIdEstado
     * @return THistoricoestadosresultados
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
     * @return THistoricoestadosresultados
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
     * @return THistoricoestadosresultados
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
     * @return THistoricoestadosresultados
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
     * Set fnIdResultado
     *
     * @param integer $fnIdResultado
     * @return THistoricoestadosresultados
     */
    public function setFnIdResultado($fnIdResultado)
    {
        $this->fnIdResultado = $fnIdResultado;

        return $this;
    }

    /**
     * Get fnIdResultado
     *
     * @return integer 
     */
    public function getFnIdResultado()
    {
        return $this->fnIdResultado;
    }

    /**
     * Set fdTransicao
     *
     * @param \DateTime $fdTransicao
     * @return THistoricoestadosresultados
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
