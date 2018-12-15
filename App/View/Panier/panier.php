<script>
	function allerAnnuler(nb,ref,quantite,date)
	{
		swal
			               (
						     {
								title: "Are you sure?",
								text: "Voulez vous annulez cette reservation ?",
                                        icon: "warning",
                                        buttons: true,
                                        dangerMode: true,
							}
			               )
                              .then
						(
							 (willDelete) =>
			                                   {
							                    if (willDelete)
				                                   {
								                    //swal
					                                   //(
								                       //  "Poof! Your imaginary file has been deleted!",
					                                        //{
						                                     //   icon: "success",
													//}
				                                        //);
																document.location.href="http://localhost/SiteWebCommercial/Public/Accueil.php?page=panier&nb="+nb+"&ref="+ref+"&quantite="+quantite+"&date="+date;

							                    }
					                              else
					                              {
						                              swal("Suppression annulé");
											}
										}
				          );
	}
</script>
<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-xs-12">
                <center><h1>List Panier</h1></center>
				<table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Réference</th>
                            <th scope="col">Libelle</th>
                            <th scope="col">Prix</th>
				            <th scope="col">Quantité</th>
                            <th scope="col">Date réservation</th>
							<th scope="col">Image</th>
                            <th scope="col">Annuler</th>
                        </tr>
                    </thead>
					<tbody>
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
									    ?>
					                        <td><center><button type="button" class="glyphicon glyphicon-trash" onclick="allerAnnuler('<?php echo $nb ; ?>','<?php echo $ref ; ?>','<?php echo $quantite ; ?>','<?php echo $date_res ; ?>');"></button></center></td>

					                     <?php
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
    if((isset($_GET['nb'])) && (isset($_GET['ref'])) && (isset($_GET['quantite']))  && (isset($_GET['date']) ))
	{
		$date=$_GET['date'];
		$today=(new \DateTime())->format('Y-m-d');
		$datetime1 = new DateTime($date);
        $datetime2 = new DateTime($today);
        $interval = $datetime1->diff($datetime2);
        $x= $interval->format('%a');
		if($x>=2)
		{
			echo
			"<script>
			    swal
				(
				    {
				        title: 'Erreur',
                        text: 'Vous pasez le 48 heures',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                     }
				);
			</script>";
			
		}
		else
		{
		    require_once ('../App/Controller/ReservationController.php');
		    $r=new ReservationController();
		    $r->annulerReservation($_GET['nb'],$_GET['ref'],$_GET['quantite']);	
		}
	}
?>