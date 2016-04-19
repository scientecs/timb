<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ArticlePageController
 */
class ArticlePageController extends Controller
{

    /**
     * Method for render article page
     */
    public function indexAction($slug)
    {
        $article = $this->get('articles_handler')->getArticleBySlug($slug);

        return $this->render('SiteBundle:Articles:articlePage.html.twig', array('article' => $article));
    }

}
