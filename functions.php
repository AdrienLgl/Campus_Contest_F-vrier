<?php



function avis(){


$user = "root";
$pass = "";

 //Count des lignes

 $bdd2 = new PDO('mysql:host=localhost;dbname=PortFolio', $user, $pass);

 $requete2 = $bdd2->query('SELECT COUNT(*) as count FROM Avis');
 
 while ($data2 = $requete2->fetch()){
    

 $br = $data2['count']+1;

            }
    

 $requete2->closeCursor();

 $id = 1;

 while ($id<$br){

    //Requête vers la base de données

    $bdd = new PDO('mysql:host=localhost;dbname=PortFolio', $user, $pass);

    $requete = $bdd->query('SELECT * FROM Avis WHERE id_formulaire = "'.$id.'"');
    
    while ($data = $requete->fetch()){
        
    //Récupération des données

       $nom = $data['nom'];
       $prenom = $data['prenom'];
       $note = $data['note'];
       $message = $data['message'];
       $statut = $data['statut'];

   }
        
        $requete->closeCursor();

        include 'Includes/Avis.php';
    
        $id = $id+1;
    }

}



function couleur(){

    //Fonction permettant d'afficher les notes sélectionnées par l'utilisateur dans la partie Recommandations
    
    global $note;
    if($note==1){
        echo('
        <a href="#1" title="Donner 1 étoile">☆</a>
                    
        <a href="#2" title="Donner 2 étoiles">☆</a>
                    
        <a href="#3" title="Donner 3 étoiles">☆</a>
                   
        <a href="#4" title="Donner 4 étoiles">☆</a>
                   
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');

    }elseif($note==2){
        echo('
        <a href="#1" title="Donner 1 étoile">☆</a>
                    
        <a href="#2" title="Donner 2 étoiles">☆</a>
                    
        <a href="#3" title="Donner 3 étoiles">☆</a>
                   
        <a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                   
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');
        

    }elseif($note==3){
        echo('

        <a href="#1" title="Donner 1 étoile">☆</a>
                    
        <a href="#2" title="Donner 2 étoiles">☆</a>
                    
        <a href="#3" style="color: orange;" title="Donner 3 étoiles">☆</a>
                    
        <a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                    
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');

    }elseif($note==4){
        echo('

        <a href="#1" title="Donner 1 étoile">☆</a>
                   
        <a href="#2" style="color: orange;" title="Donner 2 étoiles">☆</a>
                    
        <a href="#3" style="color: orange;" title="Donner 3 étoiles">☆</a>
                    
        <a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                  
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');

    }elseif($note==5){
        echo('

        <a href="#1" style="color: orange;" title="Donner 1 étoile">☆</a>
                    
        <a href="#2" style="color: orange;" title="Donner 2 étoiles">☆</a>
                   
        <a href="#3" style="color: orange;" title="Donner 3 étoiles">☆</a>
                
        <a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                   
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');

}

 

    
}


function download_pdf(){

    //Fonction vérifiant les identifiants rentrés par l'administrateur dans la rubrique Contact


    $mail_form = $_POST['mail'];
    $password_form = $_POST['password'];



    $user = "root";
    $pass = "";

$bdd = new PDO('mysql:host=localhost;dbname=PortFolio', $user, $pass);

    $requete = $bdd->query('SELECT * FROM User');
    
    while ($data = $requete->fetch()){
        
        
       $password = $data['password'];
       $mail = $data['mail'];
       

   }
        
        $requete->closeCursor();


        if ($mail_form == $mail and $password_form == $password){
            echo "<div style ='text-align: center;'><span style='color: #ffff;font-style: bold; font-size: 20px;'>Connexion réussie</span>";
            echo "<body style= 'background-image:url(images/serveur2.jpg); background-repeat:no-repeat;background-size: cover;'></body>";
            echo "<link rel='stylesheet' href='../styles.css'><br><br><div style ='text-align: center;'><span id='text_button' style='color: #ffff; background-color: #124D70;'>En cliquant sur ce bouton, vous pouvez télécharger tous les messages envoyé par les différents utilisateurs depuis le formulaire de contact sous forme de fichier PDF.</span></div>";
            $download_pdf = 1;

            if ($download_pdf = 1){
                include 'Includes/Button.php';
            }else{
        
                echo('non');
        
            }
        }else{
            echo"<div style='text-align:center'><span style='font-color: #ffff; font-size: 20px;'>Veuillez rentrer des identifiants corrects</span></div>";
            echo "<br><div style='text-align: center; width:100%;'><img src='Images/settings.png' style='width:10%; margin:auto;'</img></div>";
        }

   



}




?>