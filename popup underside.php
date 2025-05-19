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

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<!-- Popup container -->
<div >
    <!-- Gave ikon -->
    <div id="gaveIkon" class="position-relative mb-3">
        <img src="images/lillegave.png" alt="Gave icon 150kr" style="width: 100px">
    </div>

<div id="donationPopup" class="modal-body" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="text-center">


                <!-- Tak tekst -->
                <h2 class="" style="color:#004032;">TAK!</h2>
                <p class="">Du har valgt at donere et juletræ til en familie<br>
                    der mangler lidt lys her i den mørke juletid.</p>

                <!-- Juletræ illustration -->
                <img src="images/juletra.png" alt="Juletræ" id="juletraIllustration" class="position-relative my-3" style="width: 120px;">

                <!-- Knapper -->
                <div class="d-grid gap-2">
                    <button id="continueBtn" class="btn btn-success">FORTSÆT</button>
                    <button id="backBtn" class="btn btn-outline-secondary">TILBAGE</button>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>