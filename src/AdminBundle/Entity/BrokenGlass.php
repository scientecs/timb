<?php

/**
 * BrokenGlass Entity
 *
 * PHP version 5.3
 *
 * @package    AdminBundle\Entity
 * @author     Yevhen Hryshatkin <scientecs.dev@gmail.com>
 * @copyright  2015-2016 scientecs. All rights reserved.
 */

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use AdminBundle\Entity\OrderGlass;

/**
 * BrokenGlass
 *
 * @ORM\Table(name="broken_glass")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\BrokenGlassRepository")
 */
class BrokenGlass
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
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var float
     * 
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     * 
     * @ORM\Column(name="url_image", type="string")
     */
    private $urlImage;

    /**
     * @ORM\ManyToMany(targetEntity="OrderGlass", mappedBy="brokenGlasses")
     */
    protected $orders;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new ArrayCollection();
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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return BrokenGlass
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
     * Set price
     *
     * @param string $price
     *
     * @return BrokenGlass
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return BrokenGlass
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
     * Set urlImage
     *
     * @param string $urlImage
     *
     * @return BrokenGlass
     */
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    /**
     * Get urlImage
     *
     * @return string 
     */
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    /**
     * Add orders
     *
     * @param OrderGlass $orders
     *
     * @return BrokenGlass
     */
    public function addOrder(OrderGlass $orders)
    {
        $this->orders[] = $orders;

        return $this;
    }

    /**
     * Remove orders
     *
     * @param OrderGlass $orders
     */
    public function removeOrder(OrderGlass $orders)
    {
        $this->orders->removeElement($orders);
    }

    /**
     * Get orders
     *
     * @return Collection 
     */
    public function getOrders()
    {
        return $this->orders;
    }

}
