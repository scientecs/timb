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
use AdminBundle\Entity\Alcogol;

/**
 * AlcogolCategory
 *
 * @ORM\Table(name="alcogol_category")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\AlcogolCategoryRepository")
 */
class AlcogolCategory
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Alcogol", mappedBy="AlcogolCategories")
     */
    private $alcogol;

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
     * Constructor
     */
    public function __construct()
    {
        $this->alcogol = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return AlcogolCategory
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
     * Add alcogol
     *
     * @param Alcogol $alcogol
     *
     * @return AlcogolCategory
     */
    public function addAlcogol(Alcogol $alcogol)
    {
        $this->alcogol[] = $alcogol;

        return $this;
    }

    /**
     * Remove alcogol
     *
     * @param Alcogol $alcogol
     */
    public function removeAlcogol(Alcogol $alcogol)
    {
        $this->alcogol->removeElement($alcogol);
    }

    /**
     * Get alcogol
     *
     * @return Collection 
     */
    public function getAlcogol()
    {
        return $this->alcogol;
    }

}
