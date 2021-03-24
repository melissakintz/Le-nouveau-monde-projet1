<link rel="stylesheet" href="style.css" type="text/css">
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
            <label>Le métier rechercher :</label>
            <select class="uk-select">
                <option name="musique">Musique</option>
                <option name="medecin">Médecine</option>
                <option name="charpente">Charpente</option>
                <option name="chasseur">Chasseur de prime</option>
                <option name="archeologue">Archéologue</option>
                <option name="cuisinier">Cuisinier</option>
                <option name="navigateur">Navigateur</option>
                <option name="groupe">Groupe au choix</option>
                <option></option>
            </select>
        </div>
        <div class="uk-margin">
    <input class="uk-input" type="text" placeholder="Le ou les metiers que vous avez choisi" name="metiers">
        </div>
        <div class="uk-margin">
<input class="uk-input" type="number" placeholder="votre budget" name="budget">
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
<?php include "./footer.php"?>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
