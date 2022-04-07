<html>

    <head>
        <title>Modèles</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css\modele.css">
    </head>
    
    <!--Intégration du menu à chaque page pour éviter de le refaire à chaque fois-->
    <? include 'menu.php';?>

    <body>

        <h1>Tableau complet des voitures</h1>
            
        <!--Boite contenant les boutons, la barre de recherche et la liste-->
        <div class = 'box'>
            <div class = 'liste'>
                <form method="get" method='modele.php'>
                <select name="order">
                    <option value="az"> A - Z (marque)</option>
                    <option value="za">Z - A (marque)</option>
                    <option value="az_m"> A - Z (modèle)</option>
                    <option value="za_m">Z - A (modèle)</option>
                    <option value="px_croissant">Prix croissant</option>
                    <option value="px_decroissant">Prix décroissant</option>
                    <option value="pe_croissante">Puissance croissante</option>
                    <option value="pe_decroissante">Puissance décroissante</option>
                    <option value="v_max_croissante">Vitesse max croissante</option>
                    <option value="v_max_decroissante">Vitesse max décroissante</option>
                </form>
                    <div = 'bouton1'><input type="submit" value="Valider" title="valider pour aller à la page sélectionnée"/></div>
            </div>
            <div class = 'style' >
                <input type = "button" name = 'bouton1' value = 'Style 1' style = "width : auto" onclick="document.getElementById('tableau').className = 'tableau1'">
                <input type = "button" name = 'bouton2' value = 'Style 2' style = "width : auto" onclick = "document.getElementById('tableau').className = 'tableau2'">
            </div>
        </div>
        
       <?php
       
       //Mise en place des fonctions de la liste de recherche
       $db = mysqli_connect('mysql-projetremiarthur.alwaysdata.net', '244244', 'nsigangabricot','projetremiarthur_sitevoiture');
       $tab1='SELECT marque, modele, annee, prix, chevaux, couple, vitesse_max FROM MODELE JOIN MARQUE ON MARQUE.id_marque=MODELE.id_marque ';
       if(isset($_GET['order'])){
           if($_GET['order']=='az'){$tab1 .= "ORDER BY marque ASC";}
           if($_GET['order']=='za'){$tab1 .= "ORDER BY marque DESC";}
           if($_GET['order']=='az_m'){$tab1 .= "ORDER BY modele ASC";}
           if($_GET['order']=='za_m'){$tab1 .= "ORDER BY modele DESC";}
           if($_GET['order']=='px_croissant'){$tab1 .= "ORDER BY prix ASC";}
           if($_GET['order']=='px_decroissant'){$tab1 .= "ORDER BY prix DESC";}
           if($_GET['order']=='pe_croissante'){$tab1 .= "ORDER BY chevaux ASC";}
           if($_GET['order']=='pe_decroissante'){$tab1 .= "ORDER BY chevaux DESC";}
           if($_GET['order']=='v_max_croissante'){$tab1 .= "ORDER BY vitesse_max ASC";}
           if($_GET['order']=='v_max_decroissante'){$tab1 .= "ORDER BY vitesse_max DESC";}
           
        }
        
        // Génération du tableau dynamique
        $result = mysqli_query($db,$tab1);
        $num = mysqli_num_rows($result);
        echo "<table id='tableau' class='tableau1' border = 1>";
        echo "<tr><th>Marque</th><th>Modele</th><th>Année</th><th>Prix</th><th>Chevaux</th><th>Couple</th><th>Vitesse Max</th></tr>";
      
        for ($j = 0; $j < $num; $j++) {
            echo "<tr>";
            $ligne = mysqli_fetch_array($result);
            
            // Espace tout les 3 charactères des prix
            $numero = strrev($ligne['prix']);
            $out = implode(' ', str_split($numero, 3));
            $out = strrev($out);
            
            echo "<td>".$ligne["marque"]."</td>";
            echo "<td>".$ligne["modele"]."</td>";
            echo "<td>".$ligne["annee"]."</td>";
            echo "<td>".$out." €"."</td>";
            echo "<td>".$ligne["chevaux"]." ch"."</td>";
            echo "<td>".$ligne["couple"]." nm"."</td>";
            echo "<td>".$ligne["vitesse_max"]." kmh"."</td>";
            echo "</tr>";
            
       }
       echo "</table>";
       mysqli_close($db);
       
       ?>
      
    </body>
</html>