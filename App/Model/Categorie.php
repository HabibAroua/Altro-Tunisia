<?php
    
    require_once('../App/DataBase/query.php');
    class Categorie
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
        
        public function update($id)
        {
            return input("update table categorie set libelle=$this->libelle where id=$id");

        }

        public function delete($id)
        {
            return input("delete categorie where id=$id");
        }

        public function allCategorie()
        {
            $res=output("select * from categorie ");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
              $T[$i]=$categorie = array('id'=>$tab[0]."",'libelle'=>$tab[1],);
              $i++;
		 	}
            return $T;
        }
    }

