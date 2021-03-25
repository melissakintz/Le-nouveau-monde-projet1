<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <title>Contact | Le nouveau monde</title>
</head>


<body>

    <?php
    include "./navbar.php";

    //test de la validité et de la présence des element et affichage du message de reponse
    if (isset($_POST['equipage']) && $_POST['equipage'] != ' '){
        if (isset($_POST['nomPrenom']) && $_POST['nomPrenom']){
            if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                if (isset($_POST['select'])) {
                    if (isset($_POST['raison']) && $_POST['raison'] != " "){ ?>
                        <section id = "messages">
                                <p> <?php echo $_POST['nomPrenom'].' de '. $_POST['equipage']?>, merci d'avoir contacté le Nouveau monde ,<br/> nous avons bien reçu votre demande, elle  sera traitée sous peu par l'un des membres de notre équipage,<br/> merci de bien vouloir patienter jusqu'à notre retour par mail.<br/>
                                </p>
                                <br/>
                                <p> <?php echo htmlentities($_POST['nomPrenom']) .' de ' . htmlentities($_POST['equipage'])?> a fait la demande suivante :<br/>
                                    suite ou pendant le contrat à rencontré le probléme suivant <?php echo htmlentities($_POST['select'])?>
                                    <?php echo htmlentities($_POST['raison'])?>.<br/>
                                    information supplémentaire :<?php echo htmlentities($_POST['message'])?> </p><br/>
                                <p>  Nous vous remercions pour votre retour , vous serez recontacté via l'adresse mail <?php echo htmlentities($_POST['email'])?> fourni dans le formulaire.<br/>
                                    Merci de nous faire confiance pour votre demande, bonne fin de journée.</p>
                        </section>
    <?php
                    } else {
                        echo "Veuillez préciser une raison";
                    }
                }else {
                    echo "Veuillez choisir une option";
                }
            }else {
                echo "Email non précisé ou invalide";
            }
        }else {
            echo "Veuillez indiquer votre nom";
        }
    } else {
        echo "Veuillez préciser le nomde l'équipage";
    }


    include "./footer.php"
    ?>


    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
</body>
</html>