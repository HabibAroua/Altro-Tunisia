<?php
	require_once ('../App/Controller/ProduitController.php');
    $p=new ProduitController();
    if(isset($_POST['txtCherche']))
    {
        $T=$p->findProduit($_POST['txtCherche']);
    }
?>
<script src="javascript/pagination.js"></script>
<script>
	function show(id)
	{
		$('#myStyle').load('Accueil.php?page=produit&panier=' + id);
	}
</script>
<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-xs-12">
				<?php
					echo "<div><div id='wrapper'>"; 
						echo "<div class='contents'>";
						    if(empty($T))    
						    {
								echo "<b>Aucune donnée disponible</b>";
							}
							else
							{
								foreach($T as $v)
						        {
							        $ref=$v{'ref'};
                                    $libelle=$v{'libelle'};
                                    $prix=$v{'prix'};
                                    $description=$v{'description'};
                                    $categorie=$v{'categorie'};
                                    $date_ajout=$v{'date_ajout'};
                                    $image=$v{'image'};
									$quantite=$v{'quantite'};
					     	        echo "<div>";
									    echo"<div class='col-md-3'>";
                                            echo "<div class='card mb-3'>";
								                echo "<img style='height: 200px; width: 100%; display: block;' src='../Admin/imageProduit/$image' alt='Card image'>";
                                                echo "<div class='card-body'>";
							                        echo "<p class='card-text'>Marque:<b>$libelle</b></p>";
													echo "<p class='card-text'>Date d'ajout : <b>$date_ajout</b></p>";
													echo "<p class='card-text'>Prix : $prix DT</p>";
													echo "<p class='card-text'>$description</p>";
													echo "<div class='card-text'><div class='btn-group' role='group'>";
                                                    echo "</div></div>";
                                                echo "</div>";
                                            echo "</div>";
											?><button type='button' onclick="show('<?php echo $ref; ?>')" class='glyphicon glyphicon-plus'>Ajouter au panier</button>
											<?php
                                        echo "</div>";
						            echo "</div>";					
								}
							}
						echo "</div>";
					echo "</div></div>";		
				?>
            </div>
        </div>
    </div>
</div>
<script>
	$(document).ready(function()
    {
		$("#tab").pagination(
		{
            items: 4,
            contents: 'contents',
            previous: 'Previous',
            next: 'Next',
            position: 'bottom',
        });
    });
</script>
<div id='myStyle'>
</div>