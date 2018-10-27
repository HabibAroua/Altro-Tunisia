<?php
    require_once('../App/Model/Client.php');
    class ClientController
    {
        public function ajouterClient($login,$password,$nom,$prenom)
        {
            $c=new Client($login,$password,$nom,$prenom);
            $test=$c->add();
            if($test==true)
            {
                echo '<script>alert("L ajout du client effectué avec succes")  </script>';
            }
        }
    } 
?>