<?php

/**
 * Alcohol Controller
 *
 * PHP version 5.3
 *
 * @package    AdminBundle\Entity
 * @author     Yevhen Hryshatkin <scientecs.dev@gmail.com>
 * @copyright  2015-2016 scientecs. All rights reserved.
 */

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
