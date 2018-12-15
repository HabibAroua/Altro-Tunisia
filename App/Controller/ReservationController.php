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
        
        public function AllPanier()
        {
            $r=new Reservation();
            return $r->allPanier();
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
        
        public function nbPanierByCategorie($id)
        {
            $r=new Reservation();
            return $r->nbPanierByCategorie($id);
        }
        
        public function nbrAchat($user)
        {
            $r=new Reservation();
            $r->setLogin($user);
            return $r->nbrAchat();
        }
        
        public function gereFidelity($reduction,$nbres)
        {
            $r=new Reservation();
            $r->setReduction($reduction);
            $r->setNbres($nbres);
            $test=$r->update();
            if($test)
            {
                require_once 'alert.php';
                show("Choix de reduction effectue avec succes");
            }
            else
            {
                require_once 'alert.php';
                error("Erreur au niveau de choix");
            }
        }
        
        public function getReduction()
        {
            $r=new Reservation();
            return $r->getRealReduction();
        }
        
        public function getNbres()
        {
            $r=new Reservation();
            return $r->getRealNbres();
        }
        
        public function acheter($user)
        {
            $r=new Reservation();
            $r->setLogin($user);
            $test=$r->payer();
            if($test)
            {
                require_once 'alert.php';
                show("Paiement effectué avec succes");   
            }
            else
            {
                require_once 'alert.php';
                error("Erreur");
            }
        }
        
        public function historique($user)
        {
            $r=new Reservation();
            $r->setLogin($user);
            return $r->panierAchater();
        }
        
    }

?>