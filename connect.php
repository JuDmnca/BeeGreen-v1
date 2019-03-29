<?php


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

    
           session_start();



?>

