<?php
    echo 'Bienvenue';
    require_once('../App/Controller/ClientController.php');
	$c=new ClientController();
    $c->IsLogin();
?>