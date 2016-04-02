<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THistoricorequisicoes
 */
class THistoricorequisicoes
{
    /**
     * @var integer
     */
    private $fnIdRequisicao;

    /**
     * @var integer
     */
    private $fnIdAccao;

    /**
     * @var \DateTime
     */
    private $fdDataaccao;

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
    private $fnDataaccaolng;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fnIdRequisicao
     *
     * @param integer $fnIdRequisicao
     * @return THistoricorequisicoes
     */
    public function setFnIdRequisicao($fnIdRequisicao)
    {
        $this->fnIdRequisicao = $fnIdRequisicao;

        return $this;
    }

    /**
     * Get fnIdRequisicao
     *
     * @return integer 
     */
    public function getFnIdRequisicao()
    {
        return $this->fnIdRequisicao;
    }

    /**
     * Set fnIdAccao
     *
     * @param integer $fnIdAccao
     * @return THistoricorequisicoes
     */
    public function setFnIdAccao($fnIdAccao)
    {
        $this->fnIdAccao = $fnIdAccao;

        return $this;
    }

    /**
     * Get fnIdAccao
     *
     * @return integer 
     */
    public function getFnIdAccao()
    {
        return $this->fnIdAccao;
    }

    /**
     * Set fdDataaccao
     *
     * @param \DateTime $fdDataaccao
     * @return THistoricorequisicoes
     */
    public function setFdDataaccao($fdDataaccao)
    {
        $this->fdDataaccao = $fdDataaccao;

        return $this;
    }

    /**
     * Get fdDataaccao
     *
     * @return \DateTime 
     */
    public function getFdDataaccao()
    {
        return $this->fdDataaccao;
    }

    /**
     * Set ftNomeutilizador
     *
     * @param string $ftNomeutilizador
     * @return THistoricorequisicoes
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
     * @return THistoricorequisicoes
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
     * @return THistoricorequisicoes
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
     * Set fnDataaccaolng
     *
     * @param integer $fnDataaccaolng
     * @return THistoricorequisicoes
     */
    public function setFnDataaccaolng($fnDataaccaolng)
    {
        $this->fnDataaccaolng = $fnDataaccaolng;

        return $this;
    }

    /**
     * Get fnDataaccaolng
     *
     * @return integer 
     */
    public function getFnDataaccaolng()
    {
        return $this->fnDataaccaolng;
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
