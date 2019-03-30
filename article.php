<?php

  require_once('functions.php');

		extract($_GET);
		$NumArt = strip_tags($NumArt);

		$article = getArticles($NumArt);
	?>
<a name="top"></a>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8" />
		<title><?= $article->LibTitrA ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/stylesarticle.css">
  <link rel="shortcut icon" href="img/icone.ico">
	</head>

	<body>

<div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container">
              <a class="navbar-brand" href="index.php"><img src="logo.png" width="200px" height="100px"></a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                     
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" href="evenements.php">Événements</a>
                        </li>
                        
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" href="acteur.php">Acteurs clés</a>
                        </li>

            <li class="nav-item" role="presentation">
                          <a class="nav-link" href="clindoeil.php">Clin d'oeil</a>
                        </li>

            <li class="nav-item" role="presentation">
                          <a class="nav-link" href="diy.php">DIY</a>
                        </li>
                      </ul>
                </div>
            </div>
        </nav>
    </div>
  
  <div class="container">
    <div class="row">
      <div class="col-lg-12" align="center">    
      <br>
        <h1><?= $article->LibTitrA ?></h1>
      </div>
    </div>
      
      <br>
      
    <div class="row">
      <div class="col-lg-12" align="center">
        <img width=400px class='img-fluid' src="<?= $article->UrlPhotA ?> ">
      </div>
    </div>

      <br>
    <div class ="col-lg-12" align="center">
        <h4 class="chapo"><?= $article->LibChapoA ?></h4>
    </div>
      <br>
      <div class="col-lg-12" align="left">
        <p><?= $article->Parag1A ?></p>
      </div>

      <br>

      <div class ="col-lg-12" align="left">
        <h5 class="sous-titre"><strong><?= $article->LibSsTitr1 ?></strong></h5>
      </div>
      <br>
      
      <div class="col-lg-12" align="left">
        <p><?= $article->Parag2A ?></p>
      
      </div>
      

      <br>

      <div class ="col-lg-12" align="left">
        <h5 class="sous-titre"><strong><?= $article->LibSsTitr2 ?></strong></h5>
      </div>
      
      <br>
      
      <div class="col-lg-12" align="left">
        <p><?= $article->Parag3A ?></p>

        <br>

        <h6><?= $article->LibConclA ?></h6>
        
        <br><br><br>
        
        <p>
          <em>DE MENDONCA Julie, GUYON Clélia, IDIART Vanina, HIRT Lucas, GOURSAUD Marie</em>
        </p>
        <p><time><em><?= $article->DtCreA ?></em></time></p>

        <div class="row">
        <div class="col-lg-2">
          <button type="button" class="btn btn-light">
          <a href="#" class="like-counter">J'aime</a>
          <span class="click-text"><a id="clicks"></a></span>
        </button>
        </div>
        
        <div class="col-lg-2">
        <form method="POST" action= <?= "edit/edit_article.php?NumArt=".$NumArt ?>  >
            <input  type="submit" class="btn btn-light" value="Modifier" name="edit_submit"/>
        </form>
        </div>

        <div class="col-lg-2">
        <form method="POST" action= <?= "delete/delete_article.php?NumArt=".$NumArt ?>  >
            <input class="btn btn-light" type="submit" value="Supprimer" name="edit_submit"/>
        </form>
        </div>

        </div>
      </div>

    </div>

  </div>

  <div class="container">
      <div>
          
          <div class="comment-title">
            <p>Commentaires</p>
            </div>
              <?php $read = fopen("com.txt", "r+t");
               echo fread($read, 1024);
               fclose($read); ?>
      </div>
      



      <div>
                <form action="" method="POST">
          
          <div class="comment-title">
                        <p>Laisser un commentaire</p>
                    </div>
                    
                    <div class="row">
            
            <div class="col-12 col-lg-6">
              
                            <input type="text" class="form-control Input" name="Name" id="nom" placeholder="Nom*" required>
                        </div>
                        
                        <div class="col-12 col-lg-6">
                            <input type="email" class="form-control Input" name="Email" id="email" placeholder="Email*" required>
                        </div>
                        
                        <br><br><br>
                        
                        <div class="col-12">
                             <textarea name="Comment" class="form-control Input" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                        </div>

                        <div class="col-12">
                            <br>
                            <button type="submit" name="Submit" class=" Submit btn btn-light">Envoyer</button>
                        </div>
                    
                    </div>
              </form>
            </div>
  </div>
    


<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="bootstrap" data-lang="fr" data-ef_voting="heartbeat" data-identifier="item_1" data-show_like_label="false" data-dislike_enabled="false" data-icon_dislike_show="false" data-counter_clickable="true" data-counter_padding="0"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->


<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "En train de copier: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copié dans le presse papier";
}
</script>


<?php
 
 if(isset($_POST['Submit'])){
  print "<h1> Votre commentaire a bien été envoyé !</h1>";

  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("com.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("com.txt", "w+");
  $string = "<b>".$Name."</b><br>". $Email. "<br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }



?>



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

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>  

</html>






























