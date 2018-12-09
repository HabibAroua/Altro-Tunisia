<div style="padding-right: 1px ">
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-xs-12">
                    <form class="form-signin" method="POST" action="" enctype="multipart/form-data">
                        <center>
                            <h1 class="h3 mb-3 font-weight-normal">Modifier Produit</h1>
                        </center>
                        <input type="text" id="inputref" class="form-control" placeholder="saisir la reférence" name="reference" value="<?php if(isset($_POST['reference'])) echo $_POST['reference'] ; ?>" required>
                        <input type="file" id="inputFile" class="form-control" placeholder="Saisir File" name="image" required >
                        <input type="text" id="inputText" class="form-control" placeholder="saisir libeille" name="libelle" required value="<?php if(isset($_POST['libelle'])) echo $_POST['libelle'] ; ?>">
                        <input type="text" id="inputText" class="form-control" placeholder="saisir prix" name="prix" required value="<?php if(isset($_POST['prix'])) echo $_POST['prix'] ; ?>">
                        <textarea name="description" style="width:1140px; height:100px;" required><?php if(isset($_POST['description'])) echo $_POST['description'] ; ?> </textarea>
                        <br>
                        <select name='inputCategorie'>
                            <?php
                            require_once ('../App/Controller/CategorieController.php');
                            $c=new CategorieController();
                            $T=$c->getAllCategorie();
                            foreach($T as $v) {

                                $id = $v{'id'};
                                $libelle = $v{'libelle'};
                                echo "<option value='$id'>$libelle</option>";
                            }
                            ?>
                        </select>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="bt_ajouter_produit">
                            Ajouter
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>