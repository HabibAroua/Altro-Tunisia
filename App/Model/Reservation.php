<?php
    require_once('../App/DataBase/query.php');
    class Client
    {
        private $date_res;
        
        public function __construct($dare_res)
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
    }

