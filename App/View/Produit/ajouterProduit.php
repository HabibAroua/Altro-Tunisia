<div style="padding-right: 1px ">
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-3 col-sm-xs-12">
                    <form class="form-signin" method="POST" action="">
                        <h1 class="h3 mb-3 font-weight-normal">Ajouter Produit</h1>
                        <input type="text" id="inputref" class="form-control" placeholder="saisir la reférence" name="reférence" >
                        <input type="file" id="inputFile" class="form-control" placeholder="Saisir File" name="image" >
                        <input type="text" id="inputText" class="form-control" placeholder="saisir libeille" name="libelle">
                        <textarea name="description"> </textarea>
                        <input type="text" id="inputText" class="form-control" placeholder="saisir libeille" name="libeille">
                        <select>
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
<?php
  if(isset($_POST['bt_ajouter_produit']))
  {
      $moved = move_uploaded_file($_FILES["image"]["tmp_name"], "imageProduit/" . $_FILES["image"]["name"] );

      if( $moved ) {
          echo "Successfully uploaded";
      } else {
          echo "Not uploaded because of error #".$_FILES["file"]["error"];
      }
  }
?>
