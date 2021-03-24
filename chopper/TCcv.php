<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curriculum Vitae | Tony Tony Chopper</title>
    <link rel="stylesheet" href="../style.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
</head>
<body>
    <?php include "./TCnavbar.php" ?>
    <header>
        <div id="my-id">
        </div>
        <h2 id = "Présentation"></h2>
        <div class="uk-child-width-1-2@s uk-light" uk-grid>
            <div>
                <div class="uk-background-top-right uk-background-cover uk-height-medium  uk-visible@s" style="background-image: url(../assets/chopper/chopper15.gif);">
                </div>
            </div>
            <div>
                <div class="uk-background-top-left uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-middle uk-flex-center  uk-visible@s" style="background-image: url(../assets/chopper/chopper17.jpg);">
                </div>
            </div>
            <div>
                <div class="uk-background-top-left uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-middle uk-flex-center uk-hidden@s " style="background-image: url(../assets/chopper/chopper17.jpg);">
                </div>
            </div>
            <script>
                UIkit.util.on('#js-scroll-trigger', 'scrolled', function () {
                    alert('Done.');
                });
            </script>
        </div>
        <section class = "Presentation">
            <h2> • Tony Tony Chopper • Docteur et Pirate • 17 ans  </h2>
        </section>
    </header>

    <main>
        <section class = "Biographie">
            <h2 id = "Biographie">• Biographie</h2>
            <p>
                Je suis un renne mais après avoir mangé le Hito Hito no Mi je peux de me transformer en humain.  On me considère comme l’animal de compagnie de l’équipage… Mais je suis un très bon docteur. D’ailleurs je suis le docteur l'Équipage du Chapeau de Paille.<br/>
                Je viens de l'Île de Drum, et je suis le premier membre de l'équipage du Chapeau de Paille à être né sur La Route de tous les Périls.
            </p>
        </section>
        <section class = "Compétence">
            <h2 id = "Compétence">• Mes Compétences</h2>
            <p>
                Je possède de grandes connaissances en médecine ainsi qu'en préparation de remède et de médicaments. Et je me sers très bien de mes sabots et mes cornes pour me battre.
            </p>
        </section>
        <section class = "imgCompétence">
            <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-visible@s uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                        <img src="../assets/chopper/chopper14.gif">
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-visible@s uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="../assets/chopper/choppercompetences.png">
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default  uk-hidden@s uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <img src="../assets/chopper/choppercompetences.png">
                </div>
            </div>

        </section>

        <section class = "Personnalité">
            <h2 id = "Personnalité">• Ma Personnalité</h2>
            <p>Je suis très altruiste, en effet en plus d'être gentil, j'aime aider les autres. J'adore être complimenté... même si je ne l'avoue pas.</p>
        </section>

        <section class ="Contact uk-visible@s">
            <img src="../assets/chopper/chopper13.jpg"/>
            <p>
                "Un Docteur, un Docteur, ah oui c'est moi!"
            </p>
        </section>

    </main>

    <?php include "./footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
</body>
</html>