<?php

/**
 * Contact Controller
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
 * ContactController
 */
class ContactController extends Controller
{

    /**
     * Method for render contact page
     */
    public function indexAction()
    {
        return $this->render('SiteBundle:Contact:contact.html.twig');
    }

}
