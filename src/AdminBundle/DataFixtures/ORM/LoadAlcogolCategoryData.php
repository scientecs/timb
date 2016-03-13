<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AdminBundle\Entity\AlcogolCategory;

/**
 * Description of LoadAlcogolCategoryData
 *
 * @author scientecs
 */
class LoadAlcogolCategoryData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $categoryWhisky = new AlcogolCategory();
        $categoryWhisky->setName('Виски');
        $manager->persist($categoryWhisky);

        $this->addReference('Whisky', $categoryWhisky);

        $categoryWine = new AlcogolCategory();
        $categoryWine->setName('Вино');
        $manager->persist($categoryWine);

        $this->addReference('Wine', $categoryWine);

        $categoryChampagne = new AlcogolCategory();
        $categoryChampagne->setName('Шампанское');
        $manager->persist($categoryChampagne);

        $this->addReference('Champagne', $categoryChampagne);

        $categoryBeer = new AlcogolCategory();
        $categoryBeer->setName('Пиво');
        $manager->persist($categoryBeer);

        $this->addReference('Beer', $categoryBeer);

        $categoryLittleAlcogol = new AlcogolCategory();
        $categoryLittleAlcogol->setName('Слабоалкоголка');
        $manager->persist($categoryLittleAlcogol);

        $this->addReference('LittleAlcogol', $categoryLittleAlcogol);

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }

}
