<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AlcoholController
 *
 * @author scientecs
 */
class AlcoholController {

    /**
     * Action for render homepage
     * 
     */
    public function alcoholAction() {

        return $this->render('SiteBundle:Alcohol:alcohol.html.twig');
    }

}
