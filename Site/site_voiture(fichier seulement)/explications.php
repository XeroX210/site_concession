<html>
    <head>
        <title>Explications</title>
        <meta charset = 'utf-8'>
        <link rel = "stylesheet" href = "css\explications.css">
    </head>    
    
    <!--Intégration du menu à chaque page pour éviter de le refaire à chaque fois-->
    <? include 'menu.php' ;?>
    <body>
        <div class = 'title'>
            <h1>Petites précisions à propos de l'utilisation des données :</h1>
        </div>
        <div class = 'text'>
            
            <!--Explications concernant la façon dont on a sélectionné les infos-->
            <li>La taille du coffre affichée est la taille minimale constructeur, <br>donc coffre avec tout les sièges.</li>
            <li>La taille des jantes indiquée est toujours la plus petite proposée.</li>
            <li>Le nombre d'exemplaire indiqué est le nombre de voitures vendues, <br> si il n'est pas indiqué, la voiture est alors toujours en production.</li>
            <li>Le manque d'informations sur certaines voitures peut être normal : <br> soit la voiture est très récente et vient d'être dévoilée, soit, au contraire <br>elle est très ancienne et donc les données n'ont pas été calculé.</li>
            <li>Les prix sont exclusivement ceux actuels, et non les prix au début de <br>la production de la voiture.</li>    
            <li>La consommation indiquée est mixte.</li>
        </div>
        <div class = 'lien'>
            
            <!--Lien vers les différents types de moteurs-->
            <h2><a href='moteur.php'>Présentation des moteurs</a></h2>
        </div>
    </body>
</html>