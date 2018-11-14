<?php
    require_once('../App/DataBase/query.php');
    class Client
    {
        private $login;
        private $motDePAsse;
        private $nom;
        private $prenom;
        private $email;
        private $date_naissance;
        private $date_inscription ;
        
        public function __construct($login,$motDePasse,$nom,$prenom,$email,$date_naissance)
        {
            $this->login=$login;
            $this->motDePAsse=$motDePasse;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->email=$email;
            $this->date_naissance=$date_naissance;
            $this->date_inscription=(new \DateTime())->format('Y-m-d');
        }
        
        public function getLogin()
        {
            return $this->login;   
        }
        
        public function setLogin($login)
        {
            $this->login=$login;
        }
        
        public function getMotDePasse()
        {
            return $this->motDePAsse;
        }
        
        public function setMotDePasse($motDePAsse)
        {
            $this->motDePAsse=$motDePAsse;
        }
        
        public function getNom()
        {
            return $this->nom;
        }
        
        public function setNom($nom)
        {
            $this->nom=$nom;
        }
        
        public function getPrenom()
        {
            return $this->prenom;    
        }
        
        public function setPrenom($prenom)
        {
            $this->prenom=$prenom;    
        }
        
        public function getEmail()
        {
            return $this->email;
        }
        
        public function setEmail($email)
        {
            $this->email=$email;
        }
        
        public function add()
        {
            return input("insert into client values('$this->login','$this->motDePAsse','$this->nom','$this->prenom','$this->email','$this->date_naissance','$this->date_inscription')");
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