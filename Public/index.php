<!doctype html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            if(isset($_GET['page']))
            {
                switch ($_GET['page'])
                {
                    case 'inscription' : require_once('../App/View/inscription.php');
                    break;
                    case 'login' : require_once('../App/View/login');
                    break;
                    default : echo "Page n'existe pas";
                    break;
                }
                   
            }
        ?>
    </body>
</html>