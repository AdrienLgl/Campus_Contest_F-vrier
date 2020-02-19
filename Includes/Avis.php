
           
           
           <div style="width: 98%; height: 50%;  margin-left: 5px; margin-top: 2% ">
                <img src="../../Images/avatar2.jpg" style="width: 120px; float: left;">
                <div
                    style="width: 20%; height: 10%; text-align: center; font-family: 'Fira Sans', sans-serif; margin-left: -10px; ">

                    <p><?php echo ($prenom.' '.$nom) ?></p>
                    <br><i><?php echo ($statut)?></i>
                </div>

                <div style="width: 75%; height: 60%;  float: right; ">
                    <p style="font-family: 'Baloo', cursive;">Avis</p>
                    <span style="font-family:'Fira Sans', sans-serif;"><?php echo($message)  ?>
                    </span>




                    <div class="rating" style="margin-right: 30%; margin-top: -8%;">
                        <!--

            --><br><br><span style="font-family: 'Baloo', cursive;"><br><br>Note :</span>
                        <!---

            --><?php 

                global $note;
                couleur($note);
                ?>
                        


                    </div>


                </div>


            </div>

      