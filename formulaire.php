<?php 
	
	require('functions.php');
    require('connect.php');
    require('session.php');

    $motcles = getMotCleForm();


    $requete1 = "SELECT * FROM LANGUE";
       $lang = $bdPdo->prepare($requete1);
       $lang->execute();

    $requete2 = "SELECT * FROM THEMATIQUE";
       $them = $bdPdo->prepare($requete2);
       $them->execute();

 ?>
		
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <link rel="shortcut icon" href="img/icone.ico">
</head>
<body>
    <a href="index.php">Retour à l'accueil</a>
    <br />
    <br />
    <?php 
        if($Connected == false){
            echo '<body onLoad="alert(\'Vous devez être connecté en mode éditeur pour faire cela !\')">';
            echo '<meta http-equiv="refresh" content="0;URL=login_form.php">';
        }
    ?>

	<form name="inscription" method="post" action="saisie.php">
        <label for="NumArt" >NUMERO DE TON ARTICLE</label> : <input type="text" name="NumArt"/></input> <br/>
		<label for="DtCreA" >Date</label> : <input type="date" name="DtCreA"/></input> <br/>
        <label for="LibTitrA" >Titre</label> : <input type="text" name="LibTitrA"/></input> <br/>
        <label for="LibChapoA" >Chapo</label> : <input type="text" name="LibChapoA"/></input> <br/>
        <label for="Parag1A" >Paragraphe 1</label> : <input type="text" name="Parag1A"/></input> <br/>
        <label for="LibSsTitr1" >Sous-titre 1</label> : <input type="text" name="LibSsTitr1"/></input> <br/>
        <label for="Parag2A" >Paragraphe 2</label> : <input type="text" name="Parag2A"/></input> <br/>
        <label for="LibSsTitr2" >Sous-titre 2</label> : <input type="text" name="LibSsTitr2"/></input> <br/>
        <label for="Parag3A" >Paragraphe 3</label> : <input type="text" name="Parag3A"/></input> <br/>
        <label for="LibConclA" >Conclusion</label> : <input type="text" name="LibConclA"/></input> <br/>
        <label for="UrlPhotA" >Lien de la photo</label> : <input type="text" name="UrlPhotA"/></input> <br/>

        <select name="NumLang" id="NumLang">
            <?php
                while($obj = $lang->fetch()) { ?>
                    <option value="<?php  echo($obj[0]); ?>">
                        <?php echo($obj[1]); ?>
                    </option>
                <?php } ?>           
        </select> <br/>


        <select name="NumThem" id="NumThem">
            <?php
                while($obj = $them->fetch()) { ?>
                    <option value="<?php  echo($obj[0]); ?>">
                        <?php echo($obj[1]); ?>
                    </option>
                <?php } ?>           
            </select> <br/>

        <input name="valid" type="submit" value="SUBMIT">
    </form>

        <form name="nouvmotcle" method="post" action="ajoutmotcle.php">
                <label for="LibMoCle" >AJOUTER UN MOT-CLE</label> : <input type="text" name="LibMoCle"/></input> <br/>
                <label for="NumMoCle" >NUMERO DU MOT-CLE</label> : <input type="text" name="NumMoCle"/></input> <br/>
                <label for="NumLang" >QUELLE LANGUE</label> : <input type="text" name="NumLang"/></input> <br/>
                <input name="valid" type="submit" value="AJOUTER">
    </form>

<!--    NumAngl		char(6)	
	   	NumThem		char(6)
	    NumLang		char(8) -->
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


