<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TNaoconformcfgemail
 */
class TNaoconformcfgemail
{
    /**
     * @var string
     */
    private $ftSmtpip;

    /**
     * @var string
     */
    private $ftSmtpporto;

    /**
     * @var string
     */
    private $ftSmtpalias;

    /**
     * @var string
     */
    private $ftSmtplogin;

    /**
     * @var string
     */
    private $ftSmtppassword;

    /**
     * @var string
     */
    private $ftEmailorigem;

    /**
     * @var string
     */
    private $ftSubject;

    /**
     * @var string
     */
    private $ftTexto;

    /**
     * @var integer
     */
    private $fnId;


    /**
     * Set ftSmtpip
     *
     * @param string $ftSmtpip
     * @return TNaoconformcfgemail
     */
    public function setFtSmtpip($ftSmtpip)
    {
        $this->ftSmtpip = $ftSmtpip;

        return $this;
    }

    /**
     * Get ftSmtpip
     *
     * @return string 
     */
    public function getFtSmtpip()
    {
        return $this->ftSmtpip;
    }

    /**
     * Set ftSmtpporto
     *
     * @param string $ftSmtpporto
     * @return TNaoconformcfgemail
     */
    public function setFtSmtpporto($ftSmtpporto)
    {
        $this->ftSmtpporto = $ftSmtpporto;

        return $this;
    }

    /**
     * Get ftSmtpporto
     *
     * @return string 
     */
    public function getFtSmtpporto()
    {
        return $this->ftSmtpporto;
    }

    /**
     * Set ftSmtpalias
     *
     * @param string $ftSmtpalias
     * @return TNaoconformcfgemail
     */
    public function setFtSmtpalias($ftSmtpalias)
    {
        $this->ftSmtpalias = $ftSmtpalias;

        return $this;
    }

    /**
     * Get ftSmtpalias
     *
     * @return string 
     */
    public function getFtSmtpalias()
    {
        return $this->ftSmtpalias;
    }

    /**
     * Set ftSmtplogin
     *
     * @param string $ftSmtplogin
     * @return TNaoconformcfgemail
     */
    public function setFtSmtplogin($ftSmtplogin)
    {
        $this->ftSmtplogin = $ftSmtplogin;

        return $this;
    }

    /**
     * Get ftSmtplogin
     *
     * @return string 
     */
    public function getFtSmtplogin()
    {
        return $this->ftSmtplogin;
    }

    /**
     * Set ftSmtppassword
     *
     * @param string $ftSmtppassword
     * @return TNaoconformcfgemail
     */
    public function setFtSmtppassword($ftSmtppassword)
    {
        $this->ftSmtppassword = $ftSmtppassword;

        return $this;
    }

    /**
     * Get ftSmtppassword
     *
     * @return string 
     */
    public function getFtSmtppassword()
    {
        return $this->ftSmtppassword;
    }

    /**
     * Set ftEmailorigem
     *
     * @param string $ftEmailorigem
     * @return TNaoconformcfgemail
     */
    public function setFtEmailorigem($ftEmailorigem)
    {
        $this->ftEmailorigem = $ftEmailorigem;

        return $this;
    }

    /**
     * Get ftEmailorigem
     *
     * @return string 
     */
    public function getFtEmailorigem()
    {
        return $this->ftEmailorigem;
    }

    /**
     * Set ftSubject
     *
     * @param string $ftSubject
     * @return TNaoconformcfgemail
     */
    public function setFtSubject($ftSubject)
    {
        $this->ftSubject = $ftSubject;

        return $this;
    }

    /**
     * Get ftSubject
     *
     * @return string 
     */
    public function getFtSubject()
    {
        return $this->ftSubject;
    }

    /**
     * Set ftTexto
     *
     * @param string $ftTexto
     * @return TNaoconformcfgemail
     */
    public function setFtTexto($ftTexto)
    {
        $this->ftTexto = $ftTexto;

        return $this;
    }

    /**
     * Get ftTexto
     *
     * @return string 
     */
    public function getFtTexto()
    {
        return $this->ftTexto;
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
