<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AlcoholController
 */
class AlcoholController extends Controller
{
    /**
     * Action for render homepage
     */
    public function indexAction()
    {
       return $this->render('SiteBundle:Alcohol:alcohol.html.twig');
    }

}
