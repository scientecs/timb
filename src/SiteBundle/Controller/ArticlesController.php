<?php

/**
 * ArticlePage Controller
 *
 * PHP version 5.3
 *
 * @package    SiteBundle\Controller
 * @author     Yevhen Hryshatkin <scientecs.dev@gmail.com>
 * @copyright  2015-2016 scientecs. All rights reserved.
 */

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class Articles
 */
class ArticlesController extends Controller
{

    /**
     * Method for render articles
     */
    public function indexAction($page)
    {

        $articles = $this->get('articles_handler')->getArticles();

        $paginator = $this->get('knp_paginator');

        $articles = $paginator->paginate(
                $articles, $page, 2
        );

        return $this->render('SiteBundle:Articles:articles.html.twig', array('articles' => $articles));
    }

}
