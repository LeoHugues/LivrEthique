<?php
/**
 * Created by PhpStorm.
 * user: Nil Auberge
 * Date: 28/11/2017
 * Time: 16:00
 */

namespace AllBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AllBundle\Model\Domaine;

class DomaineController extends Controller
{
    /**
     * @Route("/domaine")
     */
    public function domaineAction()
    {

        return $this->render('All/domaine/domaine.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);

    }

}