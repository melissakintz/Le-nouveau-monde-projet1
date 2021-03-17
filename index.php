<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Le nouveau monde</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>

    <?php include './navbar.php' ?>

    <main>
      <section id="herobanner">
      
          <img src = "./assets/banner3.jpg" id = "bannertop">
      </section>
      <section id = "text">
     <h1> Bienvenu dans le nouveau monde </h1>
     <p>Recrutez la personne de vos rêve pour votre équipage.
     </p>
</section>
<section id ='introduction'>
<h1>n'hesitez pas à jetez un petit coup d'oeil aux trois favoris du mois !</h1> 
      <section id="carte">
        <section id ="carte-img">
        <a href="./brook.php"><img src="./assets/brook1.jpg"/></a>
        <a href="./chopper.php"><img src="./assets/chopper1.jpg"/></a>
        <a href="./franky.php"><img src="./assets/franky1.jpg"/></a>
</section>
</section>
        <section id = "carte-body">
          <h2 id = 'musicien'>Musicien</h2>
          <h2 id = 'médecin'>Medecin</h2>
          <h2 id = 'charpentier'>Charpentier</h2>
</section>
        <section id ="carte-button">
</section>
      </section>

      
    </main>
  

    <?php include './footer.php'?>
  </body>
</html>