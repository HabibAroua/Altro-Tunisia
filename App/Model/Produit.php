<?php
    require_once('../App/DataBase/query.php');
    
    class Produit
    {
        private $ref;
        private $image;
        private $libelle;
        private $prix;
        private $description;
        private $date_ajout;
        private $id_cat;
        private $login_admin;

        public function __construct($ref,$image,$libelle,$prix,$description,$id_cat,$login_admin)
        {
            $this->ref=$ref;
            $this->image=$image;
            $this->libelle=$libelle;
            $this->prix=$prix;
            $this->description=$description;
            $this->date_ajout=(new \DateTime())->format('Y-m-d');
            $this->id_cat=$id_cat;
            $this->login_admin=$login_admin;
        }
        
        public function getRef()
        {
            return $this->ref;
        }
        
        public function setRef($ref)
        {
            $this->ref=$ref;
        }
        

        public function getImage()
        {
            return $this->$image;
        }
        
        public function setImage($image)
        {
            $this->image=$image;
        }
        
        public function getLibelle()
        {
            return $this->libelle;
        }
        
        public function setLibelle($libelle)
        {
            $this->libelle=$libelle;
        }
        
        public function getPrix()
        {
            return $this->prix;
        }
        
        public function setPrix($prix)
        {
            $thsi->prix=$prix;
        }
        
        public function getDescription()
        {
            return $this->description;
        }
        
        public function setDescription($description)
        {
            $this->description=$description;
        }
        
        public function getDate_ajout()
        {
            return $this->date_ajout;
        }
        
        public function setDate_ajout($date_ajout)
        {
            $this->date_ajout=$date_ajout;
        }
        
        public function getId_cat()
        {
            return $ths->id_cat;
        }
        
        public function setId_cat($id_cat)
        {
            $this->id_cat=$id_cat;
        }
        
        public function getLogin_admin()
        {
            return $this->login_admin;
        }
        
        public function setLogin_admin($login_admin)
        {
            $this->login_admin=$login_admin;
        }
        
        
        
        //Crud
        
        public function add()
        {
            return input("insert into produit values('$this->ref','$this->image','$this->libelle','$this->prix','$this->description','$this->date_ajout','$this->id_cat','$this->login_admin')");
        }
        
        public function update($ref)
        {
            return input("update produit set ref='$this->ref' , image='$this->image' , libelle='$this->libelle' , prix='$this->prix' , description='$this->description' , date_ajout='$this->date_ajout' , id_cat='$this->id_cat' , login_admin='$this->login_admin'  where ref='$ref'");
        }
        
        public function delete($ref)
        {
            return input("delete table produit where ref='$ref'");
        }
        
        public function allProduit()
        {
            $res=output("select produit.ref , produit.libelle , produit.prix , produit.description , categorie.libelle , produit.date_ajout, produit.image from produit , categorie where categorie.id=produit.id_cat");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
              $T[$i]=$produit = array('ref'=>$tab[0]."",'libelle'=>$tab[1]."",'prix'=>$tab[2]."",'description'=>$tab[3]."",'categorie'=>$tab[4]."",'date_ajout'=>$tab[5]."",'image'=>$tab[6]."",);
              $i++;
		 	}
            return $T;
        }
    }