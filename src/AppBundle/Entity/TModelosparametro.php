<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TModelosparametro
 */
class TModelosparametro
{
    /**
     * @var boolean
     */
    private $fbActivo;

    /**
     * @var string
     */
    private $ftDescricao;

    /**
     * @var integer
     */
    private $fnIdFamiliaparametro;

    /**
     * @var string
     */
    private $ftFormulaquimica;

    /**
     * @var integer
     */
    private $fnIdLaboratorio;

    /**
     * @var string
     */
    private $fnPrecocompra;

    /**
     * @var string
     */
    private $fnPrecovenda;

    /**
     * @var string
     */
    private $fnFactorcorreccao;

    /**
     * @var integer
     */
    private $fnIdMetodo;

    /**
     * @var integer
     */
    private $fnIdTecnica;

    /**
     * @var integer
     */
    private $fnIdAreaensaio;

    /**
     * @var boolean
     */
    private $fnNrdiasparaexecucao;

    /**
     * @var integer
     */
    private $fnIdModeloresultado;

    /**
     * @var boolean
     */
    private $fbAcreditado;

    /**
     * @var integer
     */
    private $fnIdFrasco;

    /**
     * @var integer
     */
    private $fnVolumeminimo;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set fbActivo
     *
     * @param boolean $fbActivo
     * @return TModelosparametro
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
     * Set ftDescricao
     *
     * @param string $ftDescricao
     * @return TModelosparametro
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
     * Set fnIdFamiliaparametro
     *
     * @param integer $fnIdFamiliaparametro
     * @return TModelosparametro
     */
    public function setFnIdFamiliaparametro($fnIdFamiliaparametro)
    {
        $this->fnIdFamiliaparametro = $fnIdFamiliaparametro;

        return $this;
    }

    /**
     * Get fnIdFamiliaparametro
     *
     * @return integer 
     */
    public function getFnIdFamiliaparametro()
    {
        return $this->fnIdFamiliaparametro;
    }

    /**
     * Set ftFormulaquimica
     *
     * @param string $ftFormulaquimica
     * @return TModelosparametro
     */
    public function setFtFormulaquimica($ftFormulaquimica)
    {
        $this->ftFormulaquimica = $ftFormulaquimica;

        return $this;
    }

    /**
     * Get ftFormulaquimica
     *
     * @return string 
     */
    public function getFtFormulaquimica()
    {
        return $this->ftFormulaquimica;
    }

    /**
     * Set fnIdLaboratorio
     *
     * @param integer $fnIdLaboratorio
     * @return TModelosparametro
     */
    public function setFnIdLaboratorio($fnIdLaboratorio)
    {
        $this->fnIdLaboratorio = $fnIdLaboratorio;

        return $this;
    }

    /**
     * Get fnIdLaboratorio
     *
     * @return integer 
     */
    public function getFnIdLaboratorio()
    {
        return $this->fnIdLaboratorio;
    }

    /**
     * Set fnPrecocompra
     *
     * @param string $fnPrecocompra
     * @return TModelosparametro
     */
    public function setFnPrecocompra($fnPrecocompra)
    {
        $this->fnPrecocompra = $fnPrecocompra;

        return $this;
    }

    /**
     * Get fnPrecocompra
     *
     * @return string 
     */
    public function getFnPrecocompra()
    {
        return $this->fnPrecocompra;
    }

    /**
     * Set fnPrecovenda
     *
     * @param string $fnPrecovenda
     * @return TModelosparametro
     */
    public function setFnPrecovenda($fnPrecovenda)
    {
        $this->fnPrecovenda = $fnPrecovenda;

        return $this;
    }

    /**
     * Get fnPrecovenda
     *
     * @return string 
     */
    public function getFnPrecovenda()
    {
        return $this->fnPrecovenda;
    }

