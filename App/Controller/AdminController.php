<?php
    require_once('../App/Model/Admin.php');
    require_once('../App/Controller/sessionAdmin.php') ;
    class AdminController
    {
        private $session;
        
        public function __construct()
		{
			$this->session=new SessionAdmin();
		}
        
        public function login($login,$password)
        {
            $a=new Admin();
            $T=$a->allAdmin();
            $myLogin='';
            $myPassword='';
            foreach($T as $v)
            {
                if((strcasecmp($v{'login'},$login)==0) && (strcasecmp($v{'password'},$password)==0))
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
                $this->session->connect($myLogin,$myPassword,'http://localhost/SiteWebCommercial/Admin/Accueil.php?page=accueil',3600*48);
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
    }
	
?>