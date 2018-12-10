<?php
    require_once ('../App/Controller/CategorieController.php');
    $c=new CategorieController();
    require_once ('../App/Controller/ProduitController.php');
    $pc=new ProduitController();
    if(isset($_GET['produit']))
        $p=$pc->findProduitByRef($_GET['produit']);
        $image=$p->getImage();
?>
<div style="padding-right: 1px ">
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-xs-6">
                    <form class="form-signin" method="POST" action="">
                        <center>
                            <h1 class="h3 mb-3 font-weight-normal">Modifier Produit</h1>
                        </center>
                        <input type="text" id="inputref" class="form-control" placeholder="saisir la reférence" name="reference" value="<?php echo $p->getRef();  ?>" required>
                        <input type="text" id="inputText" class="form-control" placeholder="saisir libeille" name="libelle" required value="<?php echo $p->getLibelle();  ?>"">
                        <input type="text" id="inputText" class="form-control" placeholder="saisir prix" name="prix" required value="<?php echo $p->getPrix();  ?>">
                        <textarea name="description" style="width:556px; height:100px;" required><?php echo $p->getDescription(); ?> </textarea>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_modifier_produit">
                            Modifier
                        </button>
                    </form>
                    <?php
                            if(isset($_POST['bt_modifier_produit']))
                            {
                                $pc=new ProduitController();
                                $pc->modifierProduit($_GET['produit'],$_POST['reference'],$_POST['libelle'],$_POST['prix'],$_POST['description']);   
                            }
                        ?>
                    <br>
                    <form>
                        <select name='inputCategorie'>
                            <?php
                            $T=$c->getAllCategorie();
                            foreach($T as $v)
                            {
                                $id = $v{'id'};
                                $libelle = $v{'libelle'};
                                echo "<option value='$id'>$libelle</option>";
                            }
                            ?>
                        </select>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_ajouter_produit">
                            Modifier la categorie
                        </button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-xs-6">
                    <?php echo "<center><img style='height:400px; width:400px;' src='imageProduit/$image' /></center>"; ?>
                </div>
            </div>
        </div>
    </div>
</div>