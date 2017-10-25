<?php

namespace WCSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * flight
 *
 * @ORM\Table(name="flight")
 * @ORM\Entity(repositoryClass="WCSBundle\Repository\flightRepository")
 */
class flight
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="departure", type="string", length=32)
     */
    private $departure;

    /**
     * @var string
     *
     * @ORM\Column(name="arrival", type="string", length=32)
     */
    private $arrival;

    /**
     * @var int
     *
     * @ORM\Column(name="nbfreeseats", type="smallint")
     */
    private $nbfreeseats;

    /**
     * @var float
     *
     * @ORM\Column(name="seatprice", type="float")
     */
    private $seatprice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="takeofftime", type="datetime")
     */
    private $takeofftime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationdate", type="datetime")
     */
    private $publicationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="pilot", type="string", length=32)
     */
    private $pilot;

    /**
     * @var string
     *
     * @ORM\Column(name="plane", type="string", length=64)
     */
    private $plane;

    /**
     * @var bool
     *
     * @ORM\Column(name="wasdone", type="boolean")
     */
    private $wasdone;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set departure
     *
     * @param string $departure
     *
     * @return flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     *
     * @return flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set nbfreeseats
     *
     * @param integer $nbfreeseats
     *
     * @return flight
     */
    public function setNbfreeseats($nbfreeseats)
    {
        $this->nbfreeseats = $nbfreeseats;

        return $this;
    }

    /**
     * Get nbfreeseats
     *
     * @return int
     */
    public function getNbfreeseats()
    {
        return $this->nbfreeseats;
    }

    /**
     * Set seatprice
     *
     * @param float $seatprice
     *
     * @return flight
     */
    public function setSeatprice($seatprice)
    {
        $this->seatprice = $seatprice;

        return $this;
    }

    /**
     * Get seatprice
     *
     * @return float
     */
    public function getSeatprice()
    {
        return $this->seatprice;
    }

    /**
     * Set takeofftime
     *
     * @param \DateTime $takeofftime
     *
     * @return flight
     */
    public function setTakeofftime($takeofftime)
    {
        $this->takeofftime = $takeofftime;

        return $this;
    }

    /**
     * Get takeofftime
     *
     * @return \DateTime
     */
    public function getTakeofftime()
    {
        return $this->takeofftime;
    }

    /**
     * Set publicationdate
     *
     * @param \DateTime $publicationdate
     *
     * @return flight
     */
    public function setPublicationdate($publicationdate)
    {
        $this->publicationdate = $publicationdate;

        return $this;
    }

    /**
     * Get publicationdate
     *
     * @return \DateTime
     */
    public function getPublicationdate()
    {
        return $this->publicationdate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return flight
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     *
     * @return flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set plane
     *
     * @param string $plane
     *
     * @return flight
     */
    public function setPlane($plane)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return string
     */
    public function getPlane()
    {
        return $this->plane;
    }

    /**
     * Set wasdone
     *
     * @param boolean $wasdone
     *
     * @return flight
     */
    public function setWasdone($wasdone)
    {
        $this->wasdone = $wasdone;

        return $this;
    }

    /**
     * Get wasdone
     *
     * @return bool
     */
    public function getWasdone()
    {
        return $this->wasdone;
    }
}

