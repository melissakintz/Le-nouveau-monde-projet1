<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../global/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <title>Contacte moi | Tony Tony Chopper</title>
</head>


<body>

    <?php
    include "./TCnavbar.php";

    if (isset($_POST['equipage']) && $_POST['equipage'] != ' '){
        if (isset($_POST['nomPrenom']) && $_POST['nomPrenom']){
            if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                if (isset($_POST['select'])) {
                    if (isset($_POST['message']) && $_POST['message'] != " "){ ?>
                        <section id = "message">
                            <p>
                                Je vous remercie pour votre proposition , vous serez recontacté via l'adresse mail <?php echo htmlentities($_POST['email'])?> de ma décision.<br/>
                                Merci de me faire confiance pour votre demande, bonne fin de journée.<br/>
                            </p><br/>
                            <p> <?php echo htmlentities($_POST['nomPrenom']) . " de " . htmlentities($_POST['equipage'])?> a fait la demande suivante :<br/>
                                Offre d'une durée de:  <?php echo htmlentities($_POST['select']). '<br/> Détails de la proposition : <br/>"' . htmlentities($_POST['message'])?>."<br/>
                        </section>
    <?php
                    } else {
                        echo "Veuillez préciser une raison";
                    }
                }else {
                    echo "Veuillez choisir une durée";
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


    include "../global/footer.php"
    ?>



    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

</body>
</html>
