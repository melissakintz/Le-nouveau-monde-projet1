<link rel="stylesheet" href="style.css" type="text/css">

<?php include "./navbar.php"?>

<section id = "message">
<p> <?php echo $_POST['equipage']?>, merci à toi d'avoir contacté le Nouveau monde , nous avons bien recu votre demande qui sera traité sous peu par l'un des membres de notre équipage.</br>
 Nous reviendrons vers vous avec une liste de candidats pouvant répondre a vos critères</p></br>
 
 <p> <?php echo $_POST['equipage']?> a fait la demande suivante :</br>
  Vous avez choisi les corps de métier suivant <?php echo $_POST['metiers']?>
  avec un budget de <?php echo $_POST['budget']?> €</br>
 Nous vous recontacterons via l'adresse email <?php echo $_POST['email']?></br>
  Merci de nous faire confiance pour votre demande, bonne fin de journée</p></br> 
</section>

<?php include "./footer.php"?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>