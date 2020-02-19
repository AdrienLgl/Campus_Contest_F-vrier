<?php    
    
    //Réinitialisation des messages par l'administrateur


    $username = "root";
    $password = "";
    $dbname = "Portfolio";
    $servername = "localhost";


	$conn = new mysqli($servername, $username, $password, $dbname);


 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
 $requete2 = "TRUNCATE TABLE contact";

 echo "Messages réinitialisés";

 $res = $conn->query($requete2);
	
	
	
	
 $conn->close();
	
	?>