<?php
    require_once('../App/Controller/ClientController.php');
	require_once('../App/Controller/ReservationController.php');
	$c=new ClientController();
    $c->IsLogin();
	$r=new ReservationController();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Acceuil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/styleClient.css" rel="stylesheet" />
		<link href="css/pagination.css" rel="stylesheet" />
		<style>
			
			#container
			{
				width: 80%;
	            height: 450px;
	            border: 1px solid black;
	            margin: 0 auto;
			}
			
			#container>img
            {
				width: 1080px;
	            height: 70%;
	            position: absolute;
			}

            #container>.btn
            {
				position: absolute;
	            width: 50px;
	            height: 50px;
	            border: none;
	            border-radius: 25px;
	            top: 200px;
	            background: black;
	            color: white;
				font-size: 20px;
			}
			
			#container>#btn1:hover
            {
				box-shadow: 10px 0px 20px 10px black;
			}
			
			#container>#btn2:hover
            {
				box-shadow: -10px 0px 20px 10px black;
			}
			
			#container>#btn2
            {
				position: relative;
    	        float: right;
			}
		</style>
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
	<body onload="inactiveButton();">
		<script>
		    function inactiveButton()
			{
				document.getElementById("bt_recherche").disabled = true;
			}
			
			function texting()
			{
				if(document.getElementById("search").value ==="")
				{
					document.getElementById("bt_recherche").disabled = true;
				}
				else
				{
					document.getElementById("bt_recherche").disabled = false;
				}
			}
        </script>
		<?php
		    $nbPanier=0;
			if(isset($_GET['panier']))
			{
				$panier=$_GET['panier'];
				echo "<script>alert('Hello world');</script>";
			}
		?>
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
							<li><a href="Accueil.php?page=panier">Panier : <?php echo $r->produitReserver($_SESSION['login']) ; ?></a></li>
							<li><a href="Accueil.php?page=paiement">Paiement</a></li>
							<li><a href="logout.php">Deconexion</a></li>
						</ul>
						<div style="padding-top:12px;">
							<form action="Accueil.php?page=rechercheProduit" method="POST">
								<input id="search" type="search" name="txtCherche" onchange="texting();" placeholder="Recherche un produit">
								<button id="bt_recherche">Recherche</button>
							</form>
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
				    case 'rechercheProduit' : require_once('../App/View/Produit/rechercheProduit.php');
					break;
				    case 'acheter' : require_once('../App/View/Panier/Acheter.php');
					break;
				    case 'reserver' : require_once('../App/View/Panier/reserver.php');
					break;
				    default : require_once('../App/View/default/accueil.php');
					break;
				}
			}
			else
			{
				require_once('../App/View/default/accueil.php');
			}
		?>
	</body>
</html>