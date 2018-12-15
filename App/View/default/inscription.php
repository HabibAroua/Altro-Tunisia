<script>
	function show()
	{
		//document.location.href="index.php?page=login";
		$('#myStyle').load('Accueil.php?page=login');
	}
</script>
</script>
<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-3 col-sm-xs-12">
                <form class="form-signin" method="POST" action="">
                    <h1 class="h3 mb-3 font-weight-normal">Inscription</h1>
                    <label for="inputLogin" class="sr-only">Login</label>
                    <input type="text" id="inputLogin" class="form-control" placeholder="Login" name="login" value="<?php if (isset($_POST['login'])) echo $_POST['login']; ?>" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" name="password" required autofocus>
                    <label for="inputConfPassword" class="sr-only">Confirmer Password</label>
                    <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirmer votre mot de passe" name="confPassword" required autofocus>
					<label for="inputNom" class="sr-only">Nom</label>
                    <input type="text" id="inputNom" class="form-control" placeholder="Saisir votre nom" name="nom" value="<?php if (isset($_POST['nom'])) echo $_POST['nom']; ?>" required autofocus>
					<label for="inputPrenom" class="sr-only">Prénom</label>
                    <input type="text" id="inputPrenom" class="form-control" placeholder="Saisir votre prénom" name="prenom" value="<?php if (isset($_POST['prenom'])) echo $_POST['prenom']; ?>" required autofocus>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required autofocus>
                    <label for="inputDateNaissance" class="sr-only" >Date naissance</label>
                    <input type="date" id="inputDateNaissance" min="1940-12-31" max="1999-12-31"  class="form-control" placeholder="Date de naissance"  name="date_naissance" value="<?php if (isset($_POST['date_naissance'])) echo $_POST['date_naissance']; ?>" required autofocus>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_inscription" onclick="show();"> 
                         Inscrire
                    </button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
					<?php echo (new \DateTime())->format('Y-m-d'); ?>
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-xs-12">
                <img src="picture/inscription.png" style="height:500px; width:500px;" />
            </div>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div id='myStyle'>
</div>
<?php
    if(isset($_POST['bt_inscription']))
	{
		require_once('../App/Controller/ClientController.php');
		$c=new ClientController();
		$c->ajouterClient($_POST['login'],$_POST['password'],$_POST['confPassword'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['date_naissance']);
	}
?>