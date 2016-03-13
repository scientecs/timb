<?php

namespace AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AdminBundle\Entity\Alcogol;

class LoadAlcogolData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $alcogol = new Alcogol();
        $alcogol->setName('Jack Denials');
        $alcogol->addAlcogolCategory($this->getReference('Whisky'));
        $alcogol->setPrice('150');
        $alcogol->setDescription('Для молодежи');
        $alcogol->setUrlImage('url');
        $manager->persist($alcogol);

        $alcogol = new Alcogol();
        $alcogol->setName('Мускат');
        $alcogol->addAlcogolCategory($this->getReference('Wine'));
        $alcogol->setPrice('40');
        $alcogol->setDescription('Для девушек');
        $alcogol->setUrlImage('url');
        $manager->persist($alcogol);

        $alcogol = new Alcogol();
        $alcogol->setName('Tuborg');
        $alcogol->addAlcogolCategory($this->getReference('Beer'));
        $alcogol->setPrice('10');
        $alcogol->setDescription('Легкое пиво');
        $alcogol->setUrlImage('url');
        $manager->persist($alcogol);

        $alcogol = new Alcogol();
        $alcogol->setName('Советское шампанское');
        $alcogol->addAlcogolCategory($this->getReference('Champagne'));
        $alcogol->setPrice('40');
        $alcogol->setDescription('Для баб');
        $alcogol->setUrlImage('url');
        $manager->persist($alcogol);

        $alcogol = new Alcogol();
        $alcogol->setName('Kings Bridge');
        $alcogol->addAlcogolCategory($this->getReference('LittleAlcogol'));
        $alcogol->setPrice('25');
        $alcogol->setDescription('Для молодежи');
        $alcogol->setUrlImage('url');
        $manager->persist($alcogol);


        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }

}
