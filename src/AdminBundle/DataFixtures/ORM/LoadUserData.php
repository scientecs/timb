<?php

namespace AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AdminBundle\Entity\User;

/**
 * Load fixtures for User
 */
class LoadUserData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setName('admin');
        $admin->setEmail('scientecs.dev@gmail.com');
        $admin->setUsername('admin');
        $admin->setPassword('1');
        $admin->addRole('ROLE_SONATA_ADMIN');
        $admin->setEnabled(true);
        $admin->setPlainPassword('1');

        $manager->persist($admin);

        $manager->flush();
    }

    public function getOrder()
    {
        return 15;
    }

}
