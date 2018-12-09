<?php
	require_once ('../App/Controller/ProduitController.php');
    $p=new ProduitController();
    $T=$p->getAllProduit();
?>
<script src="javascript/pagination.js"></script>
<script>
	$(document).ready(function()
    {
		$("#tab").pagination(
		{
            items: 5,
            contents: 'contents',
            previous: 'Previous',
            next: 'Next',
            position: 'bottom',
        });
    });
</script>
<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-3 col-sm-xs-12">
                <center><h1>List Produit</h1></center>
				<?php
					echo "<div id='wrapper'>";
						echo "<div class='contents'>";
						    foreach($T as $v)
						    {
							    $ref=$v{'ref'};
                                $libelle=$v{'libelle'};
                                $prix=$v{'prix'};
                                $description=$v{'description'};
                                $categorie=$v{'categorie'};
                                $date_ajout=$v{'date_ajout'};
                                $image=$v{'image'};
					     	    echo "<div>";
							        echo "<table>";
								        echo "<tr>";
									        echo "<td>Réference :</td>";
										    echo "<td>$ref</td>";
									    echo "</tr>";
									    echo "<tr>";
									        echo "<td>Libelle :</td>";
										    echo "<td>$libelle</td>";
									    echo "</tr>";
									    echo "<tr>";
									        echo "<td>Description :</td>";
										    echo "<td>$description</td>";
									    echo "</tr>";
									    echo "<tr>";
									        echo "<td>Categorie :</td>";
										    echo "<td>$categorie</td>";
									    echo "</tr>";
									    echo "<tr>";
									        echo "<td>Date d'ajout :</td>";
										    echo "<td>$date_ajout</td>";
									    echo "</tr>";
								    echo "</table>";
									echo "<a href='../Admin/imageProduit/$image'><img style='height:70px; width:70px;' src='../Admin/imageProduit/$image'/></a>";
									echo "<button>Ajouter au panier</button>";
								echo "</div>";
							}
						echo "</div>";
					echo "</div>";
				?>
            </div>
			<div class="col-lg-6 col-md-3 col-sm-xs-12">
				dqdqdqd
				dq
				dq
				dq
				
				dqdqd
				qd
				qd
				qdq
				dq
				dq
			</div>
        </div>
    </div>
</div>