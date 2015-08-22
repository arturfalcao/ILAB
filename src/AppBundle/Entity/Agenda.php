<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 */
class Agenda
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $descricao;

    /**
     * @var \DateTime
     */
    private $startdatetime;

    /**
     * @var \DateTime
     */
    private $enddatetime;

    /**
     * @var boolean
     */
    private $alldayevent;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $bgcolor;

    /**
     * @var string
     */
    private $fgcolor;

    /**
     * @var string
     */
    private $cssclass;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set title
     *
     * @param string $title
     * @return Agenda
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Agenda
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set startdatetime
     *
     * @param \DateTime $startdatetime
     * @return Agenda
     */
    public function setStartdatetime($startdatetime)
    {
        $this->startdatetime = $startdatetime;

        return $this;
    }

    /**
     * Get startdatetime
     *
     * @return \DateTime 
     */
    public function getStartdatetime()
    {
        return $this->startdatetime;
    }

    /**
     * Set enddatetime
     *
     * @param \DateTime $enddatetime
     * @return Agenda
     */
    public function setEnddatetime($enddatetime)
    {
        $this->enddatetime = $enddatetime;

        return $this;
    }

    /**
     * Get enddatetime
     *
     * @return \DateTime 
     */
    public function getEnddatetime()
    {
        return $this->enddatetime;
    }

    /**
     * Set alldayevent
     *
     * @param boolean $alldayevent
     * @return Agenda
     */
    public function setAlldayevent($alldayevent)
    {
        $this->alldayevent = $alldayevent;

        return $this;
    }

    /**
     * Get alldayevent
     *
     * @return boolean 
     */
    public function getAlldayevent()
    {
        return $this->alldayevent;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Agenda
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set bgcolor
     *
     * @param string $bgcolor
     * @return Agenda
     */
    public function setBgcolor($bgcolor)
    {
        $this->bgcolor = $bgcolor;

        return $this;
    }

    /**
     * Get bgcolor
     *
     * @return string 
     */
    public function getBgcolor()
    {
        return $this->bgcolor;
    }

    /**
     * Set fgcolor
     *
     * @param string $fgcolor
     * @return Agenda
     */
    public function setFgcolor($fgcolor)
    {
        $this->fgcolor = $fgcolor;

        return $this;
    }

    /**
     * Get fgcolor
     *
     * @return string 
     */
    public function getFgcolor()
    {
        return $this->fgcolor;
    }

    /**
     * Set cssclass
     *
     * @param string $cssclass
     * @return Agenda
     */
    public function setCssclass($cssclass)
    {
        $this->cssclass = $cssclass;

        return $this;
    }

    /**
     * Get cssclass
     *
     * @return string 
     */
    public function getCssclass()
    {
        return $this->cssclass;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
