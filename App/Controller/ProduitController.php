<?php
    require_once('../App/Model/Produit.php');
    
    class ProduitController
    {
        public function ajouterProduit($ref,$image,$libelle,$prix,$description,$id_cat,$login_admin)
        {
            $p=new Produit($ref,$image,$libelle,$prix,$description,$id_cat,$login_admin);
            $test=$p->add();
            if($test)
            {
                require_once 'alert.php';
                show("Ajout du produit effectué avec succes");
            }
            else
            {
                require_once 'alert.php';
                show("Erreur au niveau de l ajout");
            }
        }
        
        public function getAllProduit()
        {
            $p=new Produit('','','','','','','');
            $T=$p->allProduit();
            return $T;
        }
        
    }


?>