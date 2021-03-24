<link rel="stylesheet" href="style.css" type="text/css">
<?php include "./navbar.php"?>
<section id = contact>
<form action = "./resultat.php" method = "POST">
    
    <fieldset class="uk-fieldset">

        <legend class="uk-legend ">Contactez nous :</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Nom de votre équipage">
        </div>
        <div class="uk-margin">
    <input class="uk-input" type="text" placeholder="Nom Prénom">
        </div>
        <div class="uk-margin">
    <input class="uk-input" type="email" placeholder="Votre email">
        </div>
        <div class="uk-margin">
            <label>Le métier rechercher :</label>
            <select class="uk-select">
                <option>Musique</option>
                <option>Médecine</option>
                <option>Charpente</option>
                <option>Chasseur de prime</option>
                <option>Archéologue</option>
                <option>Cuisinier</option>
                <option>Navigateur</option>
                <option>Groupe au choix</option>
                <option></option>
            </select>
        </div>
        <div class="uk-margin">
    <input class="uk-input" type="text" placeholder="Le ou les metiers que vous avez choisi">
        </div>
        <div class="uk-margin">
<input class="uk-input" type="number" placeholder="votre budget">
    </div>
        <div class="uk-margin">
        <label>Des indications particulières ?</label>
            <textarea class="uk-textarea" rows="5" placeholder="votre message"></textarea>
        </div>
        <div id = "valider">
         <input class = "uk-button uk-button-default " type = "submit" value = "valider">
        </div>
    </fieldset>
</form>
</section>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
<?php include "./footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
