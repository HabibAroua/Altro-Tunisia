<?php
    require_once('../App/Model/Reservation.php');
    class ReservationController
    {
        public function ajouterAuPanier()
        {
            $r=new Reservation();
            echo "nb de res est ".$r->nbPanier();
        }
    }

?>