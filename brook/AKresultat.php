<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../global/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
</head>


<body>
<?php include "./AKnavbar3.php"?>

<?php
// validation et sécurisation du formulaire suivit du résultat ou du message d'erreur.
if($_POST){

if($_POST['equipage']!='' && $_POST['nomPrenom']!='' && $_POST['select']!='' && $_POST['raison']!='' && $_POST['message']!=''){
if ($_POST['email'] && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

    echo '<p id = messages>Yohohoho Mais qui voila  ne serais ce pas , ' . $_POST['nomPrenom'] . ' de ' . $_POST['equipage'] .  '</br>Merci de m avoir contacter, je vais étudier votre requête dans les plus bref délais ,</br>
    je vous prie de bien vouloir patienté jusqu a mon retour par mail' . '. </br>';
    echo '</br>';
    echo  '' . $_POST['nomPrenom'] . ' de ' . $_POST['equipage'] . ' vous a fait la demande suivante '.  ': </br>';
    echo 'seriez vous intérésser par une offre concernant vos capacités de  ' . $_POST['raison'] . '  pour une durée de : ' . $_POST['select']. '';
    echo '</br>';
    echo 'information supplémentaire : ' . $_POST['raison'] . '</br>'. $_POST['message'] . ' '.  ' </br>';
    echo '</br>';
    echo ' je vous remercie pour votre retour , vous serez recontacter via l adresse mail ' . $_POST['email'] .'    fourni dans le formulaire. </br> 
            Merci de me faire confiance pour votre demande, bonne fin de journée.</p>' ;

            }else{
                echo '<h2>merci de mettre une adresse mail valide </h2>';
                  }
        }else{
            echo '<h2>merci de remplir correctement votre formulaire </h2>';
             }
        }

?>

<?php include "../global/footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

</body>
