<?php
    
    require_once('../App/DataBase/query.php');
    class Produit
    {
        private $id;
        private $libelle;
        
        public function __construct($id,$libelle)
        {
            $this->id = $id;
            $this->libelle = $libelle;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getLibelle()
        {
            return $this->libelle;
        }
        
        public function add()
        {
            return input("insert into Produit values('$this->id','$this->libelle')");
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

