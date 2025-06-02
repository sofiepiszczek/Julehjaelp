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

<!--Landingpage video-->
<div class="container-fluid p-0">
    <div class="container-fluid banner m-0 p-0 d-flex flex-wrap overflow-hidden">
        <video autoplay muted loop class="videobg w-100 object-fit-cover position-absolute top-0 bottom-0 z-0">
            <source src="video/herovideo.mp4" type="video/mp4">
        </video>

        <!--Navbaren-->
        <div class="col-12 z-2 d-flex justify-content-center">
            <?php
            include 'includes/navbar.php';
            ?>
        </div>

        <!--Landingpage m. indsamlings tal-->
        <div class=" col-12 tekst1 d-flex justify-content-center align-items-center flex-wrap flex-column h-100 z-1 position-relative">
            <div><h1 class="text-yellow text-center instru">Vi har indsamlet</h1></div>
            <div><h1 id="counter" class="text-yellow text-center instru fstal">0</h1></div>
            <div><h1 class="text-yellow text-center instru">til</h1></div>
            <div><h1 id="counter1" class="text-yellow text-center instru fstal ">0</h1></div>
            <div><h1 class="text-yellow text-center instru pb-5">børnefamilier</h1></div>


            <div class="col-6 d-flex justify-content-center align-items-center pt-5">
                <div class="btn btn-outline-yellow text text-center py-2 px-5">
                    <a href="vælgPakke.php#mellem-tab-pane" class="text-decoration-none text-yellow stotHer">STØT HER</a>
                </div>
            </div>
        </div>
    </div>

    <!--Citat-->
    <div class="container-fluid">
        <div class="row">
            <!--citat m. typewriter-->
            <div class="col-12 bg-darkgreen py-5 px-2 d-flex justify-content-center align-items-center typewriterBanner">
                <div class="col-12 col-md-10 col-lg-8">
                    <i class="fa-solid fa-quote-left fa-2xl py-3" style="color: #ffd300;"></i>
                    <p class="text-white text-center fs-3" id="typewriter"></p>
                    <div class="text-end"><i class="fa-solid fa-quote-right fa-2xl py-3" style="color: #ffd300;"></i>
                    </div>
                    <p class="text-center text-white fs-5 p-3"><i class="fa-solid fa-minus" style="color: #ffd300;"></i>
                        Line, 30 år, mor til Liwa, 3 år & Arlo, 1 år.</p>
                </div>
            </div>

            <!--Cards m. pakkeløsning-->
            <div class="col-12 px-4">
                <h2 class="text-darkgreen text text-center py-4 fs-1">GIV EN JULEGAVE</h2>
            </div>
            <div>
                <!-- card m. donation 150kr-->
                <div>
                    <div class="container col-9 col-md-6 d-lg-none position-relative mb-5">
                        <!-- card m. donation -->
                        <div class="card text-center">
                            <div class="card-body d-flex flex-column align-items-end pe-md-4">
                                <h3 class="text-darkgreen fs-2">ET JULETRÆ</h3>
                                <p>1 x juletræ til en børnefamilie</p>
                                <div class="btn btn-darkgreen mx-3">
                                    <a href="vælgPakke.php#lille-tab-pane" style="color:#ffd300">VÆLG</a>
                                </div>
                            </div>
                        </div>

                        <!-- Gave ikon -->
                        <div id="" class="position-absolute top-50 start-0 translate-middle">
                            <img src="images/gave150.png" alt="Gave icon 150kr" class="img-fluid" style="width: 150px">
                        </div>
                    </div>
                </div>

                <!-- card m. donation 800kr-->
                <div>
                    <div class="container col-9 col-9 col-md-6 d-lg-none position-relative mb-5">
                        <!-- card m. donation -->
                        <div class="card text-center">
                            <div class="card-body d-flex flex-column align-items-start ps-md-4">
                                <h3 class="text-darkgreen fs-2">EN JULEMIDDAG</h3>
                                <p>1 x gavekort til rema1000</p>
                                <div class="btn btn-darkgreen mx-3">
                                    <a href="vælgPakke.php#mellem-tab-pane" style="color:#ffd300">VÆLG</a>
                                </div>
                            </div>
                        </div>
                        <!-- Gave ikon -->
                        <div id="" class="position-absolute top-50 left translate-middle">
                            <img src="images/gave800.png" alt="Gave icon 800kr" style="width: 140px">
                        </div>
                    </div>
                </div>

                <!-- card m. donation 1500kr-->
                <div>
                    <div class="container col-9 col-9 col-md-6 d-lg-none position-relative mb-5 mt-1">
                        <!-- card m. donation -->
                        <div class="card text-center">
                            <div class="card-body d-flex flex-column align-items-end pe-md-4">
                                <h3 class="text-darkgreen fs-2">EN FULD JULEAFTEN</h3>
                                <p class="text-end">1 x juletræ,<br> 1 x julemiddag, 1 x julegave</p>
                                <div class="btn btn-darkgreen mx-3">
                                    <a href="vælgPakke.php#stor-tab-pane" style="color:#ffd300">VÆLG</a>
                                </div>
                            </div>
                        </div>

                        <!-- Gave ikon -->
                        <div id="" class="position-absolute top-50 left1500 translate-middle">
                            <img src="images/gave1500.png" alt="Gave icon 1500kr" class="img-fluid"
                                 style="width: 150px">
                        </div>
                    </div>
                </div>

                <!-- lg-skærm -->
                <div class="container d-none d-md-none d-lg-block mt-5">
                    <div class="row">
                        <div class="col-4">
                            <!-- card m. donation 150kr-->
                            <div class="container position-relative my-3">
                                <!-- card m. donation -->
                                <div class="card text-center pt-5">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <h2 class="text-darkgreen py-3">ET JULETRÆ</h2>
                                        <p class="py-3">1 x juletræ til en børnefamilie</p>
                                        <div class="btn btn-darkgreen mx-3">
                                            <a href="vælgPakke.php#lille-tab-pane" style="color:#ffd300">VÆLG</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Gave ikon -->
                                <div id="" class="position-absolute top-0 start-50 translate-middle">
                                    <img src="images/gave150.png" alt="Gave icon 150kr" class="img-fluid"
                                         style="width: 150px">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <!-- card m. donation 800kr-->
                            <div>
                                <div class="container position-relative my-3">
                                    <!-- card m. donation -->
                                    <div class="card text-center pt-5">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <h2 class="text-darkgreen py-3">EN JULEMIDDAG</h2>
                                            <p class="py-3">1 x gavekort til rema1000</p>
                                            <div class="btn btn-darkgreen mx-3">
                                                <a href="vælgPakke.php#mellem-tab-pane" style="color:#ffd300">VÆLG</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Gave ikon -->
                                    <div id="" class="position-absolute top-0 start-50 translate-middle">
                                        <img src="images/gave800.png" alt="Gave icon 800kr" style="width: 140px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <!-- card m. donation 1500kr-->
                            <div>
                                <div class="container position-relative my-3 ">
                                    <!-- card m. donation -->
                                    <div class="card text-center pt-5">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <h2 class="text-darkgreen py-3">EN FULD JULEAFTEN</h2>
                                            <p class="py-3">1 x juletræ, 1 x julemiddag, 1 x julegave</p>
                                            <div class="btn btn-darkgreen mx-3">
                                                <a href="vælgPakke.php#stor-tab-pane" style="color:#ffd300">VÆLG</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gave ikon -->
                                    <div id="" class="position-absolute top-0 start-50 translate-middle">
                                        <img src="images/gave1500.png" alt="Gave icon 1500kr" class="img-fluid"
                                             style="width: 150px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--QR-kode card-->
            <div>
                <div class="container col-9 col-md-6 position-relative mb-5 mt-5">
                    <!-- card m. donation -->
                    <div class="card text-center">
                        <div class="card-body d-flex flex-column align-items-center ps-md-4">
                            <h2 class="py-3">Bestem selv</h2>
                            <p>Scan QR-koden eller på <span class="text text-red fs-5">13221</span><br>og støt valgfrit
                                med MobilePay.</p>
                        </div>
                        <!-- Nillo billede -->
                        <div id="" class="position-absolute top-50 start-0 translate-middle">
                            <img src="images/nillo.png" alt="Nillo" class="img-fluid" style="width: 100px">
                        </div>

                    </div>
                    <!-- QR koden -->
                    <div id="" class="position-absolute top-50 left translate-middle-y">
                        <img src="images/QRbg.png" alt="QR-kode" style="width: 90px">
                    </div>
                </div>
            </div>

            <!--Nillo bog-->
            <div class="container-fluid bg-darkgreen py-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 py-4 text-center text-white">
                        <h2>NISSEN MED DET DELTE HJERTE</h2>
                        <p><i class="fa-solid fa-minus" style="color: #ffd300;"></i> <span class="text-yellow">en julekalender på 24 kapitler</span>
                        </p>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 p-3">
                        <img src="images/Bogomslag.png" class="img-fluid" alt="Bogomslag">
                    </div>
                    <div class="col-6 col-lg-3 text-white py-4 fs-5">
                        <p>En hjertevarm julefortælling om at <span class="text-yellow">modtage</span> og <span
                                    class="text-yellow">give videre</span>.</p>
                    </div>
                    <div class="col-12 col-lg-9 py-4 d-flex">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <div class="btn btn-yellow text  text-center py-2 px-5">
                                <a href="nillobook.php" class="text-decoration-none text-darkgreen">KØB HER</a>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center ">
                            <div class="btn btn-outline-yellow text text-center py-2 px-5">
                                <a href="nillobook.php" class="text-decoration-none text-yellow">LÆS MERE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Citat m. typewriter-->
            <div class="col-12 py-5 px-2 d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <i class="fa-solid fa-quote-left fa-2xl py-3" style="color: #ffd300;"></i>
                    <p class="text-darkgreen text-center fs-3" id="typewriter2"></p>
                    <div class="text-end"><i class="fa-solid fa-quote-right fa-2xl py-3" style="color: #ffd300;"></i>
                    </div>
                    <p class="text-center text-darkgreen fs-5 p-3"><i class="fa-solid fa-minus"
                                                                      style="color: #ffd300;"></i>
                        Mor, 39 år & 2 drenge på 4 og 7 år</p>
                </div>
            </div>

            <!--Infografik-->
            <div class="col-12 col-lg-10 container-fluid py-4">
                <img src="images/infografik1.png" alt="infografik" class="img-fluid">
            </div>

            <!--Sløjfe -->
            <div class="bowbanner col-12 position-relative d-inline-block mt-5">
                <div class="col-3 position-absolute top-50 start-50 translate-middle d-flex justify-content-center">
                    <img src="images/bowVandret.png" alt="Sløjfe" class="img-fluid pt-4 mt-1">
                </div>
            </div>
            <!--Tænd et lys i mørket billede-->
            <div class="col-12 bgimg py-5 text-center text-white d-flex flex-column justify-content-center align-items-center">
                <h2 class="mt-4">TÆND ET LYS I MØRKET</h2>
                <p><i class="fa-solid fa-minus" style="color: #ffd300;"></i> støt en familie i dag</p>
                <div class="col-6 py-5 d-flex flex-column justify-content-center align-items-center">

                    <div class="btn btn-yellow text text-center py-2 my-3 ms-5">
                        <a href="vælgPakke.php#frit-tab-pane"
                           class="text-decoration-none text-darkgreen">PRIVATPERSON</a>
                    </div>
                    <div class="btn btn-yellow text text-center py-2 my-3 ms-5">
                        <a href="vælgPakke.php#erhverv-tab-pane"
                           class="text-decoration-none text-darkgreen">VIRKSOMHED</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<footer>
    <?php
    include 'includes/footer.php';
    ?>
</footer>

</body>


</html>