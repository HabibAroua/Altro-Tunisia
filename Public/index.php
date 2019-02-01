<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="https://getbootstrap.com/favicon.ico">
        <title>Altro TUNISIA</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" >
		<link href="css/sweetalert2.css" rel="stylesheet">
    </head>
    <body>
		<script src="javascript/sweetalert.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
        <script src="javascript/jquery-3.3.1.min.js"></script>
        <script src="javascript/jquery.min.js"></script>
        <script src="javascript/Alert.js"></script>
        <?php
            if(isset($_GET['page']))
            {
                switch ($_GET['page'])
                {
                    case 'inscription' : require_once('../App/View/default/inscription.php');
                    break;
                    case 'login' : require_once('../App/View/default/login.php');
                    break;
                    default : echo "Page n'existe pas";
                    break;
                }
            }
        ?>
    </body>
</html>