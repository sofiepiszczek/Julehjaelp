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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/18ba232400.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 z-2">
            <?php
            include 'includes/navbar.php';
            ?>
        </div>
        <div class="col-12 py-3">
            <h1 class="text-darkgreen text-center">KONTAKT OS</h1>
        </div>
        <div class="col-10">
            <div class="container bg-grey rounded-2 px-2 py-4">
                <h3>DANSK FOLKEHJÆLP</h3>
                <p>
                    Brovejen 4<br>4800 Nykøbing Falster
                    Telefon: +45 70220230<br>E-mail:post@folkehjaelp.dk<br><br>
                    Telefonen er åben 9.00 til 12.00 og 13.00 til 16.00 (ma-to) og 9.00 til 12.00 (fre)<br><br>
                    Kontoret er åbent 9.00 til 16.00 (ma-to).<br> Fredag er der lukket
                </p>
                <img src="" alt="">
            </div>
        </div>
        <div class="col-12 py-4 text-center">
            <div class="btn bg-darkgreen px-3 py-2">
                <a href="" class="text text-yellow">GIV ET BIDRAG</a>
            </div>
        </div>
    </div>
</div>


<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
