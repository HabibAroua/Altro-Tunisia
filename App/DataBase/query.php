<?php
    require_once('../App/DataBase/connexion.php');
    //require_once('../DataBase/connexion.php');
    function input($req)
    {
        global $connection;
        $res=$connection->con->exec($req);
        if($res!=0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function output($req)
    {
        global $connection;
        $res=$connection->con->query($req);
        return $res;
        //while($tab=$res->fetch(PDO::FETCH_NUM))
        //{
        //}
    }

?>