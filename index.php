<?php

	require('functions.php');

	$article = getArticle();
	$acteurs = getActeurs();
	$clindoeil = getClindoeil();
	$diy = getDiy();
	$motcles = getMotCles();
	require('session.php');
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>BeeGreen - Accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<div class= "container">
		<div class= "row">
			<div class="col-md-4">
				<a class="navbar-brand" href="index.php"><img src="logo.png" width="200px" height="100px"></a>
			</div>
			<div class="col-lg-4"></div>
			<div class=" text-center mt-3 col-lg-4">
				<?php 
				if($Connected == true){
           		?>
           		<br/>
           		<div class="row">
           		<div class="col-lg-6 text-center">
           			<a class='connect' href='formulaire.php'>Ajouter un nouvel article</a>
           			</div>
            	<br/>
            	<div class="col-lg-6">
            		<form method="get" action="disconnect.php">
                		<button type="submit">Déconnexion</button>
           			 </form>
            	</div>
            	</div>
          		<?php } 
          			else{
           		?>
             	<br/>
           			<form method="get" action="login_form.php">
                		<button type="submit">Connexion</button>
            		</form>
           		<?php }
           		?>
       </div>
   </div>


		<div class="row">
			<div class="col-sm-1">
				<p class="bordure_verticale"></p>
			</div>

			<nav class=" col-md-11 haut"> <!-- DEBUT NAV-->

				<div class="row">
		<img src="cercle.png" class='rond'>
		<a class="nav-link" href="#">Accueil</a>
		  		<div class='row caroussel'>
		  			<?php foreach($motcles as $motcles): ?>
						<div class=" mr-4">
		  				<a href="motcle.php?NumMoCle=<?= $motcles->NumMoCle ?>">#<?= $motcles->LibMoCle ?></a>
		  				</div>
		  			<?php endforeach; ?>
		  			
		  		</div>
		  		<div class="row ligne caroussel">
		  			<a href="udthem.php">Afficher toutes les thématiques</a>
		  			</div>
		  		<div class="row ligne caroussel">
		  			<a href="udlang.php">Afficher toutes les langues</a>
		  			</div>
		  		<div class="row ligne caroussel">
		  			<a href="udangle.php">Afficher toutes les angles</a>
		  		</div>
		  		</div>

		  		<div class="row">
		 <img src="cercle.png" class='rond'>
		 <a class="nav-link" href="evenements.php">Evènements</a>
		  		<div class='row caroussel'>

		  			<?php foreach($article as $article): ?>
						<div class=" carte col-md-3 mt-3">		 				
		  				<h6><?= $article->LibTitrA ?></h6>
		  				<img width=100px class='img-fluid imageaccueil' src="<?= $article->UrlPhotA ?> ">
		  				<p><?= $article->LibChapoA ?></p>
		  				<time><?= $article->DtCreA ?></time>
		  				<a href="article.php?NumArt=<?= $article->NumArt ?>">Lire</a>
		  			</div>
		  			<?php endforeach; ?>

		  		</div>
		  		</div>


		  		<div class="row">
		<img src="cercle.png" class='rond'>
		<a class="nav-link" href="acteur.php">Acteurs clé</a>
		  		<div class='row caroussel'>

		  			<?php foreach($acteurs as $acteurs): ?>
						<div class=" carte col-md-3">
		  				<img src="fridays.jpg" class="imageaccueil">
		  				<h6><?= $acteurs->LibTitrA ?></h6>
		  				<p><?= $acteurs->LibChapoA ?></p>
		  				<time><?= $acteurs->DtCreA ?></time>
		  				<a href="article.php?NumArt=<?= $article->NumArt ?>">Lire</a>
		  			</div>
		  			<?php endforeach; ?>

		  		</div>
		  		</div>


		  		<div class="row">
		<img src="cercle.png" class='rond'>
		<a class="nav-link" href="clindoeil.php">Clin d'oeil, insolite</a>
		  		<div class='row caroussel'>

		  			<?php foreach($clindoeil as $clindoeil): ?>
		  			<div class=" carte col-md-3">
		  			<img src="fridays.jpg" class="imageaccueil">
		  			<h6><?= $clindoeil->LibTitrA ?></h6>
		  			<p><?= $clindoeil->LibChapoA ?></p>
		  			<time><?= $clindoeil->DtCreA ?></time>
		  			<a href="article.php?NumArt=<?= $clindoeil->NumArt ?>">Lire</a>
		  			</div>
		  			<?php endforeach; ?>
		  		</div>
		  		</div>

		  		<div class="row">
		<img src="cercle.png" class='rond'>
			<a class="nav-link" href="diy.php">Do It Yourself</a>
		  		<div class='row caroussel'>
		  			<?php foreach($diy as $diy): ?>
						<div class=" carte col-md-3 mt-3">		 				
		  				<h6><?= $diy->LibTitrA ?></h6>
		  				<img width=100px class='img-fluid imageaccueil' src="<?= $diy->UrlPhotA ?> ">
		  				<p><?= $diy->LibChapoA ?></p>
		  				<time><?= $diy->DtCreA ?></time>
		  				<a href="article.php?NumArt=<?= $diy->NumArt ?>">Lire</a>
		  			</div>
		  			<?php endforeach; ?>
		  		</div>
		  		</div>
			</nav>
		</div>

		<div class="row pt-4 pb-4"></div>


		<div class="row boutique shop">

				<div class="col-lg-12">
				<h3 class="text-center textevert">SHOP</h3>
				

				<div class="row pt-4 ">

     			<div class="col-lg-2">
      			<a href="https://www.being-human-clothing.eu/product/tee-shirt-jungle/" class="product-link" target="_blank" rel="nofollow">
        		<title>Tshirt Jungle</title>
        		<center><img class="er" src="https://www.being-human-clothing.eu/wp-content/uploads/2018/03/BHTS8184_1.jpg"  width= 100vw></center>
      			<h6 class="text-center ">T-Shirt Jungle</h6>
      			</div>


     			<div class="col-lg-2">
      	      	<a href="https://www.ekyog.com/jean-gisele-denim-light.html" class="product-link" target="_blank" rel="nofollow">
      	      	<center><img src="https://ekyog-ekyog-storage.omn.proximis.com/Imagestorage/imagesSynchro/0/0/6ee6d2d8743ace397f0bfcd5cf7bea3c5bb0aa27_E138_JEA_U916.jpg" width= 100vw></center>
				<h6 class="text-center ">Jupe Ekyog</h6>
      			</div>

      			<div class="col-lg-2">
      	      	<a href="https://www.ekyog.com/veste-tahani-light-blue.html" class="product-link" target="_blank" rel="nofollow">
      	      	<center><img src="https://ekyog-ekyog-storage.omn.proximis.com/Imagestorage/imagesSynchro/0/0/8c8176c0af4c83515518bfb161f27066e41f53b4_F033_VES_U922.jpg" width= 100vw></center>
				<h6 class="text-center ">Veste Ekyog</h6>
      			</div>

      			<div class="col-lg-2">
      	      	<a href="https://www.skfk-ethical-fashion.com/fr/robe-veste-marittipi" class="product-link" target="_blank" rel="nofollow">
      	      	<center><img src="https://www.skfk-ethical-fashion.com/cdnassets/images/products/S19/dress-hemp-marittipi-skfk-wdr00770-dn-fsb.jpg" width= 100vw></center>
				<h6 class="text-center ">Robe SKFK</h6>
      			</div>


				<div class="col-lg-2">
      	      	<a href="https://www.skfk-ethical-fashion.com/fr/combinaison-alizia" class="product-link" target="_blank" rel="nofollow">
      	      	<center><img src="https://www.skfk-ethical-fashion.com/cdnassets/images/products/S19/trouser-lyocell-alizia-skfk-wtr00246-2n-ofb.jpg" width= 100vw></center>
				<h6 class="text-center ">Combinaison SKFK</h6>
      			</div>

      			<div class="col-lg-2">
      	      	<a href="https://www.skfk-ethical-fashion.com/fr/chemise-saratsu" class="product-link" target="_blank" rel="nofollow">
      	      	<center><img src="https://www.skfk-ethical-fashion.com/cdnassets/images/products/S19/shirt-viscose-saratsu-skfk-wsh00256-10-ofb.jpg" width= 100vw></center>
				<h6 class="text-center ">Chemise SKFK</h6>
      			</div>
      			</div>
      		</div>
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