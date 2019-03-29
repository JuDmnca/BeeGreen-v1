<?php

// fonction qui récupère tous les évènements
function getArticle()
{
	require('connect.php');
	$req = $bdPdo->prepare("SELECT NumArt, LibTitrA, LibChapoA, DtCreA, UrlPhotA FROM ARTICLE, THEMATIQUE WHERE ARTICLE.NumThem = THEMATIQUE.NumThem AND THEMATIQUE.NumThem = '2ZQ4' ORDER BY DtCreA DESC");
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}
// Fonction qui récupère un événement
function getArticles($NumArt)
{
	require('connect.php');
	$req = $bdPdo->prepare('SELECT * FROM article WHERE NumArt = ?');
	$req->execute(array($NumArt));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	else
		header('Location: index.php');
	$req->closeCursor();
}

	/* EDITER ET SUPPRIMER UN ARTICLE */

	if(isset($_POST['edit_article_submit']))
	{   
	   EditArticle();
	}
	if(isset($_POST['delete_submit']))
	{   
	   DeleteArticle();
	}

	function EditArticle(){
    require('connect.php');
    $article = getArticles($_GET['NumArt']);
    $query_edit = $bdPdo->prepare('UPDATE ARTICLE SET LibTitrA = :LibTitrA, LibChapoA = :LibChapoA, Parag1A = :Parag1A, LibSsTitr1 = :LibSsTitr1, Parag2A = :Parag2A, LibSsTitr2 = :LibSsTitr2, Parag3A = :Parag3A, LibConclA = :LibConclA , UrlPhotA = :UrlPhotA WHERE NumArt=(:NumArt)');
    $query_edit->execute(array( 
        ':NumArt' => $_GET['NumArt'],
        ':LibTitrA' => $_POST['LibTitrA'], 
        ':LibChapoA' => $_POST['LibChapoA'],
        ':Parag1A' => $_POST['Parag1A'],
        ':LibSsTitr1' => $_POST['LibSsTitr1'],
        ':Parag2A' => $_POST['Parag2A'],
        ':LibSsTitr2' => $_POST['LibSsTitr2'],
        ':Parag3A' => $_POST['Parag3A'],
        ':LibConclA' => $_POST['LibConclA'],
        ':UrlPhotA' => $_POST['UrlPhotA'])); 
    header('Location:article.php?NumArt='.$_GET['NumArt']);
}


//fonction qui répuère tous les acteurs clé
function getActeurs()
{
	$server ="mysql:host=localhost;dbname=blogart";
	$user = "root" ;
    $password = ""; 

    try {
        $bdPdo = new PDO($server, $user, $password);
    }

    catch (PDOException $e) {
        echo 'Echec de connexion : ' . $e->getMessage();
    }

    $bdPdo->query('SET NAMES UTF8');
	$req = $bdPdo->prepare("SELECT NumArt, LibTitrA, LibChapoA, DtCreA, UrlPhotA FROM ARTICLE, THEMATIQUE WHERE ARTICLE.NumThem = THEMATIQUE.NumThem AND THEMATIQUE.NumThem = '76D1' ORDER BY DtCreA DESC");
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}

//fonction qui récupère un acteur clé
function getActeur($NumArt)
{
	require('connect.php');
	$req = $bdPdo->prepare('SELECT * FROM acteur WHERE NumArt = ?');
	$req->execute(array($NumArt));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	else
		header('Location: index.php');
	$req->closeCursor();
}

// fonction qui récupère tous les clins d'oeil
function getClindoeil()
{
	$server ="mysql:host=localhost;dbname=blogart";
	$user = "root" ;
    $password = ""; 

    try {
        $bdPdo = new PDO($server, $user, $password);
    }

    catch (PDOException $e) {
        echo 'Echec de connexion : ' . $e->getMessage();
    }
	$req = $bdPdo->prepare("SELECT NumArt, LibTitrA, LibChapoA, DtCreA, UrlPhotA FROM ARTICLE, THEMATIQUE WHERE ARTICLE.NumThem = THEMATIQUE.NumThem AND THEMATIQUE.NumThem = 'F67A' ORDER BY DtCreA DESC");
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}

// Fonction qui récupère un événement
function getArticleClindoeil($NumArt)
{
	require('connect.php');
	$req = $bdPdo->prepare('SELECT * FROM article WHERE NumArt = ?');
	$req->execute(array($NumArt));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	else
		header('Location: index.php');
	$req->closeCursor();
}

