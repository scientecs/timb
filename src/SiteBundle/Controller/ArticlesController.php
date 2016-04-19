<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
    public function indexAction()
    {
        $articles = $this->get('articles_handler')->getArticles();
        return $this->render('SiteBundle:Articles:articles.html.twig', array('articles' => $articles));
    }

}
