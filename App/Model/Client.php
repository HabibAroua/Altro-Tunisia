<?php
    require_once('../App/DataBase/query.php');
    class Client
    {
        private $login;
        private $motDePAsse;
        private $nom;
        private $prenom;
        
        
        public function __construct($login,$motDePasse,$nom,$prenom)
        {
            $this->login=$login;
            $this->motDePAsse=$motDePasse;
            $this->nom=$nom;
            $this->prenom=$prenom;
        }
        
        public function getLogin()
        {
            return $this->login;   
        }
        
        public function getMotDePasse()
        {
            return $this->motDePAsse;
        }
        
        public function getNom()
        {
            return $this->nom;
        }
        
        public function getPrenom()
        {
            return $this->prenom;    
        }
        
        public function add()
        {
            return input("insert into client values('$this->login','$this->motDePAsse','$this->nom','$this->prenom')");
        }
        
        public function update()
        {
            
        }
        
        public function delete()
        {
            
        }
        
        public function allClient()
        {
            
        }
    }

?>