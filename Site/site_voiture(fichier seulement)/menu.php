<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-esquiv = "X-UA-Compatible" content = "IEwedge">
        <link rel="stylesheet" style = "text/css" href="css\menu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        
        <header>
            
            <!--Mise en place des 'logos'-->
            <nav>
                <div class = "logo">
                    <img class = "logo" src='images/blob_gif.gif' >
                </div>
                
                <div class = "toggle">
                    <i class="fas fa-bars" ouvrir fermer></i>
                </div>
                
                <div class = "abricot">
                    <img class="abricot" src='images/abricot.png' >
                </div>
                
                <!--Liste des liens présents dans le menu-->
                <ul class='menu'>
                    <li><a href='index.php'>Page d'accueil</a></li>
                    <li><a href='marque.php'>Marques</a></li>
                    <li><a href='modele.php'>Modèles</a></li>
                    <li><a href='explications.php'>Explications</a></li>
                    <li><a href='formulaire.php'>Compte</a></li>
                </ul>
            </nav>
            
            <!--Truc qui marche pas (sensé être : au moment du 
            scroll le fond du menu, qui est transparent, redevient noir)-->
             <script>
            $(window).on("scroll" , function(){
                if($(window).scrollTop()){
                    $("nav").addClass("scroll");
            }
                    else {
                    $("nav").removeClass("scroll");
                    }
            })

            </script>
            
        </header>
        
        <!--Intégration d'un fichier Java pour le bouton du menu Téléphone-->
        <script src = "app.js"></script>

    </body>
    
    <!--Image de fond-->
    <img class='bg' src='images/fond_route_1.jpg'>

</html>