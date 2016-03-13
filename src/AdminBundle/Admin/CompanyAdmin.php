<?php

/**
 * Company Admin
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
 * CompanyAdmin
 */
class CompanyAdmin extends BaseAdmin
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
                ->add('skype', 'text', array(
                    'label' => 'Skype'
                        )
                )
                ->add('email', 'text', array(
                    'label' => 'Email'
                        )
                )
                ->add('phone', 'text', array(
                    'label' => 'Телефон'
                        )
                )
                ->add('latitude', 'number', array(
                    'label' => 'Широта'
                        )
                )
                ->add('longitude', 'number', array(
                    'label' => 'Долгота'
                        )
                )
                ->add('address', 'text', array(
                    'label' => 'Адресс'
                        )
                )
                ->add('timeFrom', 'text', array(
                    'label' => 'Начало рабочего дня'
                        )
                )
                ->add('timeTo', 'text', array(
                    'label' => 'Конец рабочего дня'
                        )
                )
                ->add('iconUrl', 'text', array(
                    'label' => 'Icon url'
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
                ->add('email', 'text', array(
                    'label' => 'Email'
                        )
                )
                ->add('address', 'text', array(
                    'label' => 'Адресс'
                        )
                )
                ->add('phone', 'text', array(
                    'label' => 'Телефон'
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
