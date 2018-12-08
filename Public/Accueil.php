<?php
    echo 'Bienvenue';
    require_once('../App/Controller/ClientController.php');
	$c=new ClientController();
    $c->IsLogin();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Landing Page Website Tutorial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/styleClient.css" rel="stylesheet" />
		<style>
			#home
            {
				background: url(picture/mountains.jpeg) no-repeat center center fixed;
				display:table;
	            height: 100%;
	            position: relative;
	            width: 100%;
	            background-size:cover; 
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="javascript/Alert.js"></script>
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
						    <li><a class="active" href="Accueil.php?page=accueil">Acceuil</a></li>
							<li><a class="active" href="Accueil.php?page=profil">Profil</a></li>
							<li><a href="Accueil.php?page=produit">Consulter les produits disponibles</a></li>
							<li><a href="Accueil.php?page=panier">Panier : 0</a></li>
							<li><a href="Accueil.php?page=paiement">Paiement</a></li>
							<li><a href="logout.php">Deconexion</a></li>
						</ul>
						<div style="padding-top:12px;">
							<input type="search" placeholder="Recherche un produit"><button>Recherche</button>
						</div>
					</div>
			    </div>
		    </div>
		</nav>
		<?php
		    if(isset($_GET['page']))
			{
				switch ($_GET['page'])
				{
					case  'accueil' : require_once('../App/View/default/accueil.php');
					break;
				    case 'profil' : require_once('../App/View/Client/info_client.php');
					break;
				    case  'produit' : require_once('../App/View/Produit/listProduit.php');
					break ;
				    case 'panier' : require_once('../App/View/Panier/panier.php');
					break;
				    case 'paiement' : require_once('../App/View/Reservation/paiement.php');
					break;
				    default : require_once('../App/View/default/accueil.php');
					break;
				}
			}
		?>
	</body>
</html>