// fonction qui récupère tous les diy
function getDiy()
{
	$server ="mysql:host=localhost;dbname=blogart";
	$user = "root" ;
    $password = ""; 

    try {
        $bdPdo = new PDO($server, $user, $password);
    }

    catch (PDOException $e) {
        echo 'Echec de connexion : ' . $e->getMessage();
    }
	$req = $bdPdo->prepare("SELECT NumArt, LibTitrA, LibChapoA, DtCreA, UrlPhotA FROM ARTICLE, THEMATIQUE WHERE ARTICLE.NumThem = THEMATIQUE.NumThem AND THEMATIQUE.NumThem = 'C3G8' ORDER BY DtCreA DESC");
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}


// POUR AFFICHER LES MOTS-CLE SUR L'INDEX
function getMotCles()
{
	$server ="mysql:host=localhost;dbname=blogart";
	$user = "root" ;
    $password = ""; 

    try {
        $bdPdo = new PDO($server, $user, $password);
    }

    catch (PDOException $e) {
        echo 'Echec de connexion : ' . $e->getMessage();
    }

    $bdPdo->query('SET NAMES UTF8');
	$req = $bdPdo->prepare("SELECT LibMoCle, NumMoCle FROM MOTCLE ORDER BY LibMoCle");
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}

function getMC($NumMoCle)
{
	require('connect.php');
	$req = $bdPdo->prepare('SELECT * FROM ARTICLE, MOTCLEARTICLE WHERE NumMoCle = :NumMoCle AND ARTICLE.NumArt = MOTCLEARTICLE.NumArt');
	$req->execute(array(
		':NumMoCle' => $NumMoCle));
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}


function getMotCleForm() 
{
	$server ="mysql:host=localhost;dbname=blogart";
	$user = "root" ;
    $password = ""; 

    try {
        $bdPdo = new PDO($server, $user, $password);
    }

    catch (PDOException $e) {
        echo 'Echec de connexion : ' . $e->getMessage();
    }

    $bdPdo->query('SET NAMES UTF8');
	$req = $bdPdo->prepare("SELECT LibMoCle, NumMoCle FROM MOTCLE ORDER BY LibMoCle");
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}
	
	/* PARTIE THEMATIQUE */

	function getThemUd()
	{
	require('connect.php');
	$req = $bdPdo->prepare("SELECT * FROM THEMATIQUE ORDER BY LibThem");
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
	}

	function getThemEdit($LibThem)
{
	require('connect.php');
	$req = $bdPdo->prepare('SELECT * FROM THEMATIQUE WHERE LibThem = ?');
	$req->execute(array($LibThem));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	// else
	// 	header('Location: index.php');
	// $req->closeCursor();
}

function getThemDelete($NumThem)
{
	require('connect.php');
	$req = $bdPdo->prepare('SELECT * FROM THEMATIQUE WHERE NumThem = ?');
	$req->execute(array($NumThem));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	// else
	// 	header('Location: index.php');
	// $req->closeCursor();
}

	/* PARTIE LANGUE */

	function getLangUd()
	{
	require('connect.php');
	$req = $bdPdo->prepare("SELECT * FROM LANGUE ORDER BY Lib1Lang");
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
	}

	function getLangDelete($NumLang)
{
	require('connect.php');
	$req = $bdPdo->prepare('SELECT * FROM LANGUE WHERE NumLang = ?');
	$req->execute(array($NumLang));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	// else
	// 	header('Location: index.php');
	// $req->closeCursor();
}


	/* PARTIE ANGLE */

	function getAngleUd()
	{
	require('connect.php');
	$req = $bdPdo->prepare("SELECT * FROM ANGLE ORDER BY LibAngl");
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
	}

	function getAnglEdit($NumAngl)
{
	require('connect.php');
	$req = $bdPdo->prepare('SELECT * FROM ANGLE WHERE NumAngl = ?');
	$req->execute(array($NumAngl));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	// else
	// 	header('Location: index.php');
	// $req->closeCursor();
}

function getAnglDelete($NumAngl)
{
	require('connect.php');
	$req = $bdPdo->prepare('SELECT * FROM ANGLE WHERE NumAngl = ?');
	$req->execute(array($NumAngl));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	// else
	// 	header('Location: index.php');
	// $req->closeCursor();
}

if(isset($_POST['edit_angle_submit']))
	{   
	   EditAngle();
	}

	function EditAngle(){

    $server ="mysql:host=localhost;dbname=blogart";
	$user = "root" ;
    $password = ""; 

    try {
        $bdPdo = new PDO($server, $user, $password);
    }

    catch (PDOException $e) {
        echo 'Echec de connexion : ' . $e->getMessage();
    }
    $angle = getAnglEdit($_GET['NumAngl']);
    $query_edit = $bdPdo->prepare('UPDATE ANGLE SET LibAngl = :LibAngl WHERE NumAngl=(:NumAngl)');
    $query_edit->execute(array( 
        ':NumAngl' => $_GET['id'],
        ':LibAngl' => $_POST['LibAngl'], )); 
    header('Location:edit_angle.php?NumAngl='.$_GET['NumAngl']);
}






