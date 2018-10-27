<form method="POST" action="">
    <table>
        <tr>
            <td>
                Login
            </td>
            <td>
                <input type="text" name="login" placeholder="Votre login" />
            </td>
        </tr>
        <tr>
            <td>
                Votre mot de passe
            </td>
            <td>
                <input type="password" name="password" placeholder="Votre mot de passe" />
            </td>
        </tr>
        <tr>
            <td>
                Nom
            </td>
            <td>
                <input type="text" name="nom" placeholder="Votre nom" />
            </td>
        </tr>
        <tr>
            <td>
                Prenom
            </td>
            <td>
                <input type="text" name="prenom" placeholder="Votre prenom" />
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Inscrire" name="btInscrire"</td>
            <td><input type="reset" value="Annuler" name="btAnnuler"</td>
        </tr>
    </table>
</form>
<?php
    
    if(isset($_POST['btInscrire']))
    {
        if($_POST['btInscrire']==true)
        {
            require_once('../App/Controller/ClientController.php');
            if((isset($_POST['login'])) && (isset($_POST['password'])) && (isset($_POST['nom'])) && (isset($_POST['prenom'])))
            {
                $c=new ClientController();
                $c->ajouterClient($_POST['login'],$_POST['password'],$_POST['nom'],$_POST['prenom']);
            }
        }
    }
?>