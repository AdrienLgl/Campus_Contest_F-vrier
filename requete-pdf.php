<?php

require('fpdf.php');

$username = "root";
$password = "";


class PDF extends FPDF
{
// en-tête
function Header()
{
    //Police Arial gras 15
    $this->SetFont('Arial','B',14);
    //Décalage à droite
    $this->Cell(80);
    //Titre
    $this->Cell(30,10,'MESSAGES CONTACT',0,0,'C');
    //Saut de ligne
    $this->Ln(20);
}

// pied de page
function Footer()
{
    //Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    //Police Arial italique 8
    $this->SetFont('Arial','I',8);
    //Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
// création du pdf
$pdf=new PDF();
$pdf->SetAuthor('PortFolio');
$pdf->SetTitle('Messages_Contact');
$pdf->SetSubject('Tous les messages de contact');
$pdf->SetCreator('portfolio');
$pdf->AliasNBPages();
$pdf->AddPage();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PortFolio";

 //$conn2 = new PDO('mysql:host=localhost;dbname=PortFolio', $username, $password);
 $conn = new mysqli($servername, $username, $password, $dbname);


 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
 $requete2 = "SELECT * FROM contact order by date";

 $res = $conn->query($requete2);
 
 
 
 while ($row = mysqli_fetch_array($res)){



    $id2 = $row["id_message"];
    $nom2 = $row["nom"];
    $prenom2 = $row["prenom"];
    $message2 = $row['message'];
    $mail2 = $row['mail'];
    $date = $row['date'];
    $pays = $row['pays'];
    // titre en gras
    $pdf->SetFont('Arial','B',10);
    $pdf->Write(5,$nom2.' '.$prenom2.'         '.$mail2.'       '.$date.'      '.$pays);
    $pdf->Ln();
    // description
    $pdf->SetFont('Arial','',10);
    $pdf->Write(3,$message2);
    $pdf->Ln();
    $pdf->Ln();

    
}





// sortie du fichier
$pdf->Output('messages_contact.pdf', 'I');


 $conn->close();




















?>