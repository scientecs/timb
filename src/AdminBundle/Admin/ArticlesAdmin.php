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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use SiteBundle\Handler\ArticlesHandler;

/**
 * ArticlesAdmin
 */
class ArticlesAdmin extends BaseAdmin
{

    /**
     * handler
     *
     * @var ArticlesHandler
     */
    private $handler;

    /**
     * Set handler
     *
     * @param ArticlesHandler $handler
     */
    public function setHandler(ArticlesHandler $handler)
    {
        $this->handler = $handler;
    }

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
                ->add('shortDescription', TextareaType::class, array(
                    'label' => 'Краткое описание'
                        )
                )
                ->add('description', TextareaType::class, array(
                    'label' => 'Описание'
                        )
                )
                ->add('slug', 'text', array(
                    'label' => 'Slug'
                        )
                )
                ->add('publishedDate', 'date', array(
                    'label' => 'Дата публикации'
                        )
                )
                ->add('file', FileType::class, array(
                    'label' => 'Файл',
                    'required' => false
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
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'edit' => array(),
                        'delete' => array()
                    ),
                    'label' => 'Действия'
                        )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function create($object)
    {
        $object = parent::create($object);

        $uniqueId = $this->request->query->get('uniqid');
        $file = $this->request->files->get($uniqueId)['file'];

        if (null !== $object->getFile()) {
            $object = $this->handler->saveImage($object, $file);
        }

        return $object;
    }

    /**
     * {@inheritdoc}
     */
    public function update($object)
    {
        $object = parent::update($object);

        $uniqueId = $this->request->query->get('uniqid');
        $file = $this->request->files->get($uniqueId)['file'];

        if (null !== $object->getFile()) {
            $object = $this->handler->saveImage($object, $file);
        }

        return $object;
    }

}
