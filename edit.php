<!-- ce fichier contient les requêtes d'insertion et d'edition. les deux ayant besoin de formulaires similaires et touchant aux mêmes données -->

<!-- Pour obtenir les autorisations vis à vis de la Base de données on commence par lier edit.php à db.php -->


<?php
        require_once('db.php');  
        ?>

  <!-- Il faut maintenant aller chercher ce qu'il y a dans la bdd pour l'injecter dans le tableau (historique.php). On va stocker temporairement la requête $bdd a qui on a affecté la variable $sql. -->



    <!-- je donne un nom de variable à chaque champ ce qui va me permettre d'insérer le contenu de mon formulaire dans ma base de données -->



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