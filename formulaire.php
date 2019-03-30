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
        <link rel="stylesheet" href="css/styles.css">
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


    <div class="container main-content">

        <h1 class="text-center textevert mb-5">Ajouter un nouvel article</h1>

        <?php 
            if($Connected == false){
                echo '<body onLoad="alert(\'Vous devez être connecté en mode éditeur pour faire cela !\')">';
                echo '<meta http-equiv="refresh" content="0;URL=login_form.php">';
            }
        ?>

        <div class="row">
            <div class="col-lg-2"></div>

            <form method="POST" action='saisie.php'>

                <center><label for="DtCreA"> Date de création </label><br/>
                <input type="date" name="DtCreA"></input> <br/><br/></center>

                <label for="NumArt"> Numéro d'article </label><br/>
                <textarea type="text" name="NumArt" cols="92"></textarea> <br/><br/>

                <label for="LibTitrA"> Titre </label><br/>
                <textarea type="text" name="LibTitrA" cols="92"></textarea> <br/><br/>

                <label for="LibChapoA"> Chapo </label><br/>
                <textarea type="text" name="LibChapoA" cols="92" rows="5"></textarea> <br/><br/>

                <label for="Parag1A"> Paragraphe 1 </label><br/>
                <textarea type="text" name="Parag1A" cols="92" rows="5"></textarea> <br/><br/>

                <label for="LibSsTitr1"> Sous-titre 1 </label><br/>
                <textarea type="text" name="LibSsTitr1" cols="92"></textarea><br/><br/>

                <label for="Parag2A"> Paragraphe 2 </label><br/>
                <textarea type="text" name="Parag2A" cols="92" rows="5"></textarea> <br/><br/>

                <label for="LibSsTitr2"> Sous-titre 2 </label><br/>
                <textarea type="text" name="LibSsTitr2" cols="92"></textarea><br/><br/>

                <label for="Parag3A"> Paragraphe 3 </label><br/>
                <textarea type="text" name="Parag3A" cols="92" rows="5"></textarea> <br/><br/>

                <label for="LibConclA"> Conclusion </label><br/>
                <textarea type="text" name="LibConclA" cols="92" rows="5"></textarea> <br/><br/>

                <label for="UrlPhotA"> Lien de la photo </label><br/>
                <textarea type="text" name="UrlPhotA" cols="92" ></textarea><br/><br/>

                <div class="row">
                    <div class="col-lg-6">
                        <center><label for="NumThem"> Thématique </label> <br/>
                        <select name="NumThem" id="NumThem">
                            <?php
                                while($obj = $them->fetch()) { ?>
                                    <option value="<?php  echo($obj[0]); ?>">
                                        <?php echo($obj[1]); ?>
                                    </option>
                            <?php } ?>           
                        </select> </center>
                    </div>
                    
                    <div class="col-lg-6">
                        <center><label for="NumLang"> Langue </label> <br/>
                        <select name="NumLang" id="NumLang">
                            <?php
                                while($obj = $lang->fetch()) { ?>
                                    <option value="<?php  echo($obj[0]); ?>">
                                        <?php echo($obj[1]); ?>
                                    </option>
                            <?php } ?>           
                        </select> <br/><br/> </center>
                    </div>
    
                </div>
               

                <center><input type="submit" value="AJOUTER" name="valid"></center>

                <br/>
                <br/>

            </form>

    </div> 

    </div>


        <form name="nouvmotcle" method="post" action="create/ajoutmotcle.php">
                <label for="LibMoCle" >AJOUTER UN MOT-CLE</label> : <input type="text" name="LibMoCle"/></input> <br/>
                <label for="NumMoCle" >NUMERO DU MOT-CLE</label> : <input type="text" name="NumMoCle"/></input> <br/>
                <label for="NumLang" >QUELLE LANGUE</label> : <input type="text" name="NumLang"/></input> <br/>
                <input name="valid" type="submit" value="AJOUTER">
    </form>

        <form name="nouvlang" method="post" action="create/ajoutlangue.php">
                <label for="Lib1Lang" >AJOUTER UNE LANGUE</label> : <input type="text" name="Lib1Lang"/></input> <br/>
                <label for="NumLang" >NUMERO DE LA LANGUE</label> : <input type="text" name="NumLang"/></input> <br/>
                <input name="valid" type="submit" value="AJOUTER">
    </form>

        <form name="nouvmotcle" method="post" action="create/ajoutangle.php">
                <label for="LibAngl" >AJOUTER UN ANGLE</label> : <input type="text" name="LibAngl"/></input> <br/>
                <label for="NumAngl" >NUMERO DE L'ANGLE</label> : <input type="text" name="NumAngl"/></input> <br/>
                <label for="NumLang" >QUELLE LANGUE</label> : <input type="text" name="NumLang"/></input> <br/>
                <input name="valid" type="submit" value="AJOUTER">
    </form>

        <form name="nouvmotcle" method="post" action="create/ajoutthem.php">
                <label for="LibThem" >AJOUTER UNE THEMATIQUE</label> : <input type="text" name="LibThem"/></input> <br/>
                <label for="NumThem" >NUMERO DE LA THEMATIQUE</label> : <input type="text" name="NumThem"/></input> <br/>
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


