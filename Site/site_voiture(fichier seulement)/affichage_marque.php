<html>

    <head>
        <title>Marques</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css\affichage_marque.css">
    </head>
    
    <!--Intégration du menu à chaque page pour éviter de le refaire à chaque fois-->
    <? include 'menu.php';?>
    
    <body>
        <div class = 'box'>
            <div class = 'info_marque'>
                <?php
                    
                    //Génération des marques après avoir cliqué sur un lien dans la page Marques
                    $connection = mysqli_connect('mysql-projetremiarthur.alwaysdata.net', '244244', 'nsigangabricot','projetremiarthur_sitevoiture');
                    $marque = "SELECT * FROM MARQUE WHERE MARQUE.marque = '".$_GET['val']."' ";
                    $result = mysqli_query($connection, $marque);
                    $result2 = mysqli_fetch_array($result);
                        echo "<p class='image_marque'><img src= '/logo/".$result2["marque"].".png'></p>";
                        echo "<p class='texte'>Nom : ".$result2["marque"].'</br></p>';
                        echo "<p class='texte'>Pays d'origine : ".$result2["nationalite"].'</br></p>';
                        echo "<p class='texte'>Créateur : ".$result2["createur"].'</br></p>';
                        echo "<p class='texte'>Date de création : ".$result2["date_creation"].'</br></p>';
                        echo "<p class='texte'>Siège social / Usine mère : ".$result2["siege_social"].'</br></p>';
                        echo "<p class='texte'>Dirigeant actuel : ".$result2["pdg"].'</br></p>';
                    
                ?>
            </div>
                
                <?php
                            
                    //Génération de chaque modèle en fonction de la marque sur la page
                    $modele = "SELECT MODELE.modele, MODELE.annee FROM MODELE JOIN MARQUE ON MARQUE.id_marque = MODELE.id_marque WHERE MARQUE.marque = '".$_GET['val']."' ";
                    $result = mysqli_query($connection, $modele);
                    while(($result3 = mysqli_fetch_array($result))){
                    
                        echo '<div class ="box2" "image_modele" ><a href ="affichage_modele.php?val='.$result3["modele"].'"><img src= "/images/'.$result3["modele"].'.png"></a>',
                        "<p class = 'texte2-1'>Modèle : ".$result3["modele"]."</p>",
                        "<p class = 'texte2-2'>Année : ".$result3["annee"]."</p></div>";
                    }
                ?>
            
        </div>
    </body>
    
</html>