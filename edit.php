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


   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Ajout effectué');
    window.location.href='index.php';
    </script>");


?>
    <?php


$date=$_POST['date'];
$etage=$_POST['etage'];
$pos=$_POST['position'];
$prix=$_POST['prix'];



$bdd->exec("INSERT INTO amp(Date_changement, Etage, Position_ampoule, Prix_ampoule) VALUES('$date','$etage','$pos','$prix')");


// if(count($datas) === 0){
//     echo'<p> aucune entrée </p>';
// } else {
//     echo 'Changement d\'ampoule effectué';
// }