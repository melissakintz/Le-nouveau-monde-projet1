<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../global/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
        <title>Contactez moi | Tony Tony Chopper</title>
    </head>


    <body>

        <?php
        include "./TCnavbar.php";

        //test de la validité et de la présence des element et affichage du message de reponse
        if (isset($_POST['equipage']) && $_POST['equipage'] != ' '){
            if (isset($_POST['nom']) && $_POST['nom'] && isset($_POST['prenom']) && $_POST['prenom']!= " ") {
                if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    if (isset($_POST['select'])) {
                        if (isset($_POST['message']) && $_POST['message'] != " "){ ?>
                            <section id = "messages">
                                <p>
                                    Je vous remercie pour votre proposition , vous serez recontacté via l'adresse mail <?php echo htmlentities($_POST['email'])?> de ma décision.<br/>
                                    Merci de me faire confiance pour votre demande, bonne fin de journée.<br/>
                                </p>
                                <p> <?php echo htmlentities($_POST['prenom']) . " " . htmlentities($_POST['prenom']) .  " de " . htmlentities($_POST['equipage']) . " a fait la demande suivante :<br/>
                                    Offre d'une durée de: " . htmlentities($_POST['select']). '<br/> Détails de la proposition : <br/>"' . htmlentities($_POST['message'])?>."
                                </p>
                            </section>
        <?php
                        } else {
                            echo "Veuillez préciser votre offre";
                        }
                    }else {
                        echo "Veuillez choisir une durée";
                    }
                }else {
                    echo "Email non précisé ou invalide";
                }
            }else {
                echo "Veuillez indiquer votre nom et prénom";
            }
        } else {
            echo "Veuillez préciser le nomde l'équipage";
        }


        include "../chopper/TCfooter.php"
        ?>



        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

    </body>
</html>
