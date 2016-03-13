<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of IndexController
 */
class IndexController extends Controller {
    
    /**
     * Action for render homepage
     * 
     */
    public function indexAction() {
        
        return $this->render('SiteBundle:Index:index.html.twig');
    }
}
