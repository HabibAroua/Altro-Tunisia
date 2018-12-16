<?php
    require_once('../App/DataBase/query.php');
    
    class Reservation
    {
        private $login;
        private $ref_prod;
        private $date_res;
        private $nb;
        private $quantite;
		private $reduction;
		private $nbres;
        
        public function __construct()
        {
            $this->date_res=(new \DateTime())->format('Y-m-d');
        }
		
		public function getNbres()
		{
			return $this->nbres;
		}
		
		public function setNbres($nbres)
		{
		    $this->nbres=$nbres;	
		}
		
		public function getReduction()
		{
			return $this->reduction;
		}
		
		public function setReduction($reduction)
		{
			$this->reduction=$reduction;
		}
        
        public function getQuantite()
        {
            return $this->quantite;
        }
        
        public function setQuantite($quantite)
        {
            $this->quantite=$quantite;    
        }
        
        public function getNb()
        {
            return $this->nb;
        }
        
        public function setNb($nb)
        {
            $this->nb=$nb;
        }
        
        public function getRef_prod()
        {
            return $this->ref_prod;
        }
        public function setRef_prod($ref_prod)
        {
            $this->ref_prod=$ref_prod;
        }
        
        public function getLogin()
        {
            return $this->login;
        }
        
        public function setLogin($login)
        {
            $this->login=$login;
        }
        
        public function getDate_res()
        {
            return $this->date_res;
        }
        
        public function setDate_res($date_res)
        {
            $this->date_res=$date_res;
        }
        
        public function add()
        {
            return input("insert into reservation values('$this->login','$this->ref_prod','$this->date_res',$this->nb,$this->quantite,null,null,null); update produit set quantite=quantite-$this->quantite where ref='$this->ref_prod';");
        }
        
        public function update()
        {
            return input("update reservation set reduction='$this->reduction' , nbres='$this->nbres'");    
        }
		
		public function payer()
		{
			return input("update reservation set achat=1 where login='$this->login'");
		}
		
        public function delete()
        {
            return input("delete from reservation where nb=$this->nb; update produit set quantite=quantite+$this->quantite where ref='$this->ref_prod';");
        }
		
        public function allPanierUser()
        {
				$T=array();
				$res=output("SELECT produit.ref , produit.libelle , produit.prix , reservation.quantite, produit.image , reservation.nb ,reservation.date_reservation from produit , client , reservation where produit.ref=reservation.ref_Prod and client.login=reservation.login and client.login='$this->login' and achat is null");
                $i=0;
                while($tab=$res->fetch(PDO::FETCH_NUM))
                {

                    $T[$i]=$reservation = array('ref'=>$tab[0]."",'libelle'=>$tab[1]."",'prix'=>$tab[2]."",'quantite'=>$tab[3]."",'image'=>$tab[4]."",'nb'=>$tab[5]."",'date_res'=>$tab[6]."",);
                    $i++;
				}
				return $T;
		}
		
		public function panierAchater()
		{
			$T=array();
			$res=output("SELECT produit.ref , produit.libelle , produit.prix , reservation.quantite, produit.image , reservation.nb ,reservation.date_reservation from produit , client , reservation where produit.ref=reservation.ref_Prod and client.login=reservation.login and client.login='$this->login' and achat=1");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
              $T[$i]=$reservation = array('ref'=>$tab[0]."",'libelle'=>$tab[1]."",'prix'=>$tab[2]."",'quantite'=>$tab[3]."",'image'=>$tab[4]."",'nb'=>$tab[5]."",'date_res'=>$tab[6]."",);
              $i++;
		 	}
            return $T;
		}
		
		public function nbrAchat()
        {
            $res=output("SELECT produit.ref , produit.libelle , produit.prix , reservation.quantite, produit.image , reservation.nb ,reservation.date_reservation from produit , client , reservation where produit.ref=reservation.ref_Prod and client.login=reservation.login and client.login='$this->login' and reservation.achat is null");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
              $i++;
		 	}
            return $i;
        }
		
		public function allPanier()
		{
			$res=output("SELECT produit.ref , produit.libelle , produit.prix , reservation.quantite, produit.image , reservation.nb ,reservation.date_reservation from produit , client , reservation where produit.ref=reservation.ref_Prod and client.login=reservation.login");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
              $T[$i]=$reservation = array('ref'=>$tab[0],'libelle'=>$tab[1],'prix'=>$tab[2],'quantite'=>$tab[3],'image'=>$tab[4],'nb'=>$tab[5],'date_res'=>$tab[6],);
              $i++;
		 	}
            return $T;
		}
        
        public function nbPanier()
        {
            $res=output("select max(nb) from reservation");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                $i=$tab[0];
            }
            return $i;
        }
        
        public function nbrProduitReserverByClient($user)
        {
            $res=output("select * from reservation where login='$user' and achat is null");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                $i++;
            }
            return $i;
        }
		
		public function nbPanierByCategorie($id)
        {
            $res=output("select sum(reservation.quantite) from reservation , produit , categorie where produit.ref=reservation.ref_Prod and categorie.id=produit.id_cat and categorie.id=$id");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                $i=$tab[0];
            }
            return $i;
        }
		
		public function getRealReduction()
		{
			$res=output("select DISTINCT reduction FROM reservation WHERE reduction is not null");
			$i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                $i=$tab[0];
            }
            return $i;
		}
		
		public function getRealNbres()
		{
			$res=output("select DISTINCT nbres FROM reservation WHERE nbres is not null");
			$i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                $i=$tab[0];
            }
            return $i;
		}
		
    }

?>