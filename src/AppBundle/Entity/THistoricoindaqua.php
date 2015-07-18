<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THistoricoindaqua
 */
class THistoricoindaqua
{
    /**
     * @var string
     */
    private $ftSistema;

    /**
     * @var \DateTime
     */
    private $fdDatacampanha;

    /**
     * @var string
     */
    private $ftCaminhoficheiro;

    /**
     * @var string
     */
    private $ftNomeficheiro;

    /**
     * @var string
     */
    private $ftNomeutilizador;

    /**
     * @var \DateTime
     */
    private $fdDataexportacao;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftSistema
     *
     * @param string $ftSistema
     * @return THistoricoindaqua
     */
    public function setFtSistema($ftSistema)
    {
        $this->ftSistema = $ftSistema;

        return $this;
    }

    /**
     * Get ftSistema
     *
     * @return string 
     */
    public function getFtSistema()
    {
        return $this->ftSistema;
    }

    /**
     * Set fdDatacampanha
     *
     * @param \DateTime $fdDatacampanha
     * @return THistoricoindaqua
     */
    public function setFdDatacampanha($fdDatacampanha)
    {
        $this->fdDatacampanha = $fdDatacampanha;

        return $this;
    }

    /**
     * Get fdDatacampanha
     *
     * @return \DateTime 
     */
    public function getFdDatacampanha()
    {
        return $this->fdDatacampanha;
    }

    /**
     * Set ftCaminhoficheiro
     *
     * @param string $ftCaminhoficheiro
     * @return THistoricoindaqua
     */
    public function setFtCaminhoficheiro($ftCaminhoficheiro)
    {
        $this->ftCaminhoficheiro = $ftCaminhoficheiro;

        return $this;
    }

    /**
     * Get ftCaminhoficheiro
     *
     * @return string 
     */
    public function getFtCaminhoficheiro()
    {
        return $this->ftCaminhoficheiro;
    }

    /**
     * Set ftNomeficheiro
     *
     * @param string $ftNomeficheiro
     * @return THistoricoindaqua
     */
    public function setFtNomeficheiro($ftNomeficheiro)
    {
        $this->ftNomeficheiro = $ftNomeficheiro;

        return $this;
    }

    /**
     * Get ftNomeficheiro
     *
     * @return string 
     */
    public function getFtNomeficheiro()
    {
        return $this->ftNomeficheiro;
    }

    /**
     * Set ftNomeutilizador
     *
     * @param string $ftNomeutilizador
     * @return THistoricoindaqua
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
     * Set fdDataexportacao
     *
     * @param \DateTime $fdDataexportacao
     * @return THistoricoindaqua
     */
    public function setFdDataexportacao($fdDataexportacao)
    {
        $this->fdDataexportacao = $fdDataexportacao;

        return $this;
    }

    /**
     * Get fdDataexportacao
     *
     * @return \DateTime 
     */
    public function getFdDataexportacao()
    {
        return $this->fdDataexportacao;
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
