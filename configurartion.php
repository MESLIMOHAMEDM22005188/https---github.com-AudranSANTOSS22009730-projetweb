<?php
/*
 * le host => l'adresse de la base de données et non du site !!
 */

// connexion à la base de donnée avec la classe PDO.
try
{
    $bdd = new PDO("mysql:host=CHANGER_HOST_ICI;dbname=CHANGER_DB_NAME;charset=utf8", "CHANGER_LOGIN", "CHANGER_PASS");
}

// captire toute les exception PDO qui pourraient etre généere lorsqu'on tente de se connecter à la bse donnée.
catch(PDOException $e)
{
    die('Erreur : '.$e->getMessage());
}
?>

