<?php

/**
 * Abstract handler
 *
 * PHP version 5.3
 *
 * @package    AdminBundle\Entity
 * @author     Yevhen Hryshatkin <scientecs.dev@gmail.com>
 * @copyright  2015-2016 scientecs. All rights reserved.
 */

namespace SiteBundle\Handler;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Repository;

/**
 * AbstractHandler
 */
class AbstractHandler
{

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * @var EntityManager
     */
    protected $manager;

    /**
     * @var string
     */
    protected $entityClass;

    /**
     * Root dir of project
     *
     * @var string
     */
    protected $rootDir;

    /**
     * Constructor.
     *
     * @param string               $entityClass
     * @param EntityManager        $manager
     * @param FormFactoryInterface $formFactory
     */
    public function __construct($entityClass, EntityManager $manager, $kernel)
    {
        $this->manager = $manager;
        $this->repository = $manager->getRepository($entityClass);
        $this->entityClass = $entityClass;
        $this->rootDir = $kernel->getRootDir();
    }

}
