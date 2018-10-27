<?php
    require_once('../App/DataBase/connexion.php');
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

?>