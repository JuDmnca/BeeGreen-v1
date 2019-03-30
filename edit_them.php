
<?php
require_once('functions.php');
    
    $LibThem = $_GET['id'];

	$them = getThemEdit($LibThem);
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
<meta charset="utf-8">
<link rel="shortcut icon" href="img/icone.ico"> 
</head>

<body>
 
	
    <div class="container main-content">
        <h2> Modifier un Thematique</h2>
        <h6><?= $LibThem ?></h6>
        <form method="POST" action=<?= "functions.php?LibThem=".$LibThem ?>>

            <label for="LibTitrA"> Thématique </label><br/>
            <textarea  name="LibTitrA"><?= $them->LibThem ?></textarea> <br/><br/>

            <input type="submit" value="MODIFIER" name="edit_them_submit">

            <br/>
            <br/>

        </form>

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

