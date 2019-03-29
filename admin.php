<!DOCTYPE html>
    <html lang="fr">
        <head>
           
                <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
            <title>Se connecter</title>
        </head>
        <body>
        <h1>
            Connexion en cours
        </h1>
    </body>
</html>
<?php
    require('connect.php');
        
    if (isset($_POST['login']) && isset($_POST['pass'])) {
        $requete = "SELECT * FROM USER WHERE 1";
        $query = $bdPdo->prepare($requete);
        $obj = $bdPdo->query ($requete);
        foreach ($obj as $key => $array) {
                $valid_email = $array[0];
                $valid_password = $array[1];
            if ($valid_email == $_POST['login'] && $valid_password == $_POST['pass']) {
                $_SESSION['Connected'] = true;
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['pass'] = $_POST['pass'];
                header ('location: index.php');
                //header ('location: login_form.php');
                die;
            }
            
            
        }
    /*else {
        echo 'Les variables du formulaire ne sont pas déclarées.';
    }*/
            $_SESSION['Connected'] = false;
            $_SESSION['login'] = null;
            $_SESSION['pass'] = null;
            echo '<body onLoad="alert(\'Membre non reconnu...\')">';
            echo '<meta http-equiv="refresh" content="0;URL=login_form.php">';
    }
?>