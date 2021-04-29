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
                <select name="etage" id="etage">

                    <option value="">Indiquez votre etage</option>
                    <option value="RDC">RDC</option>
                    <option value="1">1er etage</option>
                    <option value="2">2eme etage</option>
                    <option value="3">3eme etage</option>
                    <option value="4">4eme etage</option>
                    <option value="5">5eme etage</option>
                    <option value="6">6eme etage</option>
                    <option value="7">7eme etage</option>
                    <option value="8">8me etage</option>
                    <option value="9">9eme etage</option>
                    <option value="10">10eme etage</option>
                    <option value="11">11eme etage</option>
                
                </select>

            <br><br>

                <label>Position de l'ampoule :</label>
                <select name="position" id="position" >

                    <option value="">Indiquez la position de l'ampoule</option>
                    <option value="droite">Droite</option>
                    <option value="gauche">Gauche</option>
                    <option value="fond">Fond</option>
                
                </select>

            <br><br>

                <label>Prix de l'ampoule (€) :</label>
                <input type="number" step="any" min="0" name="prix">

            <br><br>

                <input type="submit" value="Déclarer">

            </form>

        </div>

</section>

<footer>

            <a href="historique.php"><h2>Voir l'historique des changements</h2></a>
            <!-- <a href="db.php"><h2>Voir la base de données</h2></a> -->
</footer>

</body>
</html>