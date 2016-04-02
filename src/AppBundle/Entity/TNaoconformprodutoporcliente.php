<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TNaoconformprodutoporcliente
 */
class TNaoconformprodutoporcliente
{
    /**
     * @var integer
     */
    private $fnIdCliente;

    /**
     * @var integer
     */
    private $fnIdProduto;


    /**
     * Set fnIdCliente
     *
     * @param integer $fnIdCliente
     * @return TNaoconformprodutoporcliente
     */
    public function setFnIdCliente($fnIdCliente)
    {
        $this->fnIdCliente = $fnIdCliente;

        return $this;
    }

    /**
     * Get fnIdCliente
     *
     * @return integer 
     */
    public function getFnIdCliente()
    {
        return $this->fnIdCliente;
    }

    /**
     * Set fnIdProduto
     *
     * @param integer $fnIdProduto
     * @return TNaoconformprodutoporcliente
     */
    public function setFnIdProduto($fnIdProduto)
    {
        $this->fnIdProduto = $fnIdProduto;

        return $this;
    }

    /**
     * Get fnIdProduto
     *
     * @return integer 
     */
    public function getFnIdProduto()
    {
        return $this->fnIdProduto;
    }
}
