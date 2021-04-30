<?php

try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=projetampoule;charset=utf8', 'root', '');     // Je me connecte en PDO à ma base de donnée MySql
    }

catch (Exception $e)     // Si il y a une erreur
    {
            die('Erreur : ' . $e->getMessage());     // Alors ca me retourne un message m'informant la provenance de cette erreur Exemple : Base 'Connexionn' inconnue | Un n en trop à la fin et se n'est plus la bonne base de donnée 
    }

  ?> 
   <?php


$getid=$_GET['ID'];

$bdd->exec("UPDATE amp SET(Date_changement, Etage, Position_ampoule, Prix_ampoule) VALUES('$date','$etage','$pos','$prix') WHERE ID='$getid'");