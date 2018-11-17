<?php
    require_once('../App/DataBase/query.php');
    //require_once('../DataBase/query.php');
    class Client
    {
        private $login;
        private $motDePAsse;
        private $nom;
        private $prenom;
        private $email;
        private $date_naissance;
        private $date_inscription ;
        
        public function __construct($login,$motDePasse,$nom,$prenom,$email,$date_naissance)
        {
            $this->login=$login;
            $this->motDePAsse=$motDePasse;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->email=$email;
            $this->date_naissance=$date_naissance;
            $this->date_inscription=(new \DateTime())->format('Y-m-d');
        }
        
        public function getLogin()
        {
            return $this->login;   
        }
        
        public function setLogin($login)
        {
            $this->login=$login;
        }
        
        public function getMotDePasse()
        {
            return $this->motDePAsse;
        }
        
        public function setMotDePasse($motDePAsse)
        {
            $this->motDePAsse=$motDePAsse;
        }
        
        public function getNom()
        {
            return $this->nom;
        }
        
        public function setNom($nom)
        {
            $this->nom=$nom;
        }
        
        public function getPrenom()
        {
            return $this->prenom;    
        }
        
        public function setPrenom($prenom)
        {
            $this->prenom=$prenom;    
        }
        
        public function getEmail()
        {
            return $this->email;
        }
        
        public function setEmail($email)
        {
            $this->email=$email;
        }
        
        public function add()
        {
            return input("insert into client values('$this->login','$this->motDePAsse','$this->nom','$this->prenom','$this->email','$this->date_naissance','$this->date_inscription')");
        }
        
        public function update()
        {
            
        }
        
        public function delete()
        {
            
        }
        
        public function allClient()
        {
            $res=output("select * from client ");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
              $T[$i]=$client = array('login'=>$tab[0]."",'password'=>$tab[1]."",'nom'=>$tab[2]."",'prenom'=>$tab[3]."",'email'=>$tab[4]."",'date_naissance'=>$tab[5]."",'date_inscription'=>$tab[6],);
              $i++;
		 	}
            return $T;
        }
    }
    //$c=new Client('','','','','','','');
    //echo json_encode($c->allClient());
    //$T=$c->allClient();
    
    //echo $T[0]{'login'}.'<br>';
    //echo $T[1]{'login'}.'<br>';
    
    //foreach($T as $v)
    //{
      //  echo $v{'login'}.'<br>';
    //}
?>