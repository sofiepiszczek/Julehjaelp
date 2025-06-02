<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Julehjælp</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/bgk1pno.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/18ba232400.js" crossorigin="anonymous"></script>
</head>

<body class="h-100">
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 z-2">
            <?php
            include 'includes/navbar.php';
            ?>
        </div>
        <div class="col-12 py-3 py-md-5 py-lg-5">
            <h1 class="text-darkgreen text-center">KONTAKT OS</h1>
        </div>
        <div class="col-10 col-lg-8">
            <div class="container-fluid bg-grey rounded-2 p-0">
                <!--Sløjfe -->
                <div class="bowbanner col-12 position-relative d-inline-block mb-5 rounded-top-2">
                    <div class="col-3 position-absolute top-50 start-50 translate-middle">
                        <img src="images/bowVandret.png" alt="Sløjfe" class="img-fluid pt-4 mt-1">
                    </div>
                </div>

                <h3 class="px-3">DANSK FOLKEHJÆLP</h3>
                <p class="px-3">
                    Brovejen 4<br>4800 Nykøbing Falster <br>
                    Telefon: <a href="tel:+4570220230" class="text-red">+45 70 220 230</a> <br>
                    Mail: <a href="mailto:post@folkehjaelp.dk" class="text-red">post@folkehjaelp.dk</a> <br>
                    Telefonen er åben 9.00 til 12.00 og 13.00 til 16.00 (ma-to) og 9.00 til 12.00 (fre)<br><br>
                    Kontoret er åbent 9.00 til 16.00 (ma-to).<br> Fredag er der lukket
                </p>
                <img src="images/nillo.png" class="img-fluid p-4" style="width: 50%" alt="Drillenisse">
            </div>
        </div>
        <div class="col-12 py-4 text-center">
            <div class="btn bg-darkgreen px-3 py-2">
                <a href="vælgPakke.php" class="text text-yellow">GIV ET BIDRAG</a>
            </div>
        </div>
    </div>
</div>


<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
