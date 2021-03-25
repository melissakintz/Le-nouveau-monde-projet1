<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
</head>


<body>



<?php include "./navbar.php" ?>

<section id = "message">
    <p> <?php echo $_POST['nomPrenom']?> de <?php echo $_POST['equipage']?>, merci d'avoir contacté le Nouveau monde ,</br> nous avons bien reçu votre demande, elle  sera traitée sous peu par l'un des membres de notre équipage,</br> merci de bien vouloir patienter jusqu'à notre retour par mail.</br>
   </p>
</br>
    <p> <?php echo $_POST['nomPrenom']?> de <?php echo $_POST['equipage']?> a fait la demande suivante :</br>
    suite ou pendant le contrat à rencontré le probléme suivant <?php echo $_POST['select']?>
     <?php echo $_POST['raison']?>.</br>
   information supplémentaire :<?php echo $_POST['message']?> </p></br>
  <p>  Nous vous remercions pour votre retour , vous serez recontacté via l'adresse mail <?php echo $_POST['email']?> fourni dans le formulaire.</br>
    Merci de nous faire confiance pour votre demande, bonne fin de journée.</p></br>
</section>

<?php include "./footer.php"?>



<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

</body>
</html>