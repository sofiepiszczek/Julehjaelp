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

<body>
<div class="container mb-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 z-2">
            <?php
            include 'includes/navbar.php';
            ?>
        </div>
        <div class="col-12 py-3 py-md-5 py-lg-5">
            <h1 class="text-darkgreen text-center">OM OS</h1>
        </div>
        <div class="col-10">
            <div class="container-fluid bg-grey rounded-2 px-0">
                <!--Sløjfe -->
                <div class="bowbanner col-12 position-relative d-inline-block mb-5 rounded-top-2">
                    <div class="col-3 col-md-2 position-absolute top-50 start-50 translate-middle">
                        <img src="images/bowVandret.png" alt="Sløjfe" class="img-fluid pt-4 mt-1">
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-lg-2">
                    <div class="col-11">
                        <p>
                            Dansk Folkehjælp er en landsdækkende NGO, som arbejder for og med mennesker i
                            socialt- og økonomisk udsatte livspositioner. Vi arbejder for at reducere
                            ulighed og mener, at varige sociale forandringer sker ved sikre handlekraft og
                            lige muligheder til alle. Vi arbejder nationalt og internationalt og hjælper uden
                            at skele til nationalitet, etnicitet eller religion.
                        </p>
                    </div>
                    <div class="col-12 col-md-9 p-0">
                        <img src="images/OMOS.jpg" alt="Flygtningelejr" class="img-fluid object-fit-cover py-3">
                    </div>
                    <div class="col-11">
                        <p>
                            Dansk Folkehjælp blev etableret i 1907 og har i dag 28 lokalafdelinger fordelt over hele
                            Danmark med 2.000 aktive frivillige og medlemmer. Internationalt arbejder vi med
                            kapacitetsopbygning og adgang til rent vand med vores partnere i Uganda, Tanzania, Somalia,
                            Kenya
                            og Zambia, vi bygger skoler i Afghanistan og arbejder med genopbygning og rehabilitering i
                            det krigshærgerede Ukraine.
                        </p>
                    </div>
                    <div class="col-12 text-center py-3 mb-3">
                        <div class="btn bg-darkgreen px-3 py-2 ">
                            <a href="vælgPakke.php" class="text text-yellow">HJÆLP OS MED AT HJÆLPE</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

