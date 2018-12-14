<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-xs-6">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-xs-4">
                <h1>Paiement</h1>
				<fieldset>
					<legend>
						Facture <img style="width: 150px; height: 50px;" src="../Admin/image/visa.jpg"/>
					</legend>
					<table class="table table-striped table-dark">
						<tr>
							<th scope="col">Libelle</th>
							<th scope="col">Prix unitaire</th>
							<th scope="col">Quantité</th>
							<th scope="col">Prix total</th>
						</tr>
						<?php
						    require_once ('../App/Controller/ReservationController.php');
							$r=new ReservationController();
							$T=$r->AllPanierUser($_SESSION['login']);
							if(empty($T))
							{
								echo "<tr><td>Vide</td></tr>";
							}
							else
							{
								$somme=0;
								foreach($T as $v)
								{
									$libelle=$v{'libelle'};
									$prix=$v{'prix'};
									$quantite=$v{'quantite'};
									$date_res=$v{'date_res'};
									$total=$prix*$quantite;
									$somme+=$total;
									echo "<tr>";
								        echo "<td>$libelle</td>";
									    echo "<td>$prix</td>";
									    echo "<td>$quantite</td>";
									    echo "<td>$total DT</td>";
								    echo "</tr>";
								}
							}
						?>
					</table>
					<?php $nbr=$r->nbrAchat($_SESSION['login']); echo "La somme total est <b>$somme DT</b> nbr : $nbr"; ?>
					<button type="button" class="glyphicon glyphicon-euro">Acheter</button>
				</fieldset>
            </div>
        </div>
    </div>
</div>