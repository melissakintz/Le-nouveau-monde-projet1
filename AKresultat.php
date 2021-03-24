<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="AKstyle.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
</head>


<body>



<?php include "./AKnavbar3.php"?>

<section id = "message">
    <p> Yohohoho Mais qui voila ? ne serais ce pas , <?php echo $_POST['nomPrenom']?> de <?php echo $_POST['equipage']?>, </br> Merci de m'avoir contacter, je vais étudier votre requête dans les plus bref délais ,</br> merci de bien vouloir patienté jusqu'a mon retour par mail.</br>
   </p>
</br>
    <p> <?php echo $_POST['nomPrenom']?> de <?php echo $_POST['equipage']?> vous a fait la demande suivante :</br>
    seriez vous intérésser par une offre concernant vos capacités de :<?php echo $_POST['raison']?>
    d'une durée de  <?php echo $_POST['select']?>.</br>
   information supplémentaire :<?php echo $_POST['message']?> </p></br>
  <p>  je vous remercie pour votre retour , vous serez recontacter via l'adresse mail <?php echo $_POST['email']?> fourni dans le formulaire.</br>
    Merci de me faire confiance pour votre demande, bonne fin de journée</p></br>
</section>

<?php include "./AKfooter2.php"?>



<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>

</body>
</html>
