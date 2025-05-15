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
    <script src="https://kit.fontawesome.com/18ba232400.js" crossorigin="anonymous"></script>
</head>

<body class="bg-darkgreen">
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            include 'includes/navbar.php';
            ?>
        </div>
        <div class="col-12">
            <h1 class="text-center text-white">BLIV HJERTEJÆLPER</h1>
        </div>
        <div class="py-2">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text text-yellow" id="lille-tab" data-bs-toggle="tab" data-bs-target="#lille-tab-pane" type="button" role="tab" aria-controls="lille-tab-pane" aria-selected="true">LILLE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text text-yellow" id="mellem-tab" data-bs-toggle="tab" data-bs-target="#mellem-tab-pane" type="button" role="tab" aria-controls="mellem-tab-pane" aria-selected="false">MELLEM</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text text-yellow" id="stor-tab" data-bs-toggle="tab" data-bs-target="#stor-tab-pane" type="button" role="tab" aria-controls="stor-tab-pane" aria-selected="false">STOR</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text text-yellow" id="frit-tab" data-bs-toggle="tab" data-bs-target="#frit-tab-pane" type="button" role="tab" aria-controls="frit-tab-pane" aria-selected="false">FRIT BELØB</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text text-yellow" id="erhverv-tab" data-bs-toggle="tab" data-bs-target="#erhverv-tab-pane" type="button" role="tab" aria-controls="erhverv-tab-pane" aria-selected="false">ERHVERV</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="lille-tab-pane" role="tabpanel" aria-labelledby="lille-tab" tabindex="0">
                <div class="container bg-white rounded-2">
                    <div class="row justify-content-center">
                        <div class="col-4 p-3 d-flex justify-content-center align-items-center">
                            <img src="images/juletra.png" class="img-fluid w-75" alt="Juletræ">
                        </div>
                        <div class="col-6 p-3 d-flex justify-content-center align-items-center text-darkgreen">
                            <p class="m-0">DU GIVER NU EN DANSK FAMILIE MULIGHEDEN FOR ET JULETRÆ TIL JUL</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="mellem-tab-pane" role="tabpanel" aria-labelledby="mellem-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="stor-tab-pane" role="tabpanel" aria-labelledby="stor-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="frit-tab-pane" role="tabpanel" aria-labelledby="frit-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="erhverv-tab-pane" role="tabpanel" aria-labelledby="erhverv-tab" tabindex="0">...</div>
        </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
