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
    <link rel="stylesheet" href="https://use.typekit.net/bgk1pno.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/18ba232400.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid bg-darkgreen">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 z-2">

            <!--include navbar-->
            <?php
            include 'includes/navbar.php';
            ?>
        </div>

        <!--title og undertitle-->
        <div class="col-12">
            <h1 class="text-white text-center pt-3">NISSEN MED DET DELTE HJERTE</h1>
        </div>
        <div class="col-12">
            <p class="text-white text-center"><i class="fa-solid fa-minus" style="color: #ffd300;"></i> en julekalender
                på 24 kapitler for hele familien</p>
        </div>

        <!--visning af bog-->
        <div class="col-10">
            <div class="container bg-darkgreen rounded-2 px-2 pb-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-11 col-lg-6">
                        <img src="images/Bogomslag.png" alt="Bogomslag" class="img-fluid object-fit-cover py-3">
                    </div>
                    <div class="col-11 col-lg-6">
                        <div class="input-group mb-3 px-5">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <!--beskrivelse af bogens indhold-->
                                <p class="text-white">
                                    En moderne julefortælling om en lille nisse, Nillo, der ikke har sit eget juleværksted,
                                    men i stedet rejser rundt for at dele julens magi med de børn, som har allermest brug for
                                    den.
                                    Han hjælper med at finde "hjertehjælpere" – helt almindelige mennesker, der giver lidt
                                    ekstra
                                    i julen. Sammen med en pige, Maja, der selv får julehjælp, lærer vi, at det er helt okay at
                                    modtage – og at alle har noget at give.
                                </p>

                                <!--antal af bøger, bruger gerne vil købe
                                https://getbootstrap.com/docs/5.3/forms/input-group/-->
                                <div class="d-flex justify-content-center py-3">
                                <button class="minus btn btn-outline-white mx-1" type="button"><i class="fa-solid fa-minus"></i>
                                </button>
                                <input type="text" class="antal form-control w-25 text-center" value="1"
                                       aria-label="amount of books wanted">
                                <button class="plus btn btn-outline-white mx-1" type="button"><i class="fa-solid fa-plus"></i>
                                </button>
                                </div>

                                <!--CTA knapper til køb og tilbage-->
                                <div class="col-12 text-center mt-3">
                                    <!-- Tak-modal -->
                                    <div class="col-12 text-center">
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                                class="btn bg-yellow px-3 py-2 mb-4"
                                                data-bs-toggle="modal" data-bs-target="#nilloModal">
                                            FORTSÆT
                                        </button>

                                        <!-- MODAL -->
                                        <div class="modal fade" id="nilloModal" tabindex="-1" aria-labelledby="nilloModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog takmttop mx-4">
                                                <div class="modal-content position-relative">
                                                    <div class="modal-body">
                                                        <div class="position-absolute start-50 translate-middle-x"
                                                             style="top: -100px;">
                                                            <img src="images/juletra.png" alt="Gave icon 150kr"
                                                                 class="img-fluid">
                                                        </div>
                                                        <div class="text-center mt-5 pt-5">
                                                            <h1 class="tak text-darkgreen py-3">TAK!</h1>
                                                            <div class="btn bg-darkgreen m-3 text-center px-3">
                                                                <a href="#"
                                                                   class="text-yellow text-decoration-none">FORSTÅET</a>
                                                            </div>
                                                            <button type="button"
                                                                    class="btn btn-outline-darkgreen text-darkgreen text-center m-3 px-3"
                                                                    data-bs-dismiss="modal">
                                                                TILBAGE
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 text-center">
                                            <div class="btn btn-outline-white px-3 py-2 ">
                                                <a href="index.php" class="text text-white">TILBAGE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>




            </div>
        </div>
    </div>
</div>
</div>

<footer>
    <?php
    include 'includes/footer.php';
    ?>
</footer>

<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
