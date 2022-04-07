<html>

    <head>
        <title>Modèles</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css\affichage_modele.css">
    </head>
    
    <!--Intégration du menu à chaque page pour éviter de le refaire à chaque fois-->
    <? include 'menu.php';?>

    <body>
        <div class = 'box'>
        
            <?php 
            $connexion = mysqli_connect('mysql-projetremiarthur.alwaysdata.net', '244244', 'nsigangabricot','projetremiarthur_sitevoiture');
            $marque = "SELECT * FROM MODELE WHERE MODELE.modele = '".$_GET['val']."'";
            $result = mysqli_query($connexion, $marque);
            $result2 = mysqli_fetch_array($result);
                echo "<div class = 'ligne_1'><div class='modele'><img src= '/images/".$result2["modele"].".png'></div>",
                    "<div class='info_base'>Nom : ".$result2["modele"].'</div>',
                    "<div class='info_base'>Année : ".$result2["annee"].'</div>',
                    "<div class='info_base'>Prix : ".$result2["prix"].' €</div>',
                    "<div class='info_base'>Production : ".$result2["nb_exemple"]. ' exemplaire(s)</div></div>',
                    "<div class = 'ligne_2'><div><div class='moteur'>Elle possède un " .$result2["moteur"].' </div>',
                    "<div class='moteur'> avec une cylindrée de ".$result2["cylindree"].' L</div>',
                    "<div class='moteur'>Energie : ".$result2["énergie"].' </div></div>',
                    "<div><div class='puissance'>Puissance : ".$result2["chevaux"].' ch</div>',
                    "<div class='puissance'>Couple : ".$result2["couple"].' nm</div>',
                    "<div class='puissance'>0-100 km : ".$result2["zero_cent"].' s</div>',
                    "<div class='puissance'>Vitesse max : ".$result2["vitesse_max"].' km/h</div>',
                    "<div class='puissance'>Poids : ".$result2["poids"].' kg</div></div>',
                    "<div><div class='dimension'>Longueur : ".$result2["longueur"].' mm</div>',
                    "<div class='dimension'>Largeur : ".$result2["largeur"].' mm</div>',
                    "<div class='dimension'>Hauteur : ".$result2["hauteur"].' mm</div></div>',
                    "<div><div class='transmission'>Transmission ".$result2["propulsion"].' </div>',
                    "<div class='transmission'>et possède ".$result2["rapport"].' rapport(s)</div></div>',
                    "<div><div class='consommation'>Consommation : ".$result2["conso"].' L/100</br></div>',
                    "<div class='consommation'>Emission de CO2 : ".$result2["emission"].' g/km</div></div>',
                    "<div><div class='autre'>Nombre de porte : ".$result2["nb_porte"].' </div>',
                    "<div class='autre'>Nombre de place : ".$result2["nb_place"].' </div>',
                    "<div class='autre'>Capacité du réservoir : ".$result2["capacitee_reservoir"].' L</div>',
                    "<div class='autre'>Capacité du coffre : ".$result2["capacitee_coffre"].' L</div></div></div></div>';
                           
            ?>
        </div> 
    </body>
</html>