<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ChatController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render(':chat:index.html.twig');
    }
}
