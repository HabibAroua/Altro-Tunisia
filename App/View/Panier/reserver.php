<div style="padding-right: 1px "><div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-xs-12">
                
            </div>
            <div class="col-lg-6 col-md-3 col-sm-xs-12">
                <h1>Reserver Panier</h1>
                <?php
	                require_once ('../App/Controller/ProduitController.php');
                    $p=new ProduitController();
                    if(isset($_GET['ref']))
                    {
                        $produit=$p->findProduitByRef($_GET['ref']);
                        $libelle=$produit->getLibelle();
                        $prix=$produit->getPrix();
                        $description=$produit->getDescription();
                        $image=$produit->getImage();
                        $quantite=$produit->getQuantite();
                        echo "<form method='POST' action'' >";
                            echo "<table>";
                                echo "<tr>";
                                    echo "<td><b>Libelle :</b></td>";
                                    echo "<td>$libelle</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td><b>Prix :</b></td>";
                                    echo "<td>$prix DT</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td><b>Description :</b></td>";
                                    echo "<td>$description</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td><b>Image :</b></td>";
                                    echo "<td><img style='height:316px; width:300px;' src='../Admin/imageProduit/$image' /></td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td><b>Quantité :</b></td>";
                                    echo "<td>";
                                        echo "<select name='quantite'>";
                                            for($i=0 ;$i<=$quantite ; $i++)
                                            {
												if($i!=0)
												{
                                                    echo "<option value='$i'>$i</option>";
												}
                                            }
                                        echo "</select>";
                                    echo "</td>";
                                echo "</tr>";
                            echo "</table>";
                        echo "<button class='btn btn-lg btn-primary btn-block' type='submit' name='bt_reserver'>Ajouter au panier</button>";
                        echo "</form>";
                    }
                    if(isset($_POST['bt_reserver']))
                    {
						require_once ('../App/Controller/ReservationController.php');
                        $user=$_SESSION['login'];
                        $r =new ReservationController();
						$r->ajouterAuPanier($user,$_GET['ref'],$_POST['quantite']);
                    }
                ?>
            </div>
        </div>
    </div>
</div>