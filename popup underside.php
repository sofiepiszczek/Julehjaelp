<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<head>
    <meta charset="utf-8">

    <title>popup underside</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/18ba232400.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<!-- Popup container -->
<div class="container col-10 mt-5 d-none">
<div id="donationPopup" class="modal-body" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4 julebg">
            <div class="text-center">

                <!-- Gave ikon -->
                <div id="gaveIkon" class="position-relative mb-3">
                    <img src="images/gave150.png" alt="Gave icon 150kr" style="width: 100px">
                </div>
                <!-- Tak tekst -->
                <h2 class="" style="color:#004032;">TAK!</h2>
                <p class="">Du har valgt at donere et juletræ til en familie<br>
                    der mangler lidt lys her i den mørke juletid.</p>

                <!-- Knapper -->
                <div class="gap-2">
                    <div class="btn btn-darkgreen">
                        <a href="" style="color:#ffd300">FORTSÆT</a>
                    </div>
                    <div class="btn btn-outline-darkgreen">
                        <a href="" style="color:#004032">TILBAGE</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="card m-3 position-relative">
<div class="container h-100 ">
    <div class="row">
        <div class="col-8 position-absolute top-0 start-50 translate-middle">
            <img src="images/gave150.png" alt="Gave icon 150kr" class="img-fluid">
        </div>
        <div class="col-12 text-center p-4 takmt"><h1 class="tak text-darkgreen">TAK!</h1></div>
        <div class="col-12">
            <p>Du har valgt at donere
                et juletræ til en familie
                der mangler lidt lys her
                i den mørke juletid.</p>
        </div>
        <div class="col-12 text-center p-2">
            <div class="btn bg-darkgreen">
                <a href="" class="text-yellow">FORSTÅET</a>
            </div>
        </div>
        <div class="col-12 text-center p-2">
            <div class="btn btn-outline-darkgreen">
                <a href="" class="text-darkgreen">TILBAGE</a>
            </div>
        </div>
    </div>
</div>
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>