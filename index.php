<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <?php include("header.php"); ?>
    
    <!-- Le menu -->
    
   <?php include("menu.php"); ?>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
		<a href="hello.php?surname=GHARIB&amp;firstname=Samir">Dis-moi bonjour !</a>
    </div>
    
    <!-- Le pied de page -->
    
    <?php include("footer.php"); ?>
    
    </body>
</html>