    /**
     * Set fnFactorcorreccao
     *
     * @param string $fnFactorcorreccao
     * @return TModelosparametro
     */
    public function setFnFactorcorreccao($fnFactorcorreccao)
    {
        $this->fnFactorcorreccao = $fnFactorcorreccao;

        return $this;
    }

    /**
     * Get fnFactorcorreccao
     *
     * @return string 
     */
    public function getFnFactorcorreccao()
    {
        return $this->fnFactorcorreccao;
    }

    /**
     * Set fnIdMetodo
     *
     * @param integer $fnIdMetodo
     * @return TModelosparametro
     */
    public function setFnIdMetodo($fnIdMetodo)
    {
        $this->fnIdMetodo = $fnIdMetodo;

        return $this;
    }

    /**
     * Get fnIdMetodo
     *
     * @return integer 
     */
    public function getFnIdMetodo()
    {
        return $this->fnIdMetodo;
    }

    /**
     * Set fnIdTecnica
     *
     * @param integer $fnIdTecnica
     * @return TModelosparametro
     */
    public function setFnIdTecnica($fnIdTecnica)
    {
        $this->fnIdTecnica = $fnIdTecnica;

        return $this;
    }

    /**
     * Get fnIdTecnica
     *
     * @return integer 
     */
    public function getFnIdTecnica()
    {
        return $this->fnIdTecnica;
    }

    /**
     * Set fnIdAreaensaio
     *
     * @param integer $fnIdAreaensaio
     * @return TModelosparametro
     */
    public function setFnIdAreaensaio($fnIdAreaensaio)
    {
        $this->fnIdAreaensaio = $fnIdAreaensaio;

        return $this;
    }

    /**
     * Get fnIdAreaensaio
     *
     * @return integer 
     */
    public function getFnIdAreaensaio()
    {
        return $this->fnIdAreaensaio;
    }

    /**
     * Set fnNrdiasparaexecucao
     *
     * @param boolean $fnNrdiasparaexecucao
     * @return TModelosparametro
     */
    public function setFnNrdiasparaexecucao($fnNrdiasparaexecucao)
    {
        $this->fnNrdiasparaexecucao = $fnNrdiasparaexecucao;

        return $this;
    }

    /**
     * Get fnNrdiasparaexecucao
     *
     * @return boolean 
     */
    public function getFnNrdiasparaexecucao()
    {
        return $this->fnNrdiasparaexecucao;
    }

    /**
     * Set fnIdModeloresultado
     *
     * @param integer $fnIdModeloresultado
     * @return TModelosparametro
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
     * Set fbAcreditado
     *
     * @param boolean $fbAcreditado
     * @return TModelosparametro
     */
    public function setFbAcreditado($fbAcreditado)
    {
        $this->fbAcreditado = $fbAcreditado;

        return $this;
    }

    /**
     * Get fbAcreditado
     *
     * @return boolean 
     */
    public function getFbAcreditado()
    {
        return $this->fbAcreditado;
    }

    /**
     * Set fnIdFrasco
     *
     * @param integer $fnIdFrasco
     * @return TModelosparametro
     */
    public function setFnIdFrasco($fnIdFrasco)
    {
        $this->fnIdFrasco = $fnIdFrasco;

        return $this;
    }

    /**
     * Get fnIdFrasco
     *
     * @return integer 
     */
    public function getFnIdFrasco()
    {
        return $this->fnIdFrasco;
    }

    /**
     * Set fnVolumeminimo
     *
     * @param integer $fnVolumeminimo
     * @return TModelosparametro
     */
    public function setFnVolumeminimo($fnVolumeminimo)
    {
        $this->fnVolumeminimo = $fnVolumeminimo;

        return $this;
    }

    /**
     * Get fnVolumeminimo
     *
     * @return integer 
     */
    public function getFnVolumeminimo()
    {
        return $this->fnVolumeminimo;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TModelosparametro
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
     * Get fnId
     *
     * @return integer 
     */
    public function getFnId()
    {
        return $this->fnId;
    }
}
