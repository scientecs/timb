<?php

/**
 * Company Entity
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
use AdminBundle\Entity\Banks;
use AdminBundle\Entity\BrokenGlass;
use AdminBundle\Entity\OrderGlassStatus;
use AdminBundle\Entity\Company;

/**
 * OrderGlass
 *
 * @ORM\Table(name="order_glass")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\OrderGlassRepository")
 */
class OrderGlass
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
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var time
     * 
     * @ORM\Column(name="time", type="string")
     */
    private $time;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_notification", type="boolean", nullable=true)
     */
    private $isNotification;

    /**
     * @var float
     *
     * @ORM\Column(name="profit_alcogol", type="decimal", nullable=true)
     */
    private $profitAlcogol;

    /**
     * @var float
     *
     * @ORM\Column(name="profit_banks", type="decimal", nullable=true)
     */
    private $profitBanks;

    /**
     * @var float
     *
     * @ORM\Column(name="profit_broken_glasess", type="decimal", nullable=true)
     */
    private $profitBrokenGlasses;

    /**
     * @var float
     *
     * @ORM\Column(name="total_profit", type="decimal")
     */
    private $totalProfit;

    /**
     * @var integer
     *
     * @ORM\Column(name="count_alcogol", type="integer", nullable=true)
     */
    private $countAlcogol;

    /**
     * @var integer
     *
     * @ORM\Column(name="count_banks", type="integer", nullable=true)
     */
    private $countBanks;

    /**
     * @var decimal
     *
     * @ORM\Column(name="weight_broken_glasses", type="decimal", nullable=true)
     */
    private $weightBrokenGlasses;

    /**
     * @ORM\ManyToOne(targetEntity="OrderGlassStatus")
     * @ORM\JoinColumn(name="order_glass_status_id", referencedColumnName="id")
     */
    protected $orderStatus;

    /**
     * @ORM\ManyToMany(targetEntity="Alcogol", inversedBy="orders")
     */
    protected $alcogol;

    /**
     * @ORM\ManyToMany(targetEntity="Banks", inversedBy="orders")
     */
    protected $banks;

    /**
     * @ORM\ManyToMany(targetEntity="BrokenGlass", inversedBy="orders")
     */
    protected $brokenGlass;

    /**
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    protected $company;

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
        $this->banks = new ArrayCollection();
        $this->brokenGlasses = new ArrayCollection();
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return OrderGlass
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return OrderGlass
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set isNotification
     *
     * @param boolean $isNotification
     *
     * @return OrderGlass
     */
    public function setIsNotification($isNotification)
    {
        $this->isNotification = $isNotification;

        return $this;
    }

    /**
     * Get isNotification
     *
     * @return boolean 
     */
    public function getIsNotification()
    {
        return $this->isNotification;
    }

    /**
     * Set profitAlcogol
     *
     * @param string $profitAlcogol
     *
     * @return OrderGlass
     */
    public function setProfitAlcogol($profitAlcogol)
    {
        $this->profitAlcogol = $profitAlcogol;

        return $this;
    }

    /**
     * Get profitAlcogol
     *
     * @return string 
     */
    public function getProfitAlcogol()
    {
        return $this->profitAlcogol;
    }

    /**
     * Set profitBanks
     *
     * @param string $profitBanks
     *
     * @return OrderGlass
     */
    public function setProfitBanks($profitBanks)
    {
        $this->profitBanks = $profitBanks;

        return $this;
    }

    /**
     * Get profitBanks
     *
     * @return string 
     */
    public function getProfitBanks()
    {
        return $this->profitBanks;
    }

    /**
     * Set profitBrokenGlasses
     *
     * @param string $profitBrokenGlasses
     *
     * @return OrderGlass
     */
    public function setProfitBrokenGlasses($profitBrokenGlasses)
    {
        $this->profitBrokenGlasses = $profitBrokenGlasses;

        return $this;
    }

    /**
     * Get profitBrokenGlasses
     *
     * @return string 
     */
    public function getProfitBrokenGlasses()
    {
        return $this->profitBrokenGlasses;
    }

    /**
     * Set totalProfit
     *
     * @param string $totalProfit
     *
     * @return OrderGlass
     */
    public function setTotalProfit($totalProfit)
    {
        $this->totalProfit = $totalProfit;

        return $this;
    }

    /**
     * Get totalProfit
     *
     * @return string 
     */
    public function getTotalProfit()
    {
        return $this->totalProfit;
    }

    /**
     * Set countAlcogol
     *
     * @param integer $countAlcogol
     *
     * @return OrderGlass
     */
    public function setCountAlcogol($countAlcogol)
    {
        $this->countAlcogol = $countAlcogol;

        return $this;
    }

    /**
     * Get countAlcogol
     *
     * @return integer 
     */
    public function getCountAlcogol()
    {
        return $this->countAlcogol;
    }

    /**
     * Set countBanks
     *
     * @param integer $countBanks
     *
     * @return OrderGlass
     */
    public function setCountBanks($countBanks)
    {
        $this->countBanks = $countBanks;

        return $this;
    }

    /**
     * Get countBanks
     *
     * @return integer 
     */
    public function getCountBanks()
    {
        return $this->countBanks;
    }

    /**
     * Set weightBrokenGlasses
     *
     * @param string $weightBrokenGlasses
     *
     * @return OrderGlass
     */
    public function setWeightBrokenGlasses($weightBrokenGlasses)
    {
        $this->weightBrokenGlasses = $weightBrokenGlasses;

        return $this;
    }

    /**
     * Get weightBrokenGlasses
     *
     * @return string 
     */
    public function getWeightBrokenGlasses()
    {
        return $this->weightBrokenGlasses;
    }

    /**
     * Set orderStatus
     *
     * @param OrderGlassStatus $orderStatus
     *
     * @return OrderGlass
     */
    public function setOrderStatus(OrderGlassStatus $orderStatus = null)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return OrderGlassStatus 
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Add alcogol
     *
     * @param Alcogol $alcogol
     *
     * @return OrderGlass
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

    /**
     * Add banks
     *
     * @param Banks $banks
     *
     * @return OrderGlass
     */
    public function addBank(Banks $banks)
    {
        $this->banks[] = $banks;

        return $this;
    }

    /**
     * Remove banks
     *
     * @param Banks $banks
     */
    public function removeBank(Banks $banks)
    {
        $this->banks->removeElement($banks);
    }

    /**
     * Get banks
     *
     * @return Collection 
     */
    public function getBanks()
    {
        return $this->banks;
    }

    /**
     * Add brokenGlass
     *
     * @param BrokenGlass $brokenGlass
     *
     * @return OrderGlass
     */
    public function addBrokenGlass(BrokenGlass $brokenGlass)
    {
        $this->brokenGlass[] = $brokenGlass;

        return $this;
    }

    /**
     * Remove brokenGlass
     *
     * @param BrokenGlass $brokenGlass
     */
    public function removeBrokenGlass(BrokenGlass $brokenGlass)
    {
        $this->brokenGlass->removeElement($brokenGlass);
    }

    /**
     * Get brokenGlass
     *
     * @return Collection 
     */
    public function getBrokenGlass()
    {
        return $this->brokenGlass;
    }

    /**
     * Set company
     *
     * @param Company $company
     *
     * @return OrderGlass
     */
    public function setCompany(Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return Company 
     */
    public function getCompany()
    {
        return $this->company;
    }

}
