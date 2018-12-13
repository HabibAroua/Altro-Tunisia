<?php
    require_once('../App/Model/Reservation.php');
    class ReservationController
    {
        public function ajouterAuPanier($login,$ref_prod,$q)
        {
            $r=new Reservation();
            $r->setLogin($login);
            $r->setRef_prod($ref_prod);
            $r->setQuantite($q);
            $r->setNb($r->nbPanier()+1);
            $test=$r->add();
            if($test)
            {
                require_once 'alert.php';
                show("L ajout au panier effectué avec succes");
            }
            else
            {
                require_once 'alert.php';
                error("Erreur au niveau de l ajout au panier");
            }
            
        }
    }

?>