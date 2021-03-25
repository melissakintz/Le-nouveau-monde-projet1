<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <title>Contacte moi | Tony Tony Chopper</title>
</head>

<body>
    <?php include "./TCnavbar.php" ?>
    <section id = contact>
        <form action = "TCresultat.php" method = "POST">
            <fieldset class="uk-fieldset">
                <legend class="uk-legend ">Contactez moi :</legend>

                <div class="uk-margin">
                    <input required class="uk-input" type="text" placeholder="Nom de votre équipage" name="equipage">
                </div>

                <div class="uk-margin">
                    <input required class="uk-input" type="text" placeholder="Nom Prénom" name="nomPrenom">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="email" placeholder="Votre email" name="email" required >
                </div>
                <div class="uk-margin">
                    <label>Durée :</label>
                    <select required class="uk-select" id ="select" name="select">
                        <option name="day">1 jour</option>
                        <option name="day1">3 jours</option>
                        <option name="day2">7 jours</option>
                        <option name="day3">14 jours</option>
                        <option name="day4">1 mois </option>
                        <option name="day5">3 mois </option>
                        <option name="day6">6 mois </option>
                        <option name="day7">1 an </option>
                    </select>
                </div>
                <label>Type d'offre :</label>
                <div class="uk-margin">
                    <label>Merci de décrire votre offre : </label>
                    <textarea required class="uk-textarea" rows="5" placeholder="Description de l'offre" name="message"></textarea>
                </div>
                <div id = "valider">
                    <input class = "uk-button uk-button-default " type = "submit" value = "valider">
                </div>
            </fieldset>
        </form>
    </section>

    <?php include "../footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

</body>

