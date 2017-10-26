<!DOCTYPE html>
<html>

<head>
    <title>Faire + Acheter - | Ménage</title>
    <?php include '../head.php' ?>
</head>

<body>
    <!--Navigation bar-->
    <?php include '../nav.php' ?>

    <main role="main">

        <div class="container">

            <h1 class="display-3">Ménage</h1>
            <hr/>

            <div class="row">
                <div class="col-md-4 mb-1" onclick="location.href='http://www.faireplusachetermoins.fr/pages/menage/lessive.php'">
                    <div class="card">
                        <img src="../img/lessiveico.jpg" alt="lessive" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">La lessive</h4>
                            <span class="fa fa-clock-o"> 15min</span>
                            <p class="card-text">Ingrédients : cristaux de soude, savon de Marseille en paillettes, savon noir liquide, eau.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-1" onclick="location.href='http://www.faireplusachetermoins.fr/pages/menage/lavevaisselle.php'">
                    <div class="card">
                        <img src="../img/lavevaisselleico.jpg" alt="lavevaisselle" class="card-img-top" />
                        <div class="card-body">
                            <h4 class="card-title">Le lave-vaisselle</h4>
                            <span class="fa fa-clock-o"> 3min</span>
                            <p class="card-text">Ingrédients: percarbonate de soude, cristaux de soude, savon de Marseille en paillettes, acide citrique.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <?php include '../scripts.php' ?>
</body>

</html>
