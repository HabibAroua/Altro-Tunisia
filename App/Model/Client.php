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
        //login
        public function getLogin()
        {
            return $this->login;   
        }
        
        public function setLogin($login)
        {
            $this->login=$login;
        }
        //mot de passe
        public function getMotDePasse()
        {
            return $this->motDePAsse;
        }
        
        public function setMotDePasse($motDePAsse)
        {
            $this->motDePAsse=$motDePAsse;
        }
        //nom
        public function getNom()
        {
            return $this->nom;
        }
        
        public function setNom($nom)
        {
            $this->nom=$nom;
        }
        //prenom
        public function getPrenom()
        {
            return $this->prenom;    
        }
        
        public function setPrenom($prenom)
        {
            $this->prenom=$prenom;    
        }
        //email
        public function getEmail()
        {
            return $this->email;
        }
        
        public function setEmail($email)
        {
            $this->email=$email;
        }
	//Date email
	public function getDateNaissance()
	{
		return $this->date_naissance;
	}
		
	public function setDateNaissance($date_naissance)
	{
		$this->date_naissance=$date_naissance;
	}
        
        public function add()
        {
            return input("insert into client values('$this->login','$this->motDePAsse','$this->nom','$this->prenom','$this->email','$this->date_naissance','$this->date_inscription')");
        }
        
        public function update($login)
        {
            return input("update client set login='$this->login' , password='$this->motDePAsse' , nom='$this->nom' , prenom='$this->prenom' , email='$this->email' , date_naissance='$this->date_naissance' , date_inscription='$this->date_inscription' where login='$login'");   
        }
        
        public function delete($login)
        {
            return input("delete from client where login='$login'");
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
		
	public function findClientByLogin($login)
	{
	    $res=output("select * from client where login='$login' ");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
	       $this->login=$tab[0];
                $this->motDePAsse=$tab[1];
                $this->nom=$tab[2];
                $this->prenom=$tab[3];
                $this->email=$tab[4];
                $this->date_naissance=$tab[5];
                $this->date_inscription=$tab[6];	
	    }
	}
		
	public function editPassword($login,$newPassword)
	{
		return input("update client set password='$newPassword' where login='$login'");
	}
    }
?>
