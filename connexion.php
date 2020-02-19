<?php

//Connexion vers la base de données

try {
$user = "root";
$pass = "";
$dbh = new PDO('mysql:host=localhost;dbname=PortFolio', $user, $pass);
    
} catch (PDOException $e) {
    print "Erreur de connexion: " . $e->getMessage() . "<br/>";
    die();
}



?>