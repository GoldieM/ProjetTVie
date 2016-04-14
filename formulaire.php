<!DOCTYPE html>
<html>
<head>
	<title> Trendy Vintie Contact </title>
	<meta charset="utf-8" />

	<link rel="stylesheet" href="Style.css"/> 
    <link rel="stylesheet" href="bosstrap/css/bosstrap.css.min"/> 
		
		</head>

<img src="IMAGES/TVLOGO.JPG" class="Logo1"  title="Trendy Vintie" alt="Trendy Vintie" />
<header class="header">
Ventes de vêtements vintage et tendance. La mode est un cycle profitons-en ! 
</header>

<nav class="nav">
	<ul id="menu_horizontal">
		<li class="menuitem"><a class="TV" href="index.html">Trendy Vintie</a></li>
		<li class="menuitem"><a href="Classical.php">Classical</a></li>
		<li class="menuitem"><a href="Street.php">Street</a></li>
		<li class="menuitem"><a href="Vintage.php">Vintage</a></li>
		<li class="menuitem"><a href="formulaire.html">Commander</a></li>
	</ul>
</nav>

  <form name="Commande" method="post" action="formulaire.php">

	<div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" value="Saisissez votre nom"/>
    </div>

    <div>
        <label for="Prenom">Prenom :</label>
        <input type="text" id="prenom" value="Saisissez votre Prenom" />
    </div>


    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" value="Saisissez votre adresse mail" />
    </div>

    <div>
        <label for="message">Message :</label>
        <textarea id="message" value="Saisissez votre message de commande"></textarea>

   <div class="button">
        <button class="btn btn-primary btn-lg" name="valider" type="submit">Envoyer ma commande</button>
    </div>

</form>
<?php
        if(isset($_POST['valider'])){
           
            echo 'Votre commande à bien été reçue ! A bientôt sur Trendy Vintie' ;
        }
        ?>

<footer class"footer"> 




</footer>
</body>

</html>
