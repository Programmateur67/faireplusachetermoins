<!DOCTYPE html>
<html>

<head>
    <title>Faire + Acheter - | Miam</title>
    <?php include '../head.php' ?>
</head>

<body>
    <!--Navigation bar-->

    <div class="fixed-top">
        <div class="card bg-secondary text-white text-center">
            <div class="card-body">
                <br/>
                <br/>
                <h1 class="display-4">Miam</h1>
            </div>
        </div>
    </div>

    <?php include '../nav.php' ?>

    <main role="main">

        <div class="container-fluid">

            <br/>
            <br/>
            <br/>
            <br/>
            <br/>

            <div class="row">
                <div class="card-deck">

                    <div class="card" onclick="location.href='http://www.faireplusachetermoins.fr/pages/miam/poischiches.php'">
                        <img src="../img/poischichesico.JPG" alt="poischiches" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">Pois chiches d'apéro</h4>
                            <span class="fa fa-clock-o"> 2h + 1 nuit</span>
                            <p class="card-text">Ingrédients: 500g de pois chiches secs, 4 gousses d’ail, 4 cuillères à soupe d’huile d’olive, sel, poivre, bicarbonate de soude alimentaire.</p>
                        </div>
                    </div>

                    <div class="card" onclick="location.href='http://www.faireplusachetermoins.fr/pages/miam/saucefajitas.php'">
                        <img src="../img/fajitasico.jpg" alt="fajitas" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">Sauce fajitas</h4>
                            <span class="fa fa-clock-o"> 4h</span>
                            <p class="card-text">Ingrédients: Environ 5kg de tomate mûre de pleine saison, environ 4kg de poivrons de toutes les couleures, 5 très gros oignons rouge ou rose...</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include '../scripts.php' ?>
</body>

</html>
