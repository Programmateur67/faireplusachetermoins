<!DOCTYPE html>
<html>

<head>
    <title>Faire + Acheter - | Glou</title>
    <?php include '../head.php' ?>
</head>

<body>
    <!--Navigation bar-->

    <div class="fixed-top">
        <div class="card bg-secondary text-white text-center">
            <div class="card-body">
                <br/>
                <br/>
                <h1 class="display-4">Glou</h1>
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

                    <div class="card" onclick="location.href='http://www.faireplusachetermoins.fr/pages/glou/eaugazeuse.php'">
                        <img src="../img/Eaugazeuseico.JPG" alt="eau gazeuse" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">Eau gazeuse</h4>
                            <span class="fa fa-clock-o"> 10sec</span>
                            <p class="card-text">Ingrédients: eau filtrée, cartouche de gaz.</p>
                        </div>
                    </div>

                    <div class="card" onclick="location.href='http://www.faireplusachetermoins.fr/pages/glou/eaufiltre.php'">
                        <img src="../img/Eaugazeuseico.JPG" alt="huile pimentée" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">Eau filtrée</h4>
                            <span class="fa fa-clock-o"> 1min + 4h de repos</span>
                            <p class="card-text">Ingrédients: 5l d'eau du robinet, 5 charbons binchotan.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>

    <?php include '../scripts.php' ?>
</body>

</html>
