<?php

/**
 * User Admin
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

/**
 * UserAdmin
 */
class UserAdmin extends BaseAdmin
{

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('name', null, array(
                    'label' => 'Имя'
                        )
                )
                ->add('surname', null, array(
                    'label' => 'Фамилия'
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
                ->add('patronimic', 'text', array(
                    'label' => 'Отчество'
                        )
                )
                ->add('soName', 'text', array(
                    'label' => 'Фамилия'
                        )
                )
                ->add('phone', 'text', array(
                    'label' => 'Телефон'
                        )
                )
                ->add('birthDay', 'text', array(
                    'label' => 'Дата рождения'
                        )
                )
                ->add('email', 'text', array(
                    'label' => 'Email'
                        )
                )
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'delete' => array()
                    ),
                    'label' => 'Действия'
                        )
        );
    }

}
