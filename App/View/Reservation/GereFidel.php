<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-xs-12">
                <center>
                    <h1>Gestion fidéle</h1>
                </center>
                <form method="POST" action="">
                    <input type="number" min="10" max="50" id="inputNom" class="form-control" placeholder="Saisir la réduction" name="reduction" required value ="<?php ?>">
                    <input type="number" min="5" id="inputNom" class="form-control" placeholder="Nombre d'élément dans la panier" name="nbres" required value ="<?php ?>">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_fidel"> 
                        Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['bt_fidel']))
    {
        require_once ('../App/Controller/ReservationController.php');
		$r=new ReservationController();
        $r->gereFidelity($_POST['reduction'],$_POST['nbres']);
    }
?>