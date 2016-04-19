<?php

/**
 * Articles handler
 *
 * PHP version 5.3
 *
 * @package    AdminBundle\Entity
 * @author     Yevhen Hryshatkin <scientecs.dev@gmail.com>
 * @copyright  2015-2016 scientecs. All rights reserved.
 */

namespace SiteBundle\Handler;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Repository;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Entity\Articles;
use SiteBundle\Handler\AbstractHandler;

/**
 * Class ArticlesHandler
 */
class ArticlesHandler extends AbstractHandler
{

    /**
     * Save file for service
     *
     * @param Image $article
     * @param File $file
     */
    public function saveImage(Articles $article, $file)
    {
        if ($file && $file->getPathName()) {
            $newFileName = uniqid(rand()) . $file->getClientOriginalName();

            $newPath = $this->rootDir . '/../web/uploads/images/';

            if (!is_dir($newPath)) {
                mkdir($newPath, 0777, true);
            }

            move_uploaded_file($file->getPathName(), $newPath . '/' . $newFileName);

            $article->setUrlImage('/uploads/images/' . $newFileName);

            $this->manager->persist($article);
            $this->manager->flush();
        }
    }

    /**
     * Method for get all articles
     */
    public function getArticles()
    {
        $articles = $this->repository->findAll();

        return $articles;
    }

    /**
     * Method for get article by slug
     */
    public function getArticleBySlug($slug)
    {
        return $this->repository
                        ->createQueryBuilder('a')
                        ->where('a.slug = :value')
                        ->setParameter('value', $slug)
                        ->getQuery()
                        ->getOneOrNullResult();
    }

}
