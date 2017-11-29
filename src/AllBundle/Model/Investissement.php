<?php
namespace AllBundle\Model;
/**
 * Created by PhpStorm.
 * user: julien_mathe
 * Date: 28/11/2017
 * Time: 14:59
 */
class Investissement
{
    public $id;
    public $label;
    public $montant;
    public $idEntreprise;
    public $idLivret;

    public function __construct(){
    }
}