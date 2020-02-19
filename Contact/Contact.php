<!doctype html>
<html lang="fr">

<?php  require '../functions.php' ?>

<head>
    <meta charset="utf8">
    <title>Portfolio | Adrien LAIGLE</title>
    <link rel="stylesheet" href="../styles.css">
    <script type="text/javascript" src="../Contact/java.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="../Images/logo3.ico.png" />
</head>



<body>

<?php

include '../includes/header.php'

?>

    <div class="contact" style="height: 100%; width: 100% ; background-image: url(../Images/fond.jpg); ">


        <span id="spancontact">Contact</span>

        <div style="padding-top: 1%; height: 1000px;">
            <div id="contact"
                style="width: 25%; height: 50%; margin: auto; background-color: white; text-align: center; border-radius: 30px; border: solid black;">

                <img src="../Images/portrait.png" style="width: 150px; margin-top: 5%;">
                <h2 style="font-family: 'Baloo', cursive; color: black;">Adrien LAIGLE</h2>
                <i><span style="font-family: 'Fira Sans', sans-serif; color: black;">Etudiant en Informatique</span></i>



                <div style="width: 100%; height: 30%; text-align: center; background-color: white; word-spacing: 60px;">

                    <a href="mailto:adrien.laigle35@gmail.com"> <img title="Adresse Mail"
                            src="../Images/google-brands.svg"
                            style="width: 50px; margin-top: 10%; border: solid black; border-radius: 40px; padding:10px;"></a>
                    <a href="https://fr.linkedin.com/in/adrien-laigle-441542197?trk=people-guest_people_search-card"><img
                            title="Linkedin" src="../Images/linkedin-brands.svg"
                            style="width: 50px; margin-top: 10%; border: solid black; border-radius: 20px; padding:10px;"></a>

                </div>

                <a href="../Images/CV.pdf" download="CV"><button id="button_contact" style="margin-top:30px;">Télécharger CV</button></a>





            </div>


            <form action="../recup_donnees.php" method="post" type = 'hidden'style="width:100%, height: 50%">

            <div style="width: 60%; height: 25%; margin: auto; margin-top: 5% ;">

                <div class="container" style="height: 360px;">


                    <label for="fname" style="font-family: 'Baloo', cursive ;" >Prénom</label>
                    
                    <input type="text" id="fname" name="Prénom" placeholder="Votre prénom" required>

                    <br><label style="font-family: 'Baloo', cursive ;" for="lname">Nom</label>
                    <input type="text" id="lname" name="Nom" placeholder="Votre nom" style="margin-left: 2%;" required>

                    <br><label style="font-family: 'Baloo', cursive ;" for="date">Date</label>
                    <input type="date" id="date" name="date" placeholder="Rentrez la date" style="margin-left: 2%;" required>

                    <br><label style="font-family: 'Baloo', cursive ;" for="country">Pays</label>
                    <select id="country" name="country" style="margin-left: 2%;">
                        <option value="France">France</option>
                        <option value="Etats-Unis">Etats-Unis</option>
                        <option value="Royaume-Uni">Royaume-Uni</option>
                        <option value="Allemagne">Allemagne</option>
                        <option value="Espagne">Espagne</option>
                        <option value="Chine">Chine</option>
                        <option value="Autre">Autre</option>
                    </select>


                    <br><label style="font-family: 'Baloo', cursive ;" for="mail">Mail</label>
                    <input type="text" id="mail" name="mail" placeholder="Votre adresse mail" style="margin-left: 2%;" required>


                    <textarea style="width: 50%; float: right; height: 60%; margin-top: -25%;" id="subject"
                        name="subject" placeholder="Votre message.." style="height:200px; resize: none;"></textarea>

                    <br> <a> <input  style="margin: auto; float: right;" type="submit" value="Envoyer"></a>

                    </form>


                    <div style="margin-top: 1%; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"class="popup" onclick="myFunction()">
                        


                        
                            <input type="checkbox" id="scales" name="scales" class="popup"
                            required class="popup" onclick="myFunction()">
                            <label for="scales">Je consente à partager mes données</label>
                  


                            <span class="popuptext" id="myPopup">Lorsque vous remplissez et envoyez le formulaire, vous consentez à partager toutes
                            les informations que vous nous communiquez.
                            </span>
                            </div>
                      


                   
                    
                   
                </div>



            </div>


            
            <button class="open-button" onclick="openForm()">Se connecter</button>
                      <div class="form-popup" id="myForm">
             <form action="../recup_user_profil.php" class="form-container" method="post">
            <h1>Administrateur</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Entrez votre adresse mail" name="mail" required>

            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="password" required>

            <button type="submit" class="btn">Se connecter</button>
            <button type="submit" class="btn cancel" onclick="closeForm()">Fermer</button>
           
        </form>
            </div>


           

            
           


        </div>

        

    </div>





    <footer style="border: solid white; border-width: 2px 0px 0px 0px;">

        <a href="../Accueil/Accueil.php"><img src="../Images/logo.png"></a>

        <span id="span9">
            Contact
        </span>

        <span><i>Téléphone: 06.40.67.66.59</i></span>
        <span><i>Email: adrien.laigle35@gmail.com</i></span>



    </footer>

    

    
</body>

</html>