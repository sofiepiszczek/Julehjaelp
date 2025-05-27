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
            <h1 class="text-darkgreen text-center">HVAD ER JULEHJÆLP?</h1>
        </div>
        <div class="col-12 col-lg-10">
            <p class="text-darkgreen">
                Julen er en af vores stærkeste fælles traditioner, men for 47.000 børn og deres forældre i Danmark 
                kan den også være årets mest udfordrende tid. Mens mange ser frem til hygge og festligheder, 
                er december for disse familier ofte præget af økonomisk bekymring. Deres budget rækker ikke til julemad, 
                gaver, juletræ eller små overraskelser – ting, der for mange er en naturlig del af julen.
            </p>
        </div>
        <div class="col-12 col-lg-10 justify-content-center align-items-center py-4">
            <img src="images/infografik1.png" alt="Infografik" class="img-fluid">
        </div>
        <div class="col-12 col-lg-6">
                <p class="text-darkgreen">
                    Julehjælpen er en støtteordning, der giver økonomisk trængte familier mulighed for at holde jul
                    ved at hjælpe med mad, gaver og julehygge.
                </p>
        </div>
        <div class="col-12 justify-content-center align-items-center py-4">
            <img src="images/infografik2.png" alt="Infografik2" class="img-fluid">
        </div>
        <div class="col-12 col-lg-6 text-center">
            <p class="text-darkgreen">
                Vær med til at hjælpe <span class="text text-uppercase text-red">Julehjælpen</span> nu, og giv en gave der holder for livet:
            </p>
        </div>
        <div class="col-12 py-4 mb-5 text-center">
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