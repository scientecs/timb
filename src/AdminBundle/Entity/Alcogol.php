<?php

/**
 * Alcogol Entity
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
use AdminBundle\Entity\AlcogolCategory;

/**
 * Alcogol
 *
 * @ORM\Table(name="alcogol")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\AlcogolRepository")
 */
class Alcogol
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
     * @ORM\ManyToMany(targetEntity="AlcogolCategory", inversedBy="alcogol")
     * @ORM\JoinTable(name="alcogol_categories")
     */
    private $alcogolCategories;

    /**
     * @ORM\ManyToMany(targetEntity="OrderGlass", mappedBy="alcogol")
     */
    protected $orders;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new ArrayCollection();
        $this->alcogolCategories = new ArrayCollection();
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
     * @return Alcogol
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
     * @return Alcogol
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
     * @return Alcogol
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
     * @return Alcogol
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
     * Add alcogolCategories
     *
     * @param AlcogolCategory $alcogolCategories
     *
     * @return Alcogol
     */
    public function addAlcogolCategory(AlcogolCategory $alcogolCategories)
    {
        $this->alcogolCategories[] = $alcogolCategories;

        return $this;
    }

    /**
     * Remove alcogolCategories
     *
     * @param AlcogolCategory $alcogolCategories
     */
    public function removeAlcogolCategory(AlcogolCategory $alcogolCategories)
    {
        $this->alcogolCategories->removeElement($alcogolCategories);
    }

    /**
     * Get alcogolCategories
     *
     * @return Collection 
     */
    public function getAlcogolCategories()
    {
        return $this->alcogolCategories;
    }

    /**
     * Add orders
     *
     * @param OrderGlass $orders
     *
     * @return Alcogol
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
