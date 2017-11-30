<?php
namespace AllBundle\Model;
/**
 * Created by PhpStorm.
 * user: Nil
 * Date: 28/11/2017
 * Time: 14:31
 */
class Livret
{
    public $id;
    public $label;
    public $solde;
    public $id_historiqueLivret;
    public $dateOuverture;
    public $tauxInteret;
    public $isEthic;
    public $IBAN;
    public $BIC;

    function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getIdHistoriqueLivret()
    {
        return $this->id_historiqueLivret;
    }

    /**
     * @param mixed $id_historiqueLivret
     */
    public function setIdHistoriqueLivret($id_historiqueLivret)
    {
        $this->id_historiqueLivret = $id_historiqueLivret;
    }

    /**
     * @return mixed
     */
    public function getDateOuverture()
    {
        return $this->dateOuverture;
    }

    /**
     * @param mixed $dateOuverture
     */
    public function setDateOuverture($dateOuverture)
    {
        $this->dateOuverture = $dateOuverture;
    }

    /**
     * @return mixed
     */
    public function getTauxInteret()
    {
        return $this->tauxInteret;
    }

    /**
     * @param mixed $tauxInteret
     */
    public function setTauxInteret($tauxInteret)
    {
        $this->tauxInteret = $tauxInteret;
    }

    /**
     * @return mixed
     */
    public function getIsEthic()
    {
        return $this->isEthic;
    }

    /**
     * @param mixed $isEthic
     */
    public function setIsEthic($isEthic)
    {
        $this->isEthic = $isEthic;
    }

    /**
     * @return mixed
     */
    public function getIBAN()
    {
        return $this->IBAN;
    }

    /**
     * @param mixed $IBAN
     */
    public function setIBAN($IBAN)
    {
        $this->IBAN = $IBAN;
    }

    /**
     * @return mixed
     */
    public function getBIC()
    {
        return $this->BIC;
    }

    /**
     * @param mixed $BIC
     */
    public function setBIC($BIC)
    {
        $this->BIC = $BIC;
    }
    
}