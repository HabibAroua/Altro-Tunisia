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
                        <input type="text" id="inputText" class="form-control" placeholder="saisir quantité" name="quantite" required value="<?php echo $p->getQuantite();  ?>">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_modifier_produit">
                            Modifier
                        </button>
                    </form>
                    <?php
                            if(isset($_POST['bt_modifier_produit']))
                            {
                                $pc->modifierProduit($_GET['produit'],$_POST['reference'],$_POST['libelle'],$_POST['prix'],$_POST['description'],$_POST['quantite']);   
                            }
                        ?>
                    <br>
                    <form method="POST" action="">
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
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_modifier_categorie">
                            Modifier la categorie
                        </button>
                    </form>
                </div>
                <?php
                    if(isset($_POST['bt_modifier_categorie']))
                    {
                        $pc->modifierCategorie($_GET['produit'],$_POST['inputCategorie']);
                    }
                ?>
                <div class="col-lg-6 col-md-6 col-sm-xs-6">
                    <?php echo "<center><img style='height:316px; width:300px;' src='imageProduit/$image' /></center>"; ?>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <input type="file" id="inputFile" class="form-control" placeholder="Saisir File" name="image" required >
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_modifier_image">
                            Modifier l'image
                        </button>
                    </form>
                    <?php
                        if(isset($_POST['bt_modifier_image']))
                        {
                            $fileName = $_FILES['image']['name'];
                            $tempName = $_FILES['image']['tmp_name'];
                            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
                            if($ext=='png' || $ext=='jpg')
                            {
                                $pc->modifierImage($_GET['produit'],$fileName);
                                if(isset($fileName))
                                {
                                    if(!empty($fileName))
                                    {
                                        $location = "imageProduit/";
                                        if(move_uploaded_file($tempName, $location.$fileName))
                                        {
                                            echo 'File Uploaded';
                                        }
                                        else
                                        {
                                            echo "<script>alert('echoue');</script>";
                                        }
                                    }
                                }
                            }
                            else
                            {
                                echo
                                    "<script>
                                        swal(
                                            {
                                                title: 'Erreur',
                                                text: 'Les fichiers png ou jpg sont acceptable',
                                                icon: 'warning',
                                                button: 'OK',
                                            }
                                            );
                                    </script>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>