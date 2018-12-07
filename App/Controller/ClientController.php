<?php
    require_once('../App/Model/Client.php');
    require 'Session.php' ;
    
    class ClientController
    {
        private $session;
        
        public function __construct()
		{
			$this->session=new Session();
		}
        
        public function ajouterClient($login,$password,$confPassword,$nom,$prenom,$email,$date_naissance)
        {
			$testHeader=false;
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
					$testHeader=true;
                }
            }
        }
        
        public function login($login,$password)
        {
            $c=new Client('','','','','','','');
            //echo json_encode($c->allClient());
            $T=$c->allClient();
            $myLogin='';
            $myPassword='';
            foreach($T as $v)
            {
                if((strcasecmp($v{'login'},$login)==0) && (strcasecmp($v{'password'},sha1($password))==0))
                {
                    $myLogin= $v{'login'};
                    $myPassword= $v{'password'};
                    break;
                }
            }
            if($myLogin=='')
            {
                echo 'Error';
            }
            else
            {
                $this->session->connect($myLogin,$myPassword,'Accueil',3600*48);
            }
        }
        
        public function IsLogin()
        {
            $this->session->afterConnection();
        }
        
        public function LogOut()
        {
            $this->session->logOut();
        }
		
		public function getAllClient()
		{
			$c=new Client('','','','','','','');
            //echo json_encode($c->allClient());
            $T=$c->allClient();
			return $T;
		}
		
		public function findClientByLogin($login)
		{
			$c=new Client('','','','','','','');
			$c->findClientByLogin($login);
			return $c;
		}
		
		public function modifierClient($c,$login)
		{
			$test=$c->update($login);
			if($test)
			{
				require_once 'alert.php';
                show("Modification effectué avec succes");
			}
			else
			{
				require_once 'alert.php';
                show("Echoué");
			}
		}
		
		public function changerPassword($newPassword,$oldPassword,$login)
		{
			$c=new Client('','','','','','','');
			if($_SESSION['password']==sha1($oldPassword))
			{
				$test=$c->editPassword($login,sha1($newPassword));
				if($test)
				{
					require_once 'alert.php';
                    show("Modification du mot de passe effectué avec succes");
				}
				else
				{
					require_once 'alert.php';
                    show("Eurreur au niveau de modification du modification");
				}
			}
			else
			{
				require_once 'alert.php';
                show("Vérifié le mot de passe");
			}
		}
		
		public function supprimer($login)
		{
			$c=new Client('','','','','','','');
			$test=$c->delete($login);
			if($test)
			{
				require_once 'alert.php';
                show("Suppression effectué avec succes");
			}
			else
			{
				require_once 'alert.php';
                show("Erreur au niveau du supression");
			}
		}
		
    }
	
?>