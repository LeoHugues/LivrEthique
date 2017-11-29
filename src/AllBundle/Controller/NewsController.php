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
use AllBundle\Model\News;

class NewsController extends Controller
{
    /**
     * @Route("/news")
     */
    public function newsAction()
    {
        //Simulation d'articles
        $newsTab = [];
        $news = new News();
        $news->setTitle("Nouvelle prime pour les entreprises green IT");
        $news->setAddedDate("29/11/2017");
        $news->setNewsCategoryId("divers");
        $news->setContent("En effet, les entreprises vont recevoir à partir du 01/12/2017 une nouvelle prime pour financer les projets ayant pour principe de violer les enfants. Deux fois.");
        array_push($newsTab, $news);

        $news = new News();
        $news->setTitle("2018 en ligne de mire pour Greenpeace");
        $news->setAddedDate("02/11/2017");
        $news->setNewsCategoryId("écologie");
        $news->setContent("Greenpeace annonce un partenariat avec ma bite. Oui oui, ma bite.");
        array_push($newsTab, $news);

        return $this->render('All/news/news.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'newstab' => $newsTab,
        ]);

    }

}