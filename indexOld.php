<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Le nouveau monde</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
  </head>
  <body>


    <?php include './navbar.php' ?>

    <main>
      <section class="banner">
          <h1> Bienvenue dans le nouveau monde </h1>
          <p>Recrutez la personne de vos rêves pour votre equipage.</p>
      </section>

      <section id ='introduction'>
        <h1>N'hesitez pas à jeter un petit coup d'oeil aux trois favoris du mois.</h1>
      </section>

      <section class="container">
          <div id = "items">
              <a href="./brook.php"> <img src="./assets/brook1.jpg"/></a>
              <br/><h2 id = 'musicien'>Brook</h2>
          </div>
          <div id = "items">
              <a href="./chopper.php"> <img src="./assets/chopper1.jpg"/></a>
              <br/><h2 id = 'médecin'>Chopper</h2>
          </div>
          <div id = "items">
              <a href="./franky.php"> <img src="./assets/franky1.jpg"/></a>
              <br/><h2 id = 'charpentier'>Franky</h2>
          </div>
      </section>

        <?php include "./carte.php"?>
    </main>
  

    <?php include './footer.php'?>
  </body>
</html>