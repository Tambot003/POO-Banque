<?php
class Compte 
{
    private string $_libelle;
    private float $_soldeInit;
    private string $_devise;
    private Titulaire $_titulaireCompte;
    
    
    public function __construct($libelle, $soldeInit, $devise, Titulaire $titulaireCompte)
    {
        $this->_libelle = $libelle;
        $this->_soldeInit = $soldeInit;
        $this->_devise = $devise;
        $this->_titulaireCompte = $titulaireCompte;
        
        $this->_titulaireCompte->addCompte($this);
    }
    
    public function get_libelle()
    {
        return $this->_libelle;
    }
    
    public function set_libelle($_libelle)
    {
        $this->_libelle = $_libelle;
        
        return $this;
    }
    
   
    public function get_soldeInit()
    {
        return $this->_soldeInit;
    }
    
    public function set_soldeInit($_soldeInit)
    {
        $this->_soldeInit = $_soldeInit;
        
        return $this;
    }
   
    public function get_devise()
    {
        return $this->_devise;
    }
    
    public function set_devise($_devise)
    {
        $this->_devise = $_devise;
        
        return $this;
    }
  
    public function get_titulaireCompte()
    {
        return $this->_titulaireCompte;
    }
    
    public function set_titulaireCompte($_titulaireCompte)
    {
        $this->_titulaireCompte = $_titulaireCompte;
        
        return $this;
    }
  
    public function crediter($montant) 
    {
        //Pour additioner  
        $this->_soldeInit += $montant;
        echo "le compte $this a été crédité de $montant $ </br>";
    }
   
    public function debiter($montant)
    {
       
        $this->_soldeInit -= $montant;

        echo "le compte $this a été débité de $montant $ </br>";
    }
    
    public function virement($montant, Compte $compte) {
        $this->debiter($montant);
        $compte->crediter($montant);

        echo "Le compte $this a viré $montant $ à $compte </br>" ;
    }
    
    public function __toString() {
        return "$this->_libelle($this->_soldeInit $this->_devise)"; 
    }
    
    
}










?>