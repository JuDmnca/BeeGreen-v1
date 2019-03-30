<?php 

	require('../connect.php');

 ?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<?php

	if ((isset($_POST['NumLang'])) && (isset($_POST['Lib1Lang'])))
	{
	
	if (isset($_POST['NumLang']) && !empty($_POST['NumLang'])) {
			$NumLang = $_POST['NumLang'];
		}

	if (isset($_POST['Lib1Lang']) && !empty($_POST['Lib1Lang'])) {
			$Lib1Lang = $_POST['Lib1Lang'];
		}
		
	if(isset($_POST['submit']));

	}
		
         // 4. Preparation de la requete
        $queryText = 'INSERT INTO THEMATIQUE (NumLang, Lib1Lang) VALUES (:NumLang, :Lib1Lang);';
        $query = $bdPdo->prepare($queryText);

        
       try {
			// 5. Lancement de la requete
        $query->execute(array(
          ':NumLang' => $NumLang,
          ':Lib1Lang' => $Lib1Lang,
          ));
		
		header('Location:../udlang.php');
		}

		catch (PDOException $e) {
			echo 'Echec de connexion : ' . $e->getMessage();
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
</html>
