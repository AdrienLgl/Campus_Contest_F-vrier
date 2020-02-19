<?php
 
 $tab = array($_POST['Prénom'], $_POST['Nom'], $_POST['statut'], $_POST['note'], $_POST['subject']);


 $nom = $_POST['Nom'];
 $prenom = $_POST['Prénom'];
 $statut = $_POST['statut'];
 $note = $_POST['note'];
 $message = $_POST['subject'];

 $message2 = addslashes($message);
 $id = 0;

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "PortFolio";

 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
 $sql = "INSERT INTO avis (prenom, nom, statut, note, message)
 VALUES ('$prenom', '$nom', '$statut', '$note', '$message2')";
 
 if ($conn->query($sql) === TRUE) {
     echo "Votre avis a bien été envoyé";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();

?>