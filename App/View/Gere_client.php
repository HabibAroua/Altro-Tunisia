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
                              echo "<td><button>Supprimer</button></td>";
                              echo '</tr>';
                         }
                    ?>
               </tbody>
          </table>
     </div>
</div>
