<!doctype html>
<html lang="fr">

<?php require '../functions.php' ;

?>

<head>
    <meta charset="utf8">
    <title>Portfolio | Adrien LAIGLE</title>
    <link rel="stylesheet" href="../../styles.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="../../Images/logo3.ico.png" />
</head>



<body>

<?php

include '../includes/header.php'

?>






    <div style="width: 100%; height: 800px; background-color: white;">


        <div style="width: 50%; height: 80%; background-color: white; overflow: auto">

            <div style="width: 98%; height: 50%;  margin-left: 5px; ">
                <img src="../../Images/avatar.jpg" style="width: 15%; float: left;">
                <div
                    style="width: 20%; height: 10%; text-align: center; font-family: 'Fira Sans', sans-serif; margin-left: -10px; ">

                    Monsieur Dubois
                    <br><i>Professionnel</i>
                </div>

                <div style="width: 75%; height: 60%;  float: right; ">
                    <p style="font-family: 'Baloo', cursive;">Avis</p>
                    <span id=description style="font-family:'Fira Sans', sans-serif;">J'ai eu la chance de bénéficier de l'expertise de
                        Mr Laigle avec ses précieux conseils lors d'un projet concernant mon entreprise.
                        Je recommande ses services pour tout professionnel désirant réaliser un projet ou ayant une
                        demande particulière.</span>




                    <div class="rating" style="margin-right: 30%; margin-top: -8%;">
                        <!--

                --><br><br><span style="font-family: 'Baloo', cursive;"><br>Note :</span>
                        <!---

                --><a href="#1" style="color: orange;" title="Donner 1 étoile">☆</a>
                        <!--
                --><a href="#2" style="color: orange;" title="Donner 2 étoiles">☆</a>
                        <!--
                --><a href="#3" style="color: orange;" title="Donner 3 étoiles">☆</a>
                        <!--
                --><a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                        <!--
                --><a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>
                        <!---->

                    </div>

                </div>


            </div>

            

            <div style="width: 98%; height: 50%;  margin-left: 5px;  ">
                <img src="../../Images/avatar2.jpg" style="width: 120px; float: left;">
                <div
                    style="width: 20%; height: 10%; text-align: center; font-family: 'Fira Sans', sans-serif; margin-left: -10px; ">

                    Madame Lefeuvre
                    <br><i>Professionnel</i>
                </div>

                <div style="width: 75%; height: 60%;  float: right; ">
                    <p style="font-family: 'Baloo', cursive;">Avis</p>
                    <span style="font-family:'Fira Sans', sans-serif;">Très bon professionnel au service des autres avec
                        une bonne écoute et de très bons conseils.
                        Je recommande vivement. Cordialement
                    </span>




                    <div class="rating" style="margin-right: 30%; margin-top: -8%;">
                        <!--

            --><br><br><span style="font-family: 'Baloo', cursive;"><br><br>Note :</span>
                        <!---

            --><a href="#1" title="Donner 1 étoile">☆</a>
                        <!--
            --><a href="#2" style="color: orange;" title="Donner 2 étoiles">☆</a>
                        <!--
            --><a href="#3" style="color: orange;" title="Donner 3 étoiles">☆</a>
                        <!--
            --><a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                        <!--
            --><a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>
                        


                    </div>


                </div>


            </div>

            <?php avis() ?>


        </div>



        <form action= "../recup_donnees_02.php" method = "post">

        <div style="width: 45%; height: 45%; margin-top: -30% ; margin-left: 53%; display: flex">

            <div class="container2" style="height: 100%; width: 90%">


                <label for="fname" style="font-family: 'Baloo', cursive ; color: white; display: block ">Prénom</label>
                <input type="text" id="fname" name="Prénom" placeholder="Votre prénom" style="margin-left: 1%; ">

                <label style="font-family: 'Baloo', cursive ; color: white; display: block;" for="lname">Nom</label>
                <input type="text" id="lname" name="Nom" placeholder="Votre nom" style="margin-left: 1%;">

              <label style="font-family: 'Baloo', cursive ; color: white; display: block" for="statut">Statut</label>
                <select id="statut" name="statut" style="margin-left: 1%;">
                    <option value="Professionnel">Professionnel</option>
                    <option value="Particuliers">Particuliers</option>
                    <option value="Autre">Autre</option>
                </select>

                <label style="font-family: 'Baloo', cursive ; color: white; display: block" for="note">Note /5</label>
                <select id="note" name="note" style="margin-left: 1%;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <br>

                <textarea style="width: 40%; float: right; height: 60%; margin-top: -280px; margin-left: 80px, display: inline block" id="subject"
                    name="subject" placeholder="Votre avis.." style="height:200px; resize: none;"></textarea>

                <br> <a href="#"><input style="margin: auto; float: right; margin-top: -9% " type="submit" value="Proposer"></a>

                </form>
            </div>

        </div>
        
        

        </form>

        


    </div>



    <footer>

        <a href="../../Accueil/Accueil.php"><img src="../../Images/logo.png"></a>

        <span id="span9">
            Contact
        </span>

        <span><i>Téléphone: 06.40.67.66.59</i></span>
        <span><i>Email: adrien.laigle35@gmail.com</i></span>



    </footer>

</body>

</html>