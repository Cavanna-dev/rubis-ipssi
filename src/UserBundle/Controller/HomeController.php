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
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('UserBundle:User')
                ->findAll();
        dump($users[0]->getAddresses());die;
        return array(
            'users' => $users
        );
    }

}
