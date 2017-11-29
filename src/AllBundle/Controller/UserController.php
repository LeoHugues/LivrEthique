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


class UserController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        if($request->isMethod('POST')) {
            $user = new User();
            $user->setNom("Jean");
            $user->setPrenom("Jean");

            $user->setLogin($request->request->get('login'));
            $user->setPassword($request->request->get('password'));

            $user->setAdresse("1 rue ici");
            $user->setVille("Montpellier");
            $user->setCp("34000");
            $user->setDateNaissance("01/01/1990");
            $user->setIdLivret("1");

            $this->connectedAction();
        }
        return $this->render('All/user/login.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR
        ]);

    }

    /**
     * @Route("/connected")
     */
    public function connectedAction(){
        return $this->render('All/user/connected.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR
        ]);
    }

}