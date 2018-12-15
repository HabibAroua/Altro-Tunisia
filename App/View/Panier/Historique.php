<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-xs-12">
                <center><h1>Historique</h1></center>
				<table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Réference</th>
                            <th scope="col">Libelle</th>
                            <th scope="col">Prix</th>
				            <th scope="col">Quantité</th>
                            <th scope="col">Date réservation</th>
							<th scope="col">Image</th>
                        </tr>
                    </thead>
					<tbody>
						<?php
						    require_once ('../App/Controller/ReservationController.php');
							$r=new ReservationController();
							$T=$r->historique($_SESSION['login']);
							if(!isset($T))
							{
								echo "<tr><td>Vide</td></tr>";
							}
							else
							{
								foreach($T as $v)
								{
									$ref=$v{'ref'};
									$libelle=$v{'libelle'};
									$prix=$v{'prix'};
									$quantite=$v{'quantite'};
									$image=$v{'image'};
									$nb=$v{'nb'};
									$date_res=$v{'date_res'};
									echo "<tr>";
									    echo "<td>$ref</td>";
									    echo "<td>$libelle</td>";
									    echo "<td>$prix</td>";
									    echo "<td>$quantite</td>";
									    echo "<td>$date_res</td>";
									    echo "<td><img src='../Admin/imageProduit/$image' style='width:50px; height:50px;''</td>";
									echo "</tr>";
								}
							}
						?>
					</tbody>
            </div>
        </div>
    </div>
</div>
<?php
    if((isset($_GET['nb'])) && (isset($_GET['ref'])) && (isset($_GET['quantite'])))
	{
		require_once ('../App/Controller/ReservationController.php');
		$r=new ReservationController();
		$r->annulerReservation($_GET['nb'],$_GET['ref'],$_GET['quantite']);
	}
?>