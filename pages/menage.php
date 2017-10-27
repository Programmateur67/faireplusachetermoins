<!DOCTYPE html>
<html>

<head>
    <title>Faire + Acheter - | Ménage</title>
    <?php include '../head.php' ?>
</head>

<body>
    <!--Navigation bar-->

    <div class="fixed-top">
        <div class="card bg-secondary text-white text-center">
            <div class="card-body">
                <br/>
                <br/>
                <h1 class="display-4">Ménage</h1>
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

                    <div class="card" onclick="location.href='http://www.faireplusachetermoins.fr/pages/menage/lessive.php'">
                        <img src="../img/lessiveico.jpg" alt="lessive" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">La lessive</h4>
                            <span class="fa fa-clock-o"> 15min</span>
                            <p class="card-text">Ingrédients : cristaux de soude, savon de Marseille en paillettes, savon noir liquide, eau.</p>
                        </div>
                    </div>

                    <div class="card" onclick="location.href='http://www.faireplusachetermoins.fr/pages/menage/lavevaisselle.php'">
                        <img src="../img/lavevaisselleico.jpg" alt="lavevaisselle" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">Le lave-vaisselle</h4>
                            <span class="fa fa-clock-o"> 3min</span>
                            <p class="card-text">Ingrédients: percarbonate de soude, cristaux de soude, savon de Marseille en paillettes, acide citrique.</p>
                        </div>
                    </div>

                    <div class="card" onclick="location.href='http://www.faireplusachetermoins.fr/pages/menage/nettoyerlaplaqueinox.php'">
                        <img src="../img/nettoyantplaqueico.jpg" alt="nettoyantplaque" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">Nettoyer la plaque en inox</h4>
                            <span class="fa fa-clock-o"> 5min + 2 jours de macération</span>
                            <p class="card-text">Ingrédients: vinaigre d’alcool blanc à 12° au moins, peaux de citron ou d’orange.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-3">
                <div class="card-deck">

                    <div class="card" onclick="location.href='http://www.faireplusachetermoins.fr/pages/menage/recurerlaplaqueinox.php'">
                        <img src="../img/recurerico.jpg" alt="nettoyantplaque" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">Récurer la plaque en inox</h4>
                            <span class="fa fa-clock-o"> 0min</span>
                            <p class="card-text">Ingrédients: Percarbonate de soude.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </main>

    <?php include '../scripts.php' ?>
</body>

</html>
