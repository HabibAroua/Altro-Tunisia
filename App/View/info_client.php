<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-3 col-sm-xs-12">
				<?php
				    require_once('../App/Controller/ClientController.php');
					$c=new ClientController();
					$client=$c->findClientByLogin($_SESSION['login']);
				    if (isset($_POST['bt_modif']))
	                {
		                {
	                        $client->setNom($_POST['nom']);
	                        $client->setPrenom($_POST['prenom']);
	                        $client->setEmail($_POST['email']);
	                        $client->setDateNaissance($_POST['date_naissance']);
			                $c->modifierClient($client,$_SESSION['login']);
							$client=$c->findClientByLogin($_SESSION['login']);
						}
					}
                ?>
                <h1>Information client</h1>
                <table>
                    <tr>
                        <td><b>Login :</b></td>
                        <td><?php echo $_SESSION['login']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Nom :</b></td>
                        <td><?php echo $client->getNom(); ?></td>
                    </tr>
                    <tr>
                        <td><b>Prénom :</b></td>
                        <td><?php echo $client->getPrenom(); ?></td>
                    </tr>
                    <tr>
                        <td><b>Email :</b></td>
                        <td><?php echo $client->getEmail(); ?></td>
                    </tr>
                    <tr>
                        <td><b>Date de Naissance :</b></td>
                        <td><?php echo $client->getDateNaissance(); ?></td>
                    </tr>
                    
                </table>
            </div>
            <div class="col-lg-6 col-md-3 col-sm-xs-12">
                <form class="form-signin" method="POST" action="Accueil.php?page=profil">
                    <h1 class="h3 mb-3 font-weight-normal">Modifier vos informations</h1>
                    <input type="text" id="inputNom" class="form-control" placeholder="Saisir votre nom" name="nom" value ="<?php echo $client->getNom();?>">
					<label for="inputPrenom" class="sr-only">Prénom</label>
                    <input type="text" id="inputPrenom" class="form-control" placeholder="Saisir votre prénom" name="prenom" value ="<?php echo $client->getPrenom();?>">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" value ="<?php echo $client->getEmail();?>">
                    <label for="inputDateNaissance" class="sr-only">Date naissance</label>
                    <input type="date" id="inputDateNaissance" class="form-control" placeholder="Date de naissance" name="date_naissance" value="<?php echo $client->getDateNaissance();?>">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_modif"> 
                         Modifier
                    </button>
                </form>
				<br>
				<form class="form-signin" method="POST" action="Accueil.php?page=profil">
					<h1 class="h3 mb-3 font-weight-normal">Modifier votre mot de passe</h1>
					<input type="password" class="form-control" placeholder="Donnez votre ancien mot de passe" name="oldPassword">
					<input type="password" class="form-control" placeholder="Donnez votre nouveau mot de passe" name="newPassword">
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_modif_pa"> 
                         Modifier votre mot de passe
                    </button>
				</form>
            </div>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['bt_modif_pa']))
	{
		if((isset($_POST['oldPassword'])) && (isset($_POST['newPassword'])))
		{
			$c->changerPassword($_POST['newPassword'],$_POST['oldPassword'],$_SESSION['login']);
		}
	}
?>