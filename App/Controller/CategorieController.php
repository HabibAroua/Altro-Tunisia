<?php
    require_once('../App/Model/Categorie.php');
    class CategorieController
    {
        public function getAllCategorie()
        {
            $c=new Categorie('','');
            return $c->allCategorie();
        }
    }

?>