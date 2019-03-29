<?php

  require_once('functions.php');

  $article = getDIY();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>DIY</title>
</head>
<body>


	<div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="index.php"><img src="logo.png" width="200px" height="100px"></a>
            	<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only"></span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        
                        <li class="nav-item" role="presentation">
                        	<a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        
                        <li class="nav-item" role="presentation">
                        	<a class="nav-link " href="evenements.php">Événements</a>
                        </li>
                        
                        <li class="nav-item" role="presentation">
                        	<a class="nav-link" href="acteur.php">Acteurs clés</a>
                        </li>

						<li class="nav-item" role="presentation">
                        	<a class="nav-link" href="clindoeil.php">Clin d'oeil</a>
                        </li>

						<li class="nav-item" role="presentation">
                        	<a class="nav-link active" href="diy.php">DIY</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

				<h1 class="text-center textevert">Les DIY </h1>

				<div class="container">

					<?php foreach($article as $article): ?>
						<div class=" carte col-md-3">
							<img src="fridays.jpg" class="imageaccueil">
							<h6><?= $article->LibTitrA ?></h6>
							<p><?= $article->LibChapoA ?></p>
							<time><?= $article->DtCreA ?></time>
							<a href="article.php?NumArt=<?= $article->NumArt ?>">Lire</a>
					   </div>
					<?php endforeach; ?>

	</div>
</body>
</html>
<br>
	<footer class="page-footer">

	    <div style="background-color: #62997A;">
	      <div class="container">
	        <div class="row py-2 align-items-center">
	           
	          <div class="col-md-12 text-center">
	            <a class="ins-ic" href="instagram.com">
	              <i class="fab fa-instagram"> Rejoignez-nous </i>
	            </a>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="container">
	        <div class="col-md-12 liensf">
	        	<p class="pf">
	        		<a class="lienf" href="#!">Mentions légales</a>
	        	</p>
	        	<p class="pf">
					<a class="lienf" href="#!">Cookies</a> 
	            </p>
	        	<p class="pf">
	        		<a class="lienf" href="#!">Contact</a> 
	        	</p>
	        </div>
	    </div>


	    <div class="container text-center mb-4 mt-4">
	    © 2019 Copyright : BeeGreen	     
	    </div>

	  </footer>





	

</body>
</html>

</body>
</html>