<?php
/**
 * Created by PhpStorm.
 * user: julien_mathe
 * Date: 28/11/2017
 * Time: 16:00
 */

namespace AllBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AllBundle\Model\User;
use AllBundle\Controller\NewsController;


class UserController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        if($request->isMethod('POST')) {


            $this->connectedAction();
        }
        return $this->render('All/user/login.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR
        ]);

    }

    /**
     * @Route("/news")
     */
    public function connectedAction(){
        return $this->render('All/user/connected.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR
        ]);
    }

    /**
     * @Route("/info")
     */
    public function infoAction(){
        $user = new User();
        $user->setNom("Jean");
        $user->setPrenom("Jean");

        $user->setLogin("test");
        $user->setPassword("test");

        $user->setAdresse("1 rue ici");
        $user->setVille("Montpellier");
        $user->setCp("34000");
        $user->setDateNaissance("01/01/1990");
        $user->setIdLivret("1");
        return $this->render('All/user/info.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'user' => $user
        ]);
    }

}