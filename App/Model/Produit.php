<?php
    require_once('../App/DataBase/query.php');
    
    class Produit
    {
        private $ref;
        private $image;
        private $libelle;
        private $description;
        private $date_ajout;

        public function __construct($ref,$image,$libelle,$description,$date_ajout)
        {
            $this->ref=$ref;
            $this->image=$image;
            $this->libelle=$libelle;
            $this->description=$description;
            $this->date_ajout=$date_ajout;
        }
        
        public function getRef()
        {
            return $this->ref;
        }

        public function getImage()
        {
            return $this->$image;
        }
        
        public function getLibelle()
        {
            return $this->libelle;
        }
        
        public function getDescription()
        {
            return $this->description;
        }
        
        public function add()
        {
            return input("insert into Produit values('$this->ref','$this->image','$this->libelle','this->description')");
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