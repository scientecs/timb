<?php

/**
 * Settings Admin
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

/**
 * SettingsAdmin
 */
class SettingsAdmin extends BaseAdmin
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
                ->add('settingKey', 'text', array(
                    'label' => 'Ключ'
                        )
                )
                ->add('value', 'text', array(
                    'label' => 'Значение'
                        )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('name', null, array(
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
                ->add('settingKey', 'text', array(
                    'label' => 'Ключ'
                        )
                )
                ->add('value', 'text', array(
                    'label' => 'Значение'
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
