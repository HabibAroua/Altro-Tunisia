<?php
    require_once('../App/DataBase/query.php');
    
    class Reservation
    {
        private $date_res;
        
        public function __construct()
        {
            $this->date_res=$date_res;
        }
        
        public function getDate_res()
        {
            return $this->date_res;
        }
        
        public function add()
        {
            return input("insert into reservation values('$this->date_res')");
        }
        
        public function update()
        {
            
        }
        public function delete()
        {
            
        }
        public function allClient()
        {

        }
        
        public function nbPanier()
        {
            $res=output("select * from client ");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                $i++;
            }
            return $i;
        }
    }