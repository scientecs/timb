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

namespace AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

/**
 * AlcogolAdmin
 */
class AlcogolAdmin extends BaseAdmin
{

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('name', 'text', array(
                    'label' => 'Имя'
                        )
                )
                ->add('price', 'number', array(
                    'label' => 'Цена'
                        )
                )
                ->add('description', 'text', array(
                    'label' => 'Описание'
                        )
                )
                ->add('urlImage', 'text', array(
                    'label' => 'Image URL'
                        )
                )
                ->add('alcogolCategories', EntityType::class, array(
                    'class' => 'AdminBundle:AlcogolCategory',
                    'property' => 'name',
                    'label' => 'Категория',
                    'multiple' => true,
                        )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('name', '', array(
                    'label' => 'Имя'
                        )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('name', 'text', array(
                    'label' => 'Имя'
                        )
                )
                ->add('price', 'number', array(
                    'label' => 'Цена'
                        )
                )
                ->add('description', 'text', array(
                    'label' => 'Описание'
                        )
                )
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array(),
                        'delete' => array()
                    ),
                    'label' => 'Действия'
                        )
        );
    }

}
