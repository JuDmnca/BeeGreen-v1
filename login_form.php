<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Connexion</title>
                <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <link rel="shortcut icon" href="img/icone.ico">
        </head>
        <body>

        <?php
    require ('connect.php');
        if (isset($_SESSION['Connected']) && !empty($_SESSION['Connected'])) {
            $Connected = $_SESSION['Connected'];
        }
        else {
            $Connected = false;
        }
?>
        
    <div class="col-lg-12">
        <center><h1 class="policemoche">Se connecter</h1>
    </div>

    <div class="wrapper fadeInDown">
    <div id="formContent">
        <form action="admin.php" method="post">
            <div class="login">
                <input type="text" class="fadeIn second btncn" name="login" placeholder="Identifiant">
                <input type="text"  class="fadeIn third btncn" name="pass" placeholder="Mot de passe">
                <input type="submit" class="fadeIn fourth" value="Connexion">
            </div>
        </form>
    </div>
    </div>

        <footer class="page-footer">

        <div style="background-color: #62997A;">
          <div class="container">
            <div class="row py-2 align-items-center">
               
              <div class="col-md-12 text-center">
                <a class="ins-ic" href="https://www.instagram.com/bee_greenbdx/" target="blank">
                  <i class="fab fa-instagram"> Rejoignez-nous </i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
            <div class="col-md-12 liensf">
                <p class="pf">
                    <a class="lienf" target="blank" href="https://drive.google.com/file/d/1kj6wac6aH3mPWYIQ7p_dlZZs4KY3Hiwm/view?usp=sharing">Mentions légales</a>
                </p>
                <p class="pf">
                    <a class="lienf" target="blank" href="https://drive.google.com/file/d/1vOBz3_6j_dNW78-bgPx8GZ8DRb2BEZNV/view?usp=sharing">CGU</a> 
                </p>
                <p class="pf">
                    <a class="lienf" target="blank" href="https://drive.google.com/file/d/1CX27Xydu31gNUay2aPEyumlJpJkTvgZf/view?usp=sharing">Politique de confidentialité</a> 
                </p>
            
            </div>
        </div>


        <div class="container text-center mb-4 mt-4">
        © 2019 Copyright : BeeGreen      
        </div>

      </footer>
    </body>
</html>
