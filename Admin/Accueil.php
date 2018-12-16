<?php
    require_once('../App/Controller/AdminController.php');
	$a=new AdminController();
    $a->IsLogin();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Acces Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<link rel="stylesheet" href="css/sweetalert2.css">
		<link rel="stylesheet" href="css/style.css">
    </head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img style="width:100px; height: 50px;" src="picture/AltroTunisia.png"></a>
                </div>
				<div class="collapse navbar-collapse" id="navbar-collapse-main">
					<ul class="nav navbar-nav navbar-right">
						<li>
                            <a class="active" href="Accueil.php?page=accueil">Acceuil</a>
                        </li>
						<li><a href="Accueil.php?page=client">Gestion des clients</a></li>
						<li><a href="Accueil.php?page=gereProduit">Gestion des produits</a></li>
						<li><a href="Accueil.php?page=gererReservation">Gestion des réservation</a></li>
						<li><a href="Accueil.php?page=statistique">Les statistiques</a></li>
						<li><a href="Accueil.php?page=fidel">Gestion des fidélité</a></li>
						<li><a href="logout.php">Deconexion</a></li>
					</ul>
                </div>
            </div>
        </nav>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
        <script src="javascript/Alert.js"></script>
        <?php			
			if(isset($_GET['page']))
			{
				switch($_GET['page'])
				{
					case 'client' :require_once('../App/View/Client/Gere_client.php');
					break;
				    case 'ajouterProduit' : require_once('../App/View/Produit/ajouterProduit.php');
					break;
				    case 'gereProduit' : require_once('../App/View/Produit/Gere_produit.php');
					break;
				    case 'modifierProduit' : require_once('../App/View/Produit/modifierProduit.php');
					break;
				    case 'statistique' : require_once('../App/View/Reservation/statistique.php');
					break;
				    case 'gererReservation' : require_once('../App/View/Panier/Gerer_reservation.php');
					break;
				    case 'fidel' :require_once('../App/View/Reservation/GereFidel.php');
					break;
				    case 'accueil' :require_once('../App/View/default/acceuilAdmin.php');
					break;
				}
			}
        ?>
    </body>
</html>