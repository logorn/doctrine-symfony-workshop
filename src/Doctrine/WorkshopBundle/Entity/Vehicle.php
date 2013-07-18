<?php

namespace Doctrine\WorkshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("vehicle")
 */
class Vehicle
{
    /** @ORM\Column(type="integer") @ORM\Id @ORM\GeneratedValue **/
    protected $id;
    /** @ORM\Column(type="string") **/
    protected $offer;
    /** @ORM\Column(type="integer") **/
    protected $price;

    /** @ORM\Column(type="datetime") */
    protected $until;

    /**
     * @ORM\ManyToOne(targetEntity="Brand")
     */
    protected $brand;

    public function __construct()
    {
        $this->until = new \DateTime("+2 days");
    }

    public function getId()
    {
        return $this->id;
    }

    public function getOffer()
    {
        return $this->offer;
    }

    public function setOffer($offer)
    {
        $this->offer = $offer;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setUntil(\DateTime $until)
    {
        $this->until = $until;
    }

    public function getUntil()
    {
        return $this->until;
    }
    
    /**
     * Get brand.
     *
     * @return brand.
     */
    public function getBrand()
    {
        return $this->brand;
    }
    
    /**
     * Set brand.
     *
     * @param brand the value to set.
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}

