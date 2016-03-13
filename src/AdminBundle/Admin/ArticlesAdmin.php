<?php

/**
 * Articles Admin
 *
 * PHP version 5.3
 *
 * @package    AdminBundle\Entity
 * @author     Yevhen Hryshatkin <scientecs.dev@gmail.com>
 * @copyright  2015-2016 scientecs. All rights reserved.
 */

namespace AdminBundle\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * ArticlesAdmin
 */
class ArticlesAdmin extends BaseAdmin
{

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('title', 'text', array(
                    'label' => 'Заголовок'
                        )
                )
                ->add('shortDescription', 'text', array(
                    'label' => 'Краткое описание'
                        )
                )
                ->add('publishedDate', 'date', array(
                    'label' => 'Дата публикации'
                        )
                )
                ->add('urlImage', 'text', array(
                    'label' => 'Image URL'
                        )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('title', '', array(
                    'label' => 'Заголовок'
                        )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->add('title', 'text', array(
                    'label' => 'Заголовок'
                        )
                )
                ->add('shortDescription', 'text', array(
                    'label' => 'Краткое описание'
                        )
                )
                ->add('description', 'text', array(
                    'label' => 'Описание'
                        )
                )
                ->add('publishedDate', 'date', array(
                    'label' => 'Дата публикации'
                        )
                )
                ->add('slug', 'text', array(
                    'label' => 'Slug'
                        )
                )
                ->add('urlImage', 'text', array(
                    'label' => 'Image URL'
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
