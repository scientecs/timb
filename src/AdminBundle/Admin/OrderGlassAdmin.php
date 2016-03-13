<?php

/**
 * OrderGlass Admin
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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

/**
 * OrderGlassAdmin
 */
class OrderGlassAdmin extends BaseAdmin
{

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('id', 'number', array(
                    'label' => 'ID'
                        )
                )
                ->add('user', EntityType::class, array(
                    'class' => 'AdminBundle:User',
                    'property' => 'name',
                    'label' => 'Пользователь'
                        )
                )
                ->add('date', 'date', array(
                    'label' => 'Дата приема заказа'
                        )
                )
                ->add('time', 'text', array(
                    'label' => 'Время приема заказа'
                        )
                )
                ->add('isNotification', CheckboxType::class, array(
                    'label' => 'Клиент оповещен?'
                        )
                )
                ->add('orderStatus', EntityType::class, array(
                    'class' => 'AdminBundle:OrderGlassStatus',
                    'choice_label' => 'status',
                        )
                )
                ->add('alcogol', EntityType::class, array(
                    'class' => 'AdminBundle:Alcogol',
                    'choice_label' => 'name',
                    'multiple' => true
                        )
                )
                ->add('banks', EntityType::class, array(
                    'class' => 'AdminBundle:Banks',
                    'choice_label' => 'name',
                    'multiple' => true
                        )
                )
                ->add('brokenGlass', EntityType::class, array(
                    'class' => 'AdminBundle:BrokenGlass',
                    'choice_label' => 'name',
                    'multiple' => true
                        )
                )
                ->add('company', EntityType::class, array(
                    'class' => 'AdminBundle:Company',
                    'choice_label' => 'name'
                        )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('date', '', array(
                    'label' => 'Дата приема заказа'
                        )
                )
                ->add('company', null, array(
                    'class' => 'AdminBundle:Company',
                    'choise_label' => 'name'
                        )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('id', 'number', array(
                    'label' => 'ID'
                        )
                )
                ->add('user', EntityType::class, array(
                    'class' => 'AdminBundle:User',
                    'property' => 'name',
                    'label' => 'Пользователь'
                        )
                )
                ->add('date', 'date', array(
                    'label' => 'Дата приема заказа'
                        )
                )
                ->add('time', 'text', array(
                    'label' => 'Время приема заказа'
                        )
                )
                ->add('isNotification', CheckboxType::class, array(
                    'label' => 'Клиент оповещен?'
                        )
                )
                ->add('company', EntityType::class, array(
                    'class' => 'AdminBundle:Company',
                    'choice_label' => 'name'
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
