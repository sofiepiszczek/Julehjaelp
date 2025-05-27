<!-- Navigationsbar til sm skærme -->
<div class="container d-lg-none">
    <div class="row justify-content-between">
        <div class="col-3 col-md-2 px-4 py-3">
            <a href="index.php"><img src="../images/LogoGulTrans.png" alt="Lille logo" class="img-fluid"></a>
        </div>
        <div class="col-3 py-4 d-flex align-items-center justify-content-center">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-bars fa-2xl text-yellow"></i></button>

            <div class="offcanvas offcanvas-end bg-darkgreen" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title text-white" id="offcanvasRightLabel">JULEHJÆLP</h2>
                    <button type="button" class="btn-close btn-yellow" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <nav class="offcanvas-body text-white text-end fs-3">
                    <ul class="list-unstyled h3">
                        <li><a href="vælgPakke.php" class="text-decoration-none p-4 text-white d-inline-block">Giv et bidrag</a></li>
                        <li><a href="info.php" class="text-decoration-none p-4 text-white d-inline-block">Hvad er julehjælp?</a></li>
                        <li><a href="nillobook.php" class="text-decoration-none p-4 text-white d-inline-block">Årets børnebog</a></li>
                        <li><a href="omos.php" class="text-decoration-none p-4 text-white d-inline-block">Om os</a></li>
                        <li><a href="kontakt.php" class="text-decoration-none p-4 text-white d-inline-block">Kontakt</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>
<!-- Navigationsbar til lg skærme -->
<div class="container d-none d-lg-inline-block px-md-0">
    <div class="row">
        <nav class="navbar px-4 px-md-0 py-3 w-100">
            <div class="container-fluid d-flex justify-content-between align-items-center w-100 px-md-0">
                <!-- Logo -->
                <a class="navbar-brand ps-5" href="index.php">
                    <img src="../images/LogoGulTrans.png" alt="Logo" class="img-fluid" style="max-height: 40px;">
                </a>

                <!-- Navigation -->
                <div class="">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-yellow fw-bold px-3 px-md-3 text-uppercase" href="vælgPakke.php">Giv et <span class="text-red">bidrag</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-yellow fw-bold px-3 px-md-3 text-uppercase" href="info.php">Julehjælpen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-yellow fw-bold px-3 px-md-3 text-uppercase" href="nillobook.php">Årets børnebog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-yellow fw-bold px-3 px-md-3 text-uppercase" href="omos.php">Om os</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-yellow fw-bold px-3 px-md-3 text-uppercase" href="kontakt.php">Kontakt os</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

