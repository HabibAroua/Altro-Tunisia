<?php
require_once('../App/DataBase/query.php');

    class Admin
    {
        private $login;
        private $motDePAsse;
        private $nom;
        private $prenom;
        
        public function __construct()
        {

        }

        public function getLogin()
        {
            return $this->login;
        }

        public function getMotDePasse()
        {
            return $this->motDePAsse;
        }
        
        public function getNom()
        {
            return $this->nom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }
        
        public function getDate_res()
        {
            return $this->date_res;
        }
        
        public function add()
        {
            return input("insert into client values('$this->login','$this->motDePAsse','$this->nom','$this->prenom','this->date_res')");
        }

        public function update($login)
        {
            return input("update table admin set login='$this->login' , motDePasse='$this->motDePasse' , nom='$this->nom' , prenom='$this->prenom' where login='$login' ");
        }
        
        public function delete()
        {
            return input("delete admin where login='$login'");
        }

        public function allAdmin()
        {
            $res=output("select * from admin ");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
              $T[$i]=$admin = array('login'=>$tab[0],'password'=>$tab[1],);
              $i++;
		 	}
            return $T;
        }
    }

