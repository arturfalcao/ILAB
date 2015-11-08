<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 *
 * @ORM\Table(name="agenda")
 * @ORM\Entity
 */
class Agenda
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Morada", type="text", nullable=true)
     */
    private $morada;

    /**
     * @var string
     *
     * @ORM\Column(name="Descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDatetime", type="datetime", nullable=true)
     */
    private $startdatetime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDatetime", type="datetime", nullable=true)
     */
    private $enddatetime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allDay", type="boolean", nullable=true)
     */
    private $allDay;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="bgColor", type="text", nullable=true)
     */
    private $bgcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="fgColor", type="text", nullable=true)
     */
    private $fgcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="cssClass", type="text", nullable=true)
     */
    private $cssclass;






    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

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
    public function setAllDay($allDay)
    {
        $this->allDay = $allDay;

        return $this;
    }

    /**
     * Get alldayevent
     *
     * @return boolean 
     */
    public function getAllDay()
    {
        return $this->allDay;
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
     * Set morada
     *
     * @param string $morada
     * @return Agenda
     */
    public function setMorada($morada)
    {
        $this->morada = $morada;

        return $this;
    }

    /**
     * Get morada
     *
     * @return string 
     */
    public function getMorada()
    {
        return $this->morada;
    }
}
