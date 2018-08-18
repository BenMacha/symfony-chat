<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Api controller.
 *
 * @Route("api")
 */
class ApiController extends Controller
{
    /**
     * @Route("/userlist")
     */
    public function indexAction(EntityManagerInterface $em)
    {

        $users = $em->getRepository(User::class)->all();

        return new JsonResponse($users);

    }
}
