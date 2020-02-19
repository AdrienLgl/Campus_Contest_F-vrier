<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PortFolio";
$prenom = $_POST['Prénom'];
$nom = $_POST['Nom'];
$pays = $_POST['country'];
$message = $_POST['subject'];
$mail = $_POST['mail'];
$date = $_POST['date'];

$message2 = addslashes($message);

 $conn = new mysqli($servername, $username, $password, $dbname);
 $conn -> set_charset("utf8");
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
 $sql = "INSERT INTO contact (prenom, nom, pays, message, mail, date)
 VALUES ('$prenom', '$nom', '$pays', '$message2', '$mail', '$date')";

 
 if ($conn->query($sql) === TRUE) {
     echo "Votre message a bien été envoyé";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();



 
















?>