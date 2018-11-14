<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="https://getbootstrap.com/favicon.ico">
        <title>Altro TUNISIA</title>
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href=css/style.css" rel="stylesheet" >
    </head>
    <body>
        <?php
            if(isset($_GET['page']))
            {
                switch ($_GET['page'])
                {
                    case 'inscription' : require_once('../App/View/inscription.php');
                    break;
                    case 'login' : require_once('../App/View/login.php');
                    break;
                    default : echo "Page n'existe pas";
                    break;
                }
            }
        ?>
    </body>
</html>