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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" />
				<style>
					    html,body
							{
								  height:100%;
									width: 100%;
							}
							.navbar
							{
								  background-color: #23415C;
									padding: 1% 0:
									font-size : 1.2em;
							}
							.navbar-brand
							{
								  min-height: 55px;
									padding: 0 15px 5px;
							}
							.navbar-default .navbar-nav li a
							{
								  color :#D5D5D5;
							}
							.navbar-default .navbar-nav li a :hover , .navbar-default .navbar-nav li a :active
							{
								  color: #FFF;
							}
							#home
							{
								  background: url(picture/mountains.jpeg) no-repeat center center fixed;
									display:table;
									height: 100%;
									position: relative;
									width: 100%;
									background-size:cover; 
							}
							.landing-text
							{
								  display: table-cell;
									text-align: center;
									vertical-align: middle;
							}
							.landing-text h1
							{
								  font-size: 500%;
							}
							.padding
							{
								  padding: 80px 0;
							}
							.padding img
							{
								  width: 100%;
							}
							#fixed
							{
								  background: url(picture/background.png) no-repeat center center fixed;
									display: table;
									height:60%;
									position: relative;
									width: 100%;
									background-size: cover;
							}
							footer
							{
								  width: 100%;
									background-color: #23415C;
									padding: 5% 5% 10% 5%;
									color: #FFF;
							}
							.fa
							{
								  padding: 15x;
									font-size: 25px;
									color: #FFF;
							}
							.fa :hover
							{
								  color: #D5D5D5;
									text-decoration: none;
							}
							.icon
							{
								  max-width: 200px;
							}
							@media (max-width: 768px)
							{
								  .landing-text h1
									{
										  font-size: 300%;
									}
									.fa
									{
										  font-size: 20px;
											padding: 10px;
									}
									.icon
									{
										  padding-top: 5%;
											max-width: 100px;
									}
							}
				</style>
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
											  <li><a class="active" href="#">Home</a></li>
												<li><a href="">About</a></li>
												<li><a href="#">Services</a></li>
												<li><a href="#">Testmonials</a></li>
												<li><a href="logout.php">Deconexion</a></li>
										</ul>
								</div>
						</div>
				</nav>
				<?php
				    if(isset($_GET['page']))
					{
						if($_GET['page']=='p1')
						{
							require_once('../App/View/accueil.php');
						}
					}
				?>
		</body>
</html>