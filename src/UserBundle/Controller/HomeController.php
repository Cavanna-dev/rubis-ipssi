<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/utilisateur")
 */
class HomeController extends Controller
{

    /**
     * @Route("/accueil")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

}
