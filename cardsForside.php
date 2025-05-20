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
<div>
    <div class="container col-10 mt-5">
    <!-- card m. donation 150kr-->
    <div class="card text-center">
        <div class="card-body">
            <h2>ET JULETRÆ</h2>
            <p>1 x juletræ til en børnefamilie</p>
            <div class="btn btn-darkgreen">
                <a href="" style="color:#ffd300">VÆLG</a>
            </div>
        </div>
    </div>
    </div>
    <!-- Gave ikon -->
    <div id="pakkeIkon" class="position-relative mb-3">
        <img src="images/lillegave.png" alt="Gave icon 150kr" style="width: 100px">
    </div>
</div>

<!-- card m. donation 800kr-->
<div>
    <div class="container col-10">
        <!-- card m. donation -->
        <div class="card text-center">
            <div class="card-body">
                <h2>EN JULEMIDDAG</h2>
                <p>1 x gavekort til rema1000</p>
                <div class="btn btn-darkgreen">
                    <a href="" style="color:#ffd300">VÆLG</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gave ikon -->
    <div id="pakkeIkon2" class="position-relative mb-3">
        <img src="images/lillegave.png" alt="Gave icon 150kr" style="width: 100px">
    </div>
</div>

<!-- card m. donation 1500kr-->
<div>
    <div class="container col-10">
        <!-- card m. donation -->
        <div class="card text-center">
            <div class="card-body">
                <h2>En FULD JULEAFTEN</h2>
                <p class="ms-5 me-5">1 x juletræ, 1 x gavekort til rema1000 + 1 x julegave til barn</p>
                <div class="btn btn-darkgreen">
                    <a href="" style="color:#ffd300">VÆLG</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gave ikon -->
    <div id="pakkeIkon" class="position-relative mb-3">
        <img src="images/lillegave.png" alt="Gave icon 150kr" style="width: 100px">
    </div>
</div>



<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
