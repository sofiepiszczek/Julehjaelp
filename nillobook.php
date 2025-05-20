<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>

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

<body class="bg-darkgreen">
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 z-2">
            <?php
            include 'includes/navbar.php';
            ?>
        </div>
        <div class="col-12">
            <h1 class="text-white text-center pt-3">NISSEN MED DET DELTE HJERTE</h1>
        </div>
        <div class="col-12">
            <p class="text-white text-center"><i class="fa-solid fa-minus" style="color: #ffd300;"></i> en julekalender på 24 kapitler for hele familien</p>
        </div>
        <div class="col-10">
            <div class="container bg-darkgreen rounded-2 px-2 pb-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-11">
                        <img src="images/Bogomslag.png" alt="Bogomslag" class="img-fluid object-fit-cover py-3">
                    </div>
                    <div class="col-11">
                        <div class="input-group mb-3 px-5">

                            <!--amount of books buyer wants to buy
                            https://getbootstrap.com/docs/5.3/forms/input-group/-->
                            <button class="minus btn btn-outline-white" type="button"><i class="fa-solid fa-minus"></i></button>
                            <input type="text" class="tal form-control text-center" value="1" aria-label="amount of books wanted">
                            <button class="plus btn btn-outline-white" type="button"><i class="fa-solid fa-plus"></i></button>
                        </div>
                        <p class="text-white">
                            En moderne julefortælling om nissen Nillo, der rejser rundt for at dele julens magi med børn,
                            der har allermest brug for den. Sammen med Maja, der selv får julehjælp, lærer vi,
                            at det er helt okay at modtage – og at alle har noget at give.
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <div class="btn bg-yellow px-3 py-2 mb-4">
                            <a href="" class="text text-white">FORTSÆT</a>
                        </div>
                        <div class="col-12 text-center">
                        <div class="btn btn-outline-white px-3 py-2 ">
                            <a href="" class="text text-white">TILBAGE</a>
                        </div>
                        </div>
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
