<?php
     require_once ('../App/Controller/ProduitController.php');
     $p=new ProduitController();
     $T=$p->getAllProduit();
?>
<script>
    function allerModifier(id)
    {
        document.location.href="http://localhost/SiteWebCommercial/Admin/Accueil.php?page=modifierProduit&produit="+id;
    }
</script>
<div style="padding-right: 1px "><div class="padding">
	<div class="container">
        <center>
            <h1>Gestion des produits</h1>
        </center>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Réference</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Description</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Ajouté à</th>
                    <th scope="col">Image</th>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Modifier</th>
				<th scope="col"><a href="Accueil.php?page=ajouterProduit"><button type="button" class="glyphicon glyphicon-plus"></button></a></th>
               </tr>
          </thead>
          <tbody>
               <?php
                    foreach($T as $v)
                    {
                        $ref=$v{'ref'};
                        $libelle=$v{'libelle'};
                        $prix=$v{'prix'};
                        $description=$v{'description'};
                        $categorie=$v{'categorie'};
                        $date_ajout=$v{'date_ajout'};
                        $image=$v{'image'};
                        echo '<tr>';
                              echo "<td>$ref</td>";
                              echo "<td>$libelle</td>";
                              echo "<td>$prix</td>";
                              echo "<td>$description</td>";
                              echo "<td>$categorie</td>";
                              echo "<td>$date_ajout</td>";
                              echo "<td><img src='imageProduit/$image' style='width:50px; height:50px;' /></td>";
               ?>
            
                             <td><center><button type="button" class="glyphicon glyphicon-trash"></button></center></td>
					    <td><center><button type="button" class="glyphicon glyphicon-pencil" onclick="allerModifier('<?php echo $ref ?>');"></button></center></td>
               <?php
                        echo '</tr>';
                    }
               ?>
          </tbody>
        </table>
    </div>
</div>