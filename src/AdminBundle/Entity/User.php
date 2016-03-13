<?php

namespace AdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use AdminBundle\Entity\OrderGlass;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="so_name", type="string", length=255, nullable=true)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="patronimic", type="string", length=255, nullable=true)
     */
    private $patronimic;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="birth_day", type="date", nullable=true)
     */
    private $birthDay;

    /**
     * @var string
     *
     * @ORM\Column(name="notification_time", type="string", length=1, nullable=true)
     */
    private $notificationTime;

//    /**
//     * @ORM\ManyToMany(targetEntity="Group", inversedBy="users")
//     * @ORM\JoinTable(name="users_to_group",)
//     */
//    protected $groups;

    /**
     * @ORM\OneToMany(targetEntity="OrderGlass", mappedBy="user")
     */
    protected $ordersGlass;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set soName
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get soName
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set patronimic
     *
     * @param string $patronimic
     * @return User
     */
    public function setPatronimic($patronimic)
    {
        $this->patronimic = $patronimic;

        return $this;
    }

    /**
     * Get patronimic
     *
     * @return string 
     */
    public function getPatronimic()
    {
        return $this->patronimic;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set birthDay
     *
     * @param \DateTime $birthDay
     * @return User
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;

        return $this;
    }

    /**
     * Get birthDay
     *
     * @return \DateTime 
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * Set notificationTime
     *
     * @param string $notificationTime
     * @return User
     */
    public function setNotificationTime($notificationTime)
    {
        $this->notificationTime = $notificationTime;

        return $this;
    }

    /**
     * Get notificationTime
     *
     * @return string 
     */
    public function getNotificationTime()
    {
        return $this->notificationTime;
    }

    /**
     * Add ordersGlass
     *
     * @param \AdminBundle\Entity\OrderGlass $ordersGlass
     * @return User
     */
    public function addOrdersGlass(\AdminBundle\Entity\OrderGlass $ordersGlass)
    {
        $this->ordersGlass[] = $ordersGlass;

        return $this;
    }

    /**
     * Remove ordersGlass
     *
     * @param \AdminBundle\Entity\OrderGlass $ordersGlass
     */
    public function removeOrdersGlass(\AdminBundle\Entity\OrderGlass $ordersGlass)
    {
        $this->ordersGlass->removeElement($ordersGlass);
    }

    /**
     * Get ordersGlass
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdersGlass()
    {
        return $this->ordersGlass;
    }

}
