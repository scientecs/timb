<?php

/**
 * Order Glass Status Admin
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
 * OrderGlassStatusAdmin
 *
 * @author scientecs
 */
class OrderGlassStatusAdmin extends BaseAdmin
{

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('status', 'text', array(
                    'label' => 'Статус'
                        )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('status', 'text', array(
                    'label' => 'Статус'
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
