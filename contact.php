<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <title>Contact</title>
</head>

<body>
<?php include "./navbar.php"?>
<section id = contact>
    <form action = "./resultat.php" method = "POST">
        <fieldset class="uk-fieldset">
            <legend class="uk-legend ">Contactez nous :</legend>

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
                <label>Le type de probléme rencontré :</label>
                <select required class="uk-select" id ="select" name="select">
                    <option name="meurtre">Meurtre</option>
                    <option name="trahison">Trahison</option>
                    <option name="desertion">Désertion</option>
                    <option name="degradation">Dégradation</option>
                    <option name="mutinerie">mutinerie</option>
                    <option name="vole">vole</option>
                    <option name="autre">autre :</option>
                </select>
            </div>
            <div class="uk-margin">
                <input required class="uk-input" type="text" placeholder="raison a décrire" name="raison" >
            </div>
            <div class="uk-margin">
                <label>Des indications particulières ?</label>
                <textarea class="uk-textarea" rows="5" placeholder="votre message" name="message"></textarea>
            </div>
            <div id = "valider">
                <input class = "uk-button uk-button-default " type = "submit" value = "valider">
            </div>
        </fieldset>
    </form>
</section>

<?php include "./footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

</body>
