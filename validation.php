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
$date=$_POST['date'];
$etage=$_POST['etage'];
$pos=$_POST['position'];
$prix=$_POST['prix'];

$bdd->exec("UPDATE amp SET Date_changement='$date', Etage='$etage', Position_ampoule='$pos', Prix_ampoule='$prix' WHERE ID='$getid'");

var_dump($getid);