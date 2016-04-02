<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TNaoconformcfgcliente
 */
class TNaoconformcfgcliente
{
    /**
     * @var boolean
     */
    private $fbPorfax;

    /**
     * @var boolean
     */
    private $fbPoremail;

    /**
     * @var boolean
     */
    private $fbGerarpdf;

    /**
     * @var string
     */
    private $ftPastadepdfs;

    /**
     * @var string
     */
    private $ftEmaildestino;

    /**
     * @var string
     */
    private $ftObservacao;

    /**
     * @var integer
     */
    private $fnIdCliente;


    /**
     * Set fbPorfax
     *
     * @param boolean $fbPorfax
     * @return TNaoconformcfgcliente
     */
    public function setFbPorfax($fbPorfax)
    {
        $this->fbPorfax = $fbPorfax;

        return $this;
    }

    /**
     * Get fbPorfax
     *
     * @return boolean 
     */
    public function getFbPorfax()
    {
        return $this->fbPorfax;
    }

    /**
     * Set fbPoremail
     *
     * @param boolean $fbPoremail
     * @return TNaoconformcfgcliente
     */
    public function setFbPoremail($fbPoremail)
    {
        $this->fbPoremail = $fbPoremail;

        return $this;
    }

    /**
     * Get fbPoremail
     *
     * @return boolean 
     */
    public function getFbPoremail()
    {
        return $this->fbPoremail;
    }

    /**
     * Set fbGerarpdf
     *
     * @param boolean $fbGerarpdf
     * @return TNaoconformcfgcliente
     */
    public function setFbGerarpdf($fbGerarpdf)
    {
        $this->fbGerarpdf = $fbGerarpdf;

        return $this;
    }

    /**
     * Get fbGerarpdf
     *
     * @return boolean 
     */
    public function getFbGerarpdf()
    {
        return $this->fbGerarpdf;
    }

    /**
     * Set ftPastadepdfs
     *
     * @param string $ftPastadepdfs
     * @return TNaoconformcfgcliente
     */
    public function setFtPastadepdfs($ftPastadepdfs)
    {
        $this->ftPastadepdfs = $ftPastadepdfs;

        return $this;
    }

    /**
     * Get ftPastadepdfs
     *
     * @return string 
     */
    public function getFtPastadepdfs()
    {
        return $this->ftPastadepdfs;
    }

    /**
     * Set ftEmaildestino
     *
     * @param string $ftEmaildestino
     * @return TNaoconformcfgcliente
     */
    public function setFtEmaildestino($ftEmaildestino)
    {
        $this->ftEmaildestino = $ftEmaildestino;

        return $this;
    }

    /**
     * Get ftEmaildestino
     *
     * @return string 
     */
    public function getFtEmaildestino()
    {
        return $this->ftEmaildestino;
    }

    /**
     * Set ftObservacao
     *
     * @param string $ftObservacao
     * @return TNaoconformcfgcliente
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
     * Get fnIdCliente
     *
     * @return integer 
     */
    public function getFnIdCliente()
    {
        return $this->fnIdCliente;
    }
}
