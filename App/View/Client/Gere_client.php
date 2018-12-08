<?php
     require_once ('../App/Controller/ClientController.php');
     $c=new ClientController();
     $T=$c->getAllClient();
?>
<div style="padding-right: 1px "><div class="padding">
	<div class="container">
          <center>
               <h1>Gestion des clients</h1>
          </center>
          <table class="table table-striped table-dark">
               <thead>
                    <tr>
                         <th scope="col">Login</th>
                         <th scope="col">Nom</th>
                         <th scope="col">Prenom</th>
                         <th scope="col">Email</th>
                         <th scope="col">Supprimer</th>
                    </tr>
               </thead>
               <tbody>
                    
                    <script>
                         //function show(id)
                         //{
                              //document.location.href="http://localhost/SiteWebCommercial/Admin/Accueil.php?page="+id;
					function show(id)
					{
						swal
			               (
						     {
								title: "Are you sure?",
								text: "Voulez vous supprimer cet client ?",
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
												document.location.href="http://localhost/SiteWebCommercial/Admin/Accueil.php?page="+id;
							                    }
					                              else
					                              {
						                              swal("Suppression annulé");
											}
										}
				          );
					}            
                    </script>
                    <?php
                         foreach($T as $v)
                         {
                              echo "<tr>";
                              $login=$v{'login'};
                              $nom=$v{'nom'};
                              $prenom=$v{'prenom'};
                              $email=$v{'email'};
                              echo "<td> $login</td>";
                              echo "<td> $nom</td>";
                              echo "<td> $prenom</td>";
                              echo "<td> $email</td>";
                              ?>
                              <td><input type='submit' onclick="show('<?php echo $login  ?>');" value='Supprimer' /></td>
                              <?php
                              echo '</tr>';
                         }
                              ?>
               </tbody>
          </table>
     </div>
</div>
<?php
     if(isset($_GET['page']))
     {
          require_once('../App/Controller/ClientController.php');
		$c=new ClientController();
		$c->supprimer($_GET['page']);
		echo "<script>document.location.href='http://localhost/SiteWebCommercial/Admin/Accueil.php'</script>";
     }
?>