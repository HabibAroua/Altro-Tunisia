<?php
    require_once('../App/Model/Client.php');
    class ClientController
    {
        public function ajouterClient($login,$password,$confPassword,$nom,$prenom,$email,$date_naissance)
        {
            if($password!=$confPassword)
            {
                require_once 'alert.php';
                show("Vérifier la confirmation de mot de passe");
            }
            else
            {
                $c=new Client($login,sha1($password),$nom,$prenom,$email,$date_naissance);
                $test=$c->add();
                if($test==true)
                {
                    require_once 'alert.php';
                    show("L\tajout du client effectué avec succes");
                }
            }
        }
    }
    
?>