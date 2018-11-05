<?php
    
    class Session
    {
        public function connect($login,$password,$resLogin,$resPassword)
        {
            // On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
            $login_valide = $resLogin;
            $pwd_valide = $resPassword;
            // on teste si nos variables sont définies
            if (isset($login) && isset($password))
            {
                // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	            if ($login_valide == $login && $pwd_valide == $password)
	            {
                    // dans ce cas, tout est ok, on peut démarrer notre session
                    // on la démarre :)
		            session_start ();
		            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		            setcookie('login', $login, time() + 60);
		            setcookie('password', $password, time() + 60);
		            $_SESSION['login'] = $login;
		            $_SESSION['pwd'] = $password;
                    // on redirige notre visiteur vers une page de notre section membre
		            header ('location: page_membre.php');
                }
	            else
                {
                    // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		            echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		            // puis on le redirige vers la page d'accueil
		            echo '<meta http-equiv="refresh" content="0;URL=login.php">';
                }
            }
            else
            {
                echo 'Les variables du formulaire ne sont pas déclarées.';
            }
        }
        
        public function afterConnection()
        {
            session_start ();
            // On récupère nos variables de session
            if (isset($_SESSION['login']) && isset($_SESSION['pwd']) && isset($_COOKIE['login']) )
            {
                // On teste pour voir si nos variables ont bien été enregistrées
	            // On affiche un lien pour fermer notre session
	            echo '<a href="./logout.php">Déconnection</a>';
            }
            else
            {
                header ('location: login.php');
            }
        }
        
        public function logOut()
        {
            session_start ();
            // On détruit les variables de notre session
            session_unset ();
            // On détruit notre session
            session_destroy ();
            // On redirige le visiteur vers la page d'accueil
            header ('location: login.php');
        }
    }

?>