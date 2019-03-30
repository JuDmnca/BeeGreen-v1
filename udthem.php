<?php

	require('functions.php');
	$them = getThemUd();



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Thématique</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="shortcut icon" href="img/icone.ico">
</head>
<body>
	<nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="index.php"><img src="img/logo.png" width="200px" height="100px"></a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only"></span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="evenements.php">Événements</a>
                        </li>
                        
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="acteur.php">Acteurs clés</a>
                        </li>

                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="clindoeil.php">Clin d'oeil</a>
                        </li>

                        <li class="nav-item" role="presentation">
                          <a class="nav-link " href="diy.php">DIY</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
	<h1 class="text-center textevert mb-5">Les thématiques:</h1>

	<div class="container">

		<center><form name="nouvmotcle" method="post" action="create/ajoutthem.php">
                <label for="LibThem" >Nom de la thématique</label> : <input type="text" name="LibThem"/></input> <br/>
                <label for="NumThem" >Numéro de la thématique</label> : <input type="text" name="NumThem"/></input> <br/>
                <label for="NumLang" >Langue</label> : <input type="text" name="NumLang"/></input> <br/>
                <input name="valid" type="submit" value="AJOUTER">
    </form></center>


	<?php foreach($them as $them): ?>

    <div class="row">

            <div class=col-lg-1></div>

            <div class=col-lg-8>
                  <h6><?= $them->LibThem ?></h6>
            </div>

            <div class=col-lg-1>
                   <a class="btn btn-light" href="edit/edit_them.php?id=<?= $them->LibThem ?>">Modifier</a>
            </div>

            <div class=col-lg-2>
              <a class="btn btn-light" href="delete/delete_them.php?id=<?= $them->NumThem ?>">Supprimer</a>
            </div>
            
        </div><br>

	<?php endforeach; ?>

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
                    <a class="lienf" href="https://drive.google.com/file/d/1kj6wac6aH3mPWYIQ7p_dlZZs4KY3Hiwm/view?usp=sharing">Mentions légales</a>
                </p>
                <p class="pf">
                    <a class="lienf" href="https://drive.google.com/file/d/1vOBz3_6j_dNW78-bgPx8GZ8DRb2BEZNV/view?usp=sharing">CGU</a> 
                </p>
                <p class="pf">
                    <a class="lienf" href="https://drive.google.com/file/d/1CX27Xydu31gNUay2aPEyumlJpJkTvgZf/view?usp=sharing">Politique de confidentialité</a> 
                </p>
            
            </div>
        </div>


        <div class="container text-center mb-4 mt-4">
        © 2019 Copyright : BeeGreen      
        </div>

      </footer>
</body>
</html>
