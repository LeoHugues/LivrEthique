<?php
namespace AllBundle\Model;
/**
 * Created by PhpStorm.
 * user: Nil
 * Date: 28/11/2017
 * Time: 14:31
 */
class HistoriqueLivret
{
    public $idTransaction;
    public $solde;
    public $credit;
    public $debiteur;
    public $crediteur;
    public $label;
    public $reference;
    public $date;

    function __construct()
    {

    }
}