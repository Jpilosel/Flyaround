<?php

namespace WCSCoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $nbSeat;


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
     * Set name
     *
     * @param string $name
     * @return Reservation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nbSeat
     *
     * @param integer $nbSeat
     * @return Reservation
     */
    public function setNbSeat($nbSeat)
    {
        $this->nbSeat = $nbSeat;

        return $this;
    }

    /**
     * Get nbSeat
     *
     * @return integer 
     */
    public function getNbSeat()
    {
        return $this->nbSeat;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $passengers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->passengers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add passengers
     *
     * @param \WCSCoavBundle\Entity\User $passengers
     * @return Reservation
     */
    public function addPassenger(\WCSCoavBundle\Entity\User $passengers)
    {
        $this->passengers[] = $passengers;

        return $this;
    }

    /**
     * Remove passengers
     *
     * @param \WCSCoavBundle\Entity\User $passengers
     */
    public function removePassenger(\WCSCoavBundle\Entity\User $passengers)
    {
        $this->passengers->removeElement($passengers);
    }

    /**
     * Get passengers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPassengers()
    {
        return $this->passengers;
    }
    /**
     * @var \WCSCoavBundle\Entity\Flight
     */
    private $flight;


    /**
     * Set flight
     *
     * @param \WCSCoavBundle\Entity\Flight $flight
     * @return Reservation
     */
    public function setFlight(\WCSCoavBundle\Entity\Flight $flight = null)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Get flight
     *
     * @return \WCSCoavBundle\Entity\Flight 
     */
    public function getFlight()
    {
        return $this->flight;
    }
    /**
     * @var \WCSCoavBundle\Entity\Flight
     */
    private $reservation;


    /**
     * Set reservation
     *
     * @param \WCSCoavBundle\Entity\Flight $reservation
     * @return Reservation
     */
    public function setReservation(\WCSCoavBundle\Entity\Flight $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \WCSCoavBundle\Entity\Flight 
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}
