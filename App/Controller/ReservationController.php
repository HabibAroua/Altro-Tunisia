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
        
        public function produitReserver($user)
        {
            $r=new Reservation();
            return $r->nbrProduitReserverByClient($user);
        }
        
        public function AllPanierUser($user)
        {
            $r=new Reservation();
            $r->setLogin($user);
            return $r->allPanierUser();
        }
        
        public function annulerReservation($nb,$ref,$quantite)
        {
            $r=new Reservation();
            $r->setNb($nb);
            $r->setRef_prod($ref);
            $r->setQuantite($quantite);
            $test = $r->delete();
            if($test)
            {
                require_once 'alert.php';
                show("L ajout au panier effectué avec succes");
            }
            else
            {
                require_once 'alert.php';
                error("Error");
            }   
        }
        
    }

?>