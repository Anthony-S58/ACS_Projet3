<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <title>Accueil - Tête d'ampoule</title>
</head>
<body>

<!-- HEADER -->

    <div class="titre">
               
             <h1>Avec  <img src="IMG/ampoule.jpg" alt=""> gérer vos ampoules devient cool</h1>
    </div>
    <br>
<!-- Section -->
<section>
        <div class="formulaire">

            <h2>Formulaire de gestion des ampoules</h2>
            <br>
            <form action="edit.php" method="Post">

                <label>Date de l'intervention :</label>
                <input type="date" name="date">
            <br><br>
                <label>Etage du changement :</label>
                <input type="number" name="etage" >
            <br><br>
                <label>Position de l'ampoule :</label>
                <input type="text" name="position">
            <br><br>
                <label>Prix de l'ampoule (€) :</label>
                <input type="number" name="prix">
            <br><br>
                <input type="submit" value="Déclarer">

            </form>

        </div>

</section>

<footer>

            <a href="historique.php"><h2>Voir l'historique des changements</h2></a>
            <a href="db.php"><h2>Voir la base de données</h2></a>
</footer>

</body>
</html>