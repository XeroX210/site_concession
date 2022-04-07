<html>
    <head>
        <title>Marques</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css\marque.css">
    </head>
    
    <!--Intégration du menu à chaque page pour éviter de le refaire à chaque fois-->
    <? include 'menu.php';?>
    
    <?php
    $connexion = mysqli_connect('mysql-projetremiarthur.alwaysdata.net', '244244', 'nsigangabricot','projetremiarthur_sitevoiture');
    $marques = 'SELECT MARQUE.marque FROM MARQUE';
    $result = mysqli_query($connexion, $marques);
        echo '<div class = "item"><a href ="affichage_marque.php?val='.$result2["marque"].'><img src= "/logo/'.$result2["marque"].'.png"></a></div>';
    ?>
    
    <body>
        <div class = recherche>
            <form method = "GET" action='marque.php'>
                <input type = 'search' name = 's' placeholder = 'Rechercher une marque'>
                <input type = 'submit' name = 'Valider'>
            </form>
        </div>
        
        
       <div class="box">
            <?php
            
            //Génération des boites contenant les logos des marques
            //+ lien pour être redirigé
            while(($result2 = mysqli_fetch_array($result))){
                echo '<div class = "item"><a href ="affichage_marque.php?val='.$result2["marque"].'"><img src= "/logo/'.$result2["marque"].'.png"></a></div>';
            }
            ?>
        </div>
    </body>

</html>