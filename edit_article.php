
<!DOCTYPE html>
<?php

require_once('functions.php');
    
    $NumArt = $_GET['NumArt'];
	$article = getArticles($NumArt);

?>
<html>

<head>
    <title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>
 
	
    <div class="container main-content">
        <h2> Modifier un Article</h2>
        <form method="POST" action=<?= "functions.php?NumArt=".$NumArt ?>>

            <label for="LibTitrA"> Titre </label><br/>
            <textarea  name="LibTitrA"><?= $article->LibTitrA ?></textarea> <br/><br/>

            <label for="LibChapoA"> Chapo </label><br/>
            <textarea name="LibChapoA" cols="110" rows="5"><?= $article->LibChapoA ?></textarea> <br/><br/>

            <label for="Parag1A"> Paragraphe 1 </label><br/>
            <textarea name="Parag1A" cols="110" rows="5"><?= $article->Parag1A ?></textarea> <br/><br/>

            <label for="LibSsTitr1"> Sous-titre 1 </label><br/>
            <textarea name="LibSsTitr1"><?= $article->LibSsTitr1 ?></textarea><br/><br/>

            <label for="Parag2A"> Paragraphe 2 </label><br/>
            <textarea name="Parag2A" cols="110" rows="5"><?= $article->Parag2A ?></textarea> <br/><br/>

            <label for="LibSsTitr2"> Sous-titre 2 </label><br/>
            <textarea type="text" name="LibSsTitr2"><?= $article->LibSsTitr2 ?></textarea><br/><br/>

            <label for="Parag3A"> Paragraphe 3 </label><br/>
            <textarea name="Parag3A" cols="110" rows="5"><?= $article->Parag3A ?></textarea> <br/><br/>

            <label for="LibConclA"> Conclusion </label><br/>
            <textarea name="LibConclA" cols="110" rows="5"><?= $article->LibConclA ?></textarea> <br/><br/>

            <label for="UrlPhotA"> Lien de la photo </label><br/>
            <textarea name="UrlPhotA" cols="110" rows="5"><?= $article->UrlPhotA ?></textarea><br/><br/>


            <input type="submit" value="MODIFIER" name="edit_article_submit">

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

