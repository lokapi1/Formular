<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action=""> 
<!--action pour dire que l'action doit êtyre executée sur la même page, si on rentre une direction après action : la data rentrée ouvira automatiquement sur la page de la direction-->
        <label> Nom :</label>
        <input type="text" name="nom">
        <input type="submit" value="Confirmer">
<!--Lorsque l'utilisateur rentrera son nom, l'url de mon form va changer-->
    </form> 
</body>
</html>  

<?php 
//Partie traitement de donnée
if (isset($_POST['nom'])) #verifier si une variable de mon tableau POST 
{    
    echo "Bonjour " . $_POST['nom'] . " !"; #le point pour concatener des éléments, ici prendre le nom data donnée pour le mettre en réponse 
}

if (isset($_GET['secret']) && !empty($_GET['secret']) && $_GET['secret'] === '255') #check si dans l'url a été rajouté le mot secret, si la varriable secret n'est pas vide et qu'elle égale à 255, alors sera affiché l'écho.
{    
    echo "Vous avez trouvé le secret ";
}
?>