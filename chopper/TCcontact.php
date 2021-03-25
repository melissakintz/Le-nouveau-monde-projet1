<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../global/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <title>Contactez moi | Tony Tony Chopper</title>
</head>

<body>
    <?php include "./TCnavbar.php" ?>
    <section id = "contact">
        <form action = "TCresultat.php" method = "POST">
            <fieldset class="uk-fieldset">
                <legend class="uk-legend ">Contactez moi :</legend>

                <div class="uk-margin">
                    <input required class="uk-input" type="text" placeholder="Nom de votre équipage" name="equipage"> <br/>
                    <input required class="uk-input" type="text" placeholder="Nom" name="nom">
                    <input required class="uk-input" type="text" placeholder="Prenom" name="prenom"><br/>
                    <input class="uk-input" type="email" placeholder="email" name="email" required ><br/>

                    <p>
                        <label for="select"">Durée :</label>
                        <select required class="uk-select" id ="select" name="select">
                            <option name="day">entre 1 et 7 jours</option>
                            <option name="week">entre 2 et 3 semaines</option>
                            <option name="month">1 mois</option>
                            <option name="month1">2 à 3 mois </option>
                            <option name="month2">4 à 5 mois </option>
                            <option name="month3">6 à 8 mois </option>
                            <option name="year">1 an </option>
                        </select>
                    </p>

                    <label for="message">Merci de décrire votre offre : </label>
                    <textarea required class="uk-textarea" rows="5" placeholder="Description de l'offre" name="message"></textarea>
                </div>
                <div id = "valider">
                    <input class = "uk-button uk-button-default " type = "submit" value = "valider">
                </div>
            </fieldset>
        </form>
    </section>

    <?php include "../global/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

</body>

