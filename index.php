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
<!--til top funktion m. pil-->
<div class="container-fluid position-absolute ">
    <i class="fa-solid fa-angles-up fa-2xl text-yellow pb-3" onclick="topFunction()" id="ToTop" title="Go to top"></i>
</div>

<div class="container-fluid p-0">
<!--Landingpage video-->
    <div class="container-fluid banner m-0 p-0 d-flex flex-wrap overflow-hidden">
        <video autoplay muted loop class="videobg w-100 object-fit-cover position-absolute top-0 bottom-0 z-0">
            <source src="video/herovideo.mp4" type="video/mp4">
        </video>

<!--Navbaren-->
        <div class="col-12 z-2">
            <?php
            include 'includes/navbar.php';
            ?>
        </div>

<!--Landingpage-->
        <div class=" col-12 tekst1 d-flex justify-content-center align-items-center flex-wrap flex-column h-100 z-1 position-relative">
            <div><h1 class="text-yellow text-center">Vi har indsamlet</h1></div>
            <div><h1 id="counter" class="text-yellow text-center">0</h1></div>
            <div><h1 class="text-yellow text-center">til</h1></div>
            <div><h1 id="counter1" class="text-yellow text-center">0</h1></div>
            <div><h1 class="text-yellow text-center">børnefamilier</h1></div>
            <div><a class="fa-solid fa-chevron-down fa-beat-fade fa-2xl text-center text-yellow fs-1 p-3"
                    href="#scrollspyNext"></a></div>
        </div>
    </div>

<!--citat m. typewriter-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-darkgreen py-5 px-2">
                <i class="fa-solid fa-quote-left fa-2xl py-3" style="color: #ffd300;"></i>
                <p class="text-white text-center fs-3" id="typewriter"></p>
                <div class="text-end"><i class="fa-solid fa-quote-right fa-2xl py-3" style="color: #ffd300;"></i></div>
                <p class="text-center text-white fs-5 p-3"><i class="fa-solid fa-minus" style="color: #ffd300;"></i>
                    Line, 30 år, mor til Liwa, 3 år & Arlo, 1 år.</p>
            </div>

<!--Cards m. pakkeløsning-->
            <div class="col-12 px-4">
                <h2 class="text-darkgreen text text-center py-3 fs-1">GIV EN JULEGAVE</h2>
            <div>
                <!-- card m. donation 150kr-->
                    <div>
                        <div class="container col-10 position-relative mb-5">
                            <!-- card m. donation -->
                            <div class="card text-center">
                                <div class="card-body">
                                    <h2>ET JULETRÆ</h2>
                                    <p>1 x juletræ til en børnefamilie</p>
                                    <div class="btn btn-darkgreen">
                                        <a href="" style="color:#ffd300">VÆLG</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Gave ikon -->
                            <div id="" class="position-absolute top-50 start-0 translate-middle">
                                <img src="images/gave150.png" alt="Gave icon 150kr" style="width: 150px">
                            </div>
                        </div>
                    </div>

                <!-- card m. donation 800kr-->
                <div>
                    <div class="container col-10 position-relative mb-5">
                        <!-- card m. donation -->
                        <div class="card text-center">
                            <div class="card-body ">
                                <h2>EN JULEMIDDAG</h2>
                                <p>1 x gavekort til rema1000</p>
                                <div class="btn btn-darkgreen">
                                    <a href="" style="color:#ffd300">VÆLG</a>
                                </div>
                            </div>
                        </div>
                        <!-- Gave ikon -->
                        <div id="" class="position-absolute top-50 start-100 translate-middle">
                            <img src="images/gave800.png" alt="Gave icon 800kr" style="width: 150px">
                        </div>
                    </div>
                </div>

                <!-- card m. donation 1500kr-->
                <div>
                    <div class="container col-10 position-relative mb-5">
                        <!-- card m. donation -->
                        <div class="card text-center">
                            <div class="card-body">
                                <h2>EN FULD JULEAFTEN</h2>
                                <p>1 x juletræ, 1 x gavekort til rema1000, 1 x julegave til barn</p>
                                <div class="btn btn-darkgreen">
                                    <a href="" style="color:#ffd300">VÆLG</a>
                                </div>
                            </div>
                        </div>

                        <!-- Gave ikon -->
                        <div id="" class="position-absolute top-50 start-0 translate-middle">
                            <img src="images/gave1500.png" alt="Gave icon 1500kr" style="width: 150px">
                        </div>
                    </div>
                </div>
            </div>
<!--Nillo bog-->
            <div class="container-fluid bg-darkgreen py-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 py-4 text-center text-white">
                        <h2>NISSEN MED DET DELTE HJERTE</h2>
                        <p><i class="fa-solid fa-minus" style="color: #ffd300;"></i> en julekalender på 24 kapitler</p>
                    </div>
                    <div class="col-6 p-3">
                        <img src="images/Bogomslag.png" class="img-fluid" alt="Bogomslag">
                    </div>
                    <div class="col-6 text-white py-4 fs-5">
                        <p><span class="text-green">En moderne julefortælling om nissen Nillo</span>, der rejser rundt
                            for at dele julens magi med børn,
                            der har allermest brug for den. Sammen med <span class="text-green">Maja</span>, der selv
                            får <span class="text-green">julehjælp</span>, lærer vi,
                            at det er helt okay at modtage – <span
                                    class="text-green">og at alle har noget at give.</span></p>
                    </div>
                    <div class="py-4 d-flex">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <div class="btn btn-yellow text  text-center py-2 w-75">
                                <a href="" class="text-decoration-none text-darkgreen">KØB HER</a>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-center align-items-center ">
                            <div class="btn btn-outline-yellow text  text-center py-2 w-75">
                                <a href="" class="text-decoration-none text-yellow">LÆS MERE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--Citat m. tyoewriter-->
            <div class="col-12 py-5 px-2">
                <i class="fa-solid fa-quote-left fa-2xl py-3" style="color: #ffd300;"></i>
                <p class="text-darkgreen text-center fs-3" id="typewriter2"></p>
                <div class="text-end"><i class="fa-solid fa-quote-right fa-2xl py-3" style="color: #ffd300;"></i></div>
                <p class="text-center text-darkgreen fs-5 p-3"><i class="fa-solid fa-minus" style="color: #ffd300;"></i>
                    Line, 30 år, mor til Liwa, 3 år & Arlo, 1 år.</p>
            </div>
            <div class="col-12 container-fluid py-4">
                <img src="images/infografik1.png" alt="infografik" class="img-fluid">
            </div>
            <div class="col-12 bgimg py-5 text-center text-white d-flex flex-column justify-content-center align-items-center">
                <h2>TÆND ET LYS I MØRKET</h2>
                <p><i class="fa-solid fa-minus" style="color: #ffd300;"></i> støt en familie i dag</p>
                <div class="col-6 py-5 d-flex flex-column justify-content-center align-items-center">

                    <div class="btn btn-yellow text text-center py-2 my-3 ms-5">
                        <a href="" class="text-decoration-none text-darkgreen">PRIVATPERSON</a>
                    </div>
                    <div class="btn btn-yellow text text-center py-2 my-3 ms-5">
                        <a href="" class="text-decoration-none text-darkgreen">VIRKSOMHED</a>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
