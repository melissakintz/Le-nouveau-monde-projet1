<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title> Contact</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
        <link rel="stylesheet" href="FRstyle.css" type="text/css">
    </head>
    <body>
    <?php include "./FRnavbar.php" ?>

    <section id = contact>
    <form action = "FRresultat.php" method = "POST">
        <fieldset class="uk-fieldset">
            <legend class="uk-legend ">Contactez Franky, le meilleur dans son domaine :</legend>

            <div class="uk-margin">
                <input required class="uk-input" type="text" placeholder="Nom de votre équipage" name="equipage">
            </div>

            <div class="uk-margin">
                <input required class="uk-input" type="text" placeholder="Nom" name="Nom">
            </div>

            <div class="uk-margin">
                <input required class="uk-input" type="text" placeholder="Prénom" name="Prenom">
            </div>

            <div class="uk-margin">
                <input class="uk-input" type="email" placeholder="Votre email" name="email" required >
            </div>
            <div class="uk-margin">
                <label>Mission souhaitée :</label>
                <select required class="uk-select" id ="select" name="select">
                    <option name="navale">Construction navale</option>
                    <option name="Charpenterie">Charpenterie</option>
                    <option name="autre">Autre mission</option>
                </select>
            </div>
            <div class="uk-margin">
                <input required class="uk-input" type="text" placeholder="Autre mission ?" name="mission" >
            </div>
            <div class="uk-margin">
                    <label>La durée de la mission </label>
                    <select required class="uk-select" id ="select1" name="select1">
                        <option name="day">1 mois</option>
                        <option name="day1">3 mois</option>
                        <option name="day2">5 mois</option>
                        <option name="day3">1 an</option>
                    </select>
                </div>
            <div class="uk-margin">
                <label>Que souhaitez-vous exactement ?</label>
                <textarea class="uk-textarea" rows="5" placeholder="Ecrivez ici votre demande" name="message"></textarea>
            </div>
            <div id = "valider">
                <input class = "uk-button uk-button-default " type = "submit" value = "Envoyer">
            </div>
        </fieldset>
    </form>
</section>

<?php include "./FRfooter.php"?>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

</body>
