<?php

// Connexion à la base de données

try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=projetampoule;charset=utf8', 'root', '');     // Je me connecte en PDO à ma base de donnée MySql
    }

catch (Exception $e)     // Si il y a une erreur
    {
            die('Erreur : ' . $e->getMessage());     // Alors ca me retourne un message m'informant la provenance de cette erreur Exemple : Base 'Connexionn' inconnue | Un n en trop à la fin et se n'est plus la bonne base de donnée 
    }

  ?> 

  <!-- Il faut maintenant aller chercher ce qu'il y a dans la bdd pour l'injecter dans le tableau (historique.php). On va stocker temporairement la requête $bdd a qui on a affecté la variable $sql. -->

<?php


$sql = 'SELECT ID , Date_changement, Etage, Position_ampoule, Prix_ampoule, FROM stagiaire';

$sth = $bdd->prepare($sql);

// Puis on execute
$sth->execute();

// on recupere l'extraction avec fetchall
$datas = $sth->fetchAll(PDO::FETCH_ASSOC);

// on va changer le format de la date en FR, la premiere valeur s'affiche xx_XX, la deuxieme est pour le format de la date et le troisième pour l'heure.
$intlDateFormatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);



// on parcours le resultat qu'on affiche à l'écran via echo pour parcourir toutes les lignes on fait une boucle


foreach( $datas as $data){
    
    echo'<tr>';

        echo'<td>'. $data['ID']. '</td>';
        echo'<td>'. $intlDateFormatter->format(strtotime($data['Date_changement'])). '</td>';
        echo'<td>'. $data['Etage']. '</td>';
        echo'<td>'. $data['Position_ampoule']. '</td>';
        echo'<td>'. $data['Prix_ampoule']. '</td>';  
        echo '<td><a href="edit.php?edit=1&id='. $data['id']. '">Modifier</a> <a href="delete.php?id='. $data['id'].'">Supprimer<a><td>';

    echo '</tr>';
}


// Afin d'éviter de laisser un tableau vide, on va créer une condition ou afficher une phrase pour indquer qu'il fonctionne bien mais n'a rien à afficher


if(count($datas) === 0){
    echo'<p> aucune entrée </p>';
}

?>



