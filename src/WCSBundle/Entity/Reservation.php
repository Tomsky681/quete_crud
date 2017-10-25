<?php

namespace WCSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="WCSBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var int
     *
     * @ORM\Column(name="nbreservedseats", type="smallint")
     */
    private $nbreservedseats;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationdate", type="datetime")
     */
    private $publicationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="passenger", type="string", length=32)
     */
    private $passenger;

    /**
     * @var string
     *
     * @ORM\Column(name="flight", type="string", length=32)
     */
    private $flight;

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
     * Set nbreservedseats
     *
     * @param integer $nbreservedseats
     *
     * @return Reservation
     */
    public function setNbreservedseats($nbreservedseats)
    {
        $this->nbreservedseats = $nbreservedseats;

        return $this;
    }

    /**
     * Get nbreservedseats
     *
     * @return int
     */
    public function getNbreservedseats()
    {
        return $this->nbreservedseats;
    }

    /**
     * Set publicationdate
     *
     * @param \DateTime $publicationdate
     *
     * @return Reservation
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
     * Set passenger
     *
     * @param string $passenger
     *
     * @return Reservation
     */
    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Get passenger
     *
     * @return string
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * Set flight
     *
     * @param string $flight
     *
     * @return Reservation
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Get flight
     *
     * @return string
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Set wasdone
     *
     * @param boolean $wasdone
     *
     * @return Reservation
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

