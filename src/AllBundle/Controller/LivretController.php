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
use AllBundle\Model\Livret;

class LivretController extends Controller
{
    /**
     * @Route("/livret")
     */
    public function livretAction()
    {
        $livret = new Livret();
        $livret->setLabel("LivrEthique");
        $livret->setSolde("1240");
        $livret->setIdHistoriqueLivret("1");
        $livret->setDateOuverture("30/10/2017");
        $livret->setTauxInteret("0,75%");
        $livret->setIsEthic(true);

        $historique = [
            [
                "label"   =>  "Loyer novembre",
                "solde"   =>  "650€",
                "debiteur"=>  "Agence immo 34",
                "date"   =>  "02/02/2017"
            ],
            [
                "label"   =>  "Carrefour triffontaine",
                "solde"   =>  "54€",
                "debiteur"=>  "Carrefour",
                "date"   =>  "02/03/2017"
            ],
            [
                "label"   =>  "Castorama saint jean de vedas",
                "solde"   =>  "5,50€",
                "debiteur"=>  "Castorama",
                "date"    =>  "07/03/2017"
            ],
            [
                "label"   =>  "Salaire mois de novembre 2017",
                "credit"  =>  "1250€",
                "crediteur"=> "Disko",
                "date"    =>  "01/03/2017"
            ],
            [
                "label"   =>  "Aide pour le logement",
                "credit"  =>  "650€",
                "crediteur"=> "CAF",
                "date"    =>  "02/03/2017"
            ],
            [
                "label"   =>  "Tabac montpellier",
                "solde"   =>  "7,20€",
                "debiteur"=>  "tabac hopitaux facultées",
                "date"    =>  "10/03/2017"
            ],
        ];

        return $this->render('All/livret/livret.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'historique' => $historique,
        ]);

    }

}