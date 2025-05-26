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

    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <?php
            include 'includes/navbar.php';
            ?>
        </div>
        <div class="col-12 py-md-3">
            <h1 class="text-center text-white">BLIV HJERTEJÆLPER</h1>
        </div>
        <div class="py-2 col-md-11 mb-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text text-yellow" id="lille-tab" data-bs-toggle="tab"
                            data-bs-target="#lille-tab-pane" type="button" role="tab" aria-controls="lille-tab-pane"
                            aria-selected="true">LILLE
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text text-yellow" id="mellem-tab" data-bs-toggle="tab"
                            data-bs-target="#mellem-tab-pane" type="button" role="tab" aria-controls="mellem-tab-pane"
                            aria-selected="false">MELLEM
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text text-yellow" id="stor-tab" data-bs-toggle="tab"
                            data-bs-target="#stor-tab-pane" type="button" role="tab" aria-controls="stor-tab-pane"
                            aria-selected="false">STOR
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text text-yellow fs-6" id="frit-tab" data-bs-toggle="tab"
                            data-bs-target="#frit-tab-pane" type="button" role="tab" aria-controls="frit-tab-pane"
                            aria-selected="false">PRIVAT
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text text-yellow fs-6" id="erhverv-tab" data-bs-toggle="tab"
                            data-bs-target="#erhverv-tab-pane" type="button" role="tab" aria-controls="erhverv-tab-pane"
                            aria-selected="false">ERHVERV
                    </button>
                </li>
            </ul>

            <div class="tab-content " id="myTabContent">
                <div class="tab-pane fade show active " id="lille-tab-pane" role="tabpanel" aria-labelledby="lille-tab"
                     tabindex="0">
                    <div class="container bg-white border-white rounded-bottom-3 rounded-end-3">
                        <div class="row justify-content-center align-items-center">
                            <!-- img -->
                            <div class="col-5 p-3 d-flex justify-content-center align-items-center d-lg-none">
                                <img src="images/juletra.png" class="img-fluid w-75" alt="Juletræ">
                            </div>

                            <!-- info tekst -->
                            <div class="col-6 col-lg-12 p-3 p-lg-5 d-flex justify-content-center align-items-center text-darkgreen">
                                <p class="m-0">DU GIVER NU EN DANSK FAMILIE MULIGHEDEN FOR ET JULETRÆ TIL JUL</p>
                            </div>

                            <!-- Form -->
                            <div class="col-lg-8 d-flex flex-wrap justify-content-between">
                                <div class="col-12 form-floating mb-3 mt-4">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">FORNAVN<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">EFTERNAVN<span class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">ADRESSE<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-5 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">POST NR.<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-6 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">BY<span class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">E-MAIL<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">CPR-NUMMER</label>
                                    <p class="fs-6 instru text-darkgreen px-3 py-1">Indtast og få skattefradrag for dit
                                        bidrag</p>
                                </div>
                            </div>

                            <!-- img lg-skærm -->
                            <div class="d-none d-lg-inline-block col-lg-4">
                                <img src="images/juletra.png" class="img-fluid" alt="Juletræ">
                            </div>

                            <!-- Knapper i bunden -->
                            <div>
                                <div class="col-12 d-flex justify-content-center align-items-center py-3">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn btn-yellow instru text-center py-2 w-50 px-1 text-decoration-none text-white fs-4"
                                            data-bs-toggle="modal" data-bs-target="#lilleModal">
                                        BETAL
                                    </button>

                                    <!-- MODAL -->
                                    <div class="modal fade" id="lilleModal" tabindex="-1"
                                         aria-labelledby="lilleModalLabel" aria-hidden="true">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="modal-dialog takmttop mx-4">
                                                <div class="modal-content position-relative">
                                                    <div class="modal-body">
                                                        <div class="position-absolute start-50 translate-middle-x"
                                                             style="top: -100px;">
                                                            <img src="images/gave150.png" alt="Gave icon 150kr"
                                                                 class="img-fluid">
                                                        </div>
                                                        <div class="text-center mt-5 pt-5">
                                                            <h1 class="tak text-darkgreen">TAK!</h1>
                                                            <p class="px-4">Du har valgt at donere et juletræ til en familie der
                                                                mangler lidt lys her i den mørke juletid.</p>
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
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center align-items-center py-3">
                                    <div class="btn btn-darkgreen instru text-center py-2 w-50">
                                        <a href="" class="text-decoration-none text-white">TILBAGE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="mellem-tab-pane" role="tabpanel" aria-labelledby="mellem-tab"
                     tabindex="0">
                    <div class="container bg-white border-white rounded-3">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-5 p-3 mt-3 d-flex justify-content-center align-items-center d-lg-none">
                                <img src="images/middag.png" class="img-fluid w-75" alt="Julemiddag">
                            </div>
                            <div class="col-6 col-lg-12 p-3 p-lg-5 d-flex justify-content-center align-items-center text-darkgreen">
                                <p class="m-0">DU GIVER NU EN DANSK FAMILIE MULIGHEDEN FOR EN JULEMIDDAG TIL JUL</p>
                            </div>

                            <div class="col-lg-8 d-flex flex-wrap justify-content-between">
                                <div class="col-12 form-floating mb-3 mt-4">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">FORNAVN<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">EFTERNAVN<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">ADRESSE<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-5 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">POST NR.<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-6 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">BY<span class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">E-MAIL<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">CPR-NUMMER</label>
                                    <p class="fs-6 instru text-darkgreen px-3 py-1">Indtast og få skattefradrag for dit
                                        bidrag</p>
                                </div>
                            </div>

                            <!-- img lg-skærm -->
                            <div class="d-none d-lg-inline-block col-lg-4">
                                <img src="images/middag.png" class="img-fluid" alt="Julemiddag">
                            </div>

                            <!-- Knapper i bunden -->
                            <div class="col-12 d-flex justify-content-center align-items-center py-3">
                                <!-- Button trigger modal -->
                                <button type="button"
                                        class="btn btn-yellow instru text-center py-2 w-50 px-1 text-decoration-none text-white fs-4"
                                        data-bs-toggle="modal" data-bs-target="#mellemModal">
                                    BETAL
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="mellemModal" tabindex="-1"
                                     aria-labelledby="mellemModalLabel" aria-hidden="true">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="modal-dialog takmttop mx-4">
                                            <div class="modal-content position-relative">
                                                <div class="modal-body">
                                                    <div class="position-absolute start-50 translate-middle-x"
                                                         style="top: -100px;">
                                                        <img src="images/gave800.png" alt="Gave icon 150kr"
                                                             class="img-fluid">
                                                    </div>
                                                    <div class="text-center mt-5 pt-5">
                                                        <h1 class="tak text-darkgreen">TAK!</h1>
                                                        <p class="px-4">
                                                            Du har valgt at donere en julemiddag til en familie.
                                                            <br><br>
                                                            1 x gavekort til Rema1000</p>
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
                                </div>


                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center py-3">
                                <div class="btn btn-darkgreen instru text-center py-2 w-50">
                                    <a href="" class="text-decoration-none text-white">TILBAGE</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="stor-tab-pane" role="tabpanel" aria-labelledby="stor-tab" tabindex="0">
                    <div class="container bg-white border-white rounded-3">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-6 pt-3 d-flex justify-content-center align-items-center d-lg-none">
                                <img src="images/fuld.png" class="img-fluid w-75" alt="En fuld jul">
                            </div>
                            <div class="col-6 col-lg-12 p-3 p-lg-5 d-flex justify-content-center align-items-center text-darkgreen">
                                <p class="m-0">DU GIVER NU EN DANSK FAMILIE EN FULD JUL MED ALT DER HØRER TIL</p>
                            </div>

                            <div class="col-lg-8 d-flex flex-wrap justify-content-between">
                                <div class="col-12 form-floating mb-3 mt-4">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">FORNAVN<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">EFTERNAVN<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">ADRESSE<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-5 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">POST NR.<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-6 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">BY<span class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">E-MAIL<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">CPR-NUMMER</label>
                                    <p class="fs-6 instru text-darkgreen px-3 py-1">Indtast og få skattefradrag for dit
                                        bidrag</p>
                                </div>
                            </div>

                            <!-- img lg-skærm -->
                            <div class="d-none d-lg-inline-block col-lg-4">
                                <img src="images/fuld.png" class="img-fluid" alt="En fuld jul">
                            </div>

                            <!-- Knapper i bunden -->
                            <div class="col-12 d-flex justify-content-center align-items-center py-3">
                                <!-- Button trigger modal -->
                                <button type="button"
                                        class="btn btn-yellow instru text-center py-2 w-50 px-1 text-decoration-none text-white fs-4"
                                        data-bs-toggle="modal" data-bs-target="#storModal">
                                    BETAL
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="storModal" tabindex="-1" aria-labelledby="storModalLabel"
                                     aria-hidden="true">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="modal-dialog takmttop mx-4">
                                            <div class="modal-content position-relative">
                                                <div class="modal-body">
                                                    <div class="position-absolute start-50 translate-middle-x"
                                                         style="top: -100px;">
                                                        <img src="images/gave1500.png" alt="Gave icon 150kr"
                                                             class="img-fluid">
                                                    </div>
                                                    <div class="text-center mt-5 pt-5">
                                                        <h1 class="tak text-darkgreen">TAK!</h1>
                                                        <p class="px-4">Du har valgt at donere
                                                            en fuld juleaften til en
                                                            familie. Dette inkluderer:
                                                            <br><br>
                                                            1 x juletræ<br>
                                                            1 x gavekort til Rema1000<br>
                                                            1 x julegave til barn<br></p>
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
                                </div>


                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center py-3">
                                <div class="btn btn-darkgreen instru text-center py-2 w-50">
                                    <a href="" class="text-decoration-none text-white">TILBAGE</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="frit-tab-pane" role="tabpanel" aria-labelledby="frit-tab" tabindex="0">
                    <div class="container bg-white border-white rounded-3">
                        <div class="row justify-content-center align-items-center">

                            <div class="col-12 p-3 d-flex justify-content-center align-items-center text-darkgreen">
                                <p class="m-0 tal text">TAK!</p>
                            </div>

                            <div class="col-lg-8 d-flex flex-wrap justify-content-between">
                                <div class="col-12">
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input type="number" class="form-control instru" id="exampleFormControlInput1"
                                           placeholder="BELØB I DKK*">
                                </div>
                                <div class="col-12 form-floating mb-3 mt-4">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">FORNAVN<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">EFTERNAVN<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">ADRESSE<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-5 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">POST NR.<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-6 form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">BY<span class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">E-MAIL<span
                                                class="text-red">*</span></label>
                                </div>
                                <div class="col-12 form-floating mb-2">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="skriv her">
                                    <label for="floatingInput" class="instru px-4">CPR-NUMMER</label>
                                    <p class="fs-6 instru text-darkgreen px-3 py-1">Indtast og få skattefradrag for dit
                                        bidrag</p>
                                </div>

                            </div>

                            <!-- img lg-skærm -->
                            <div class="d-none d-lg-inline-block col-lg-4">
                                <img src="images/juletra.png" class="img-fluid" alt="Juletræ">
                            </div>

                            <!-- Knapper i bunden --> <!-- Tak-modal -->
                            <div class="col-12 col-md-8 d-flex">
                            <div class="col-6 d-flex justify-content-center align-items-center py-md-3">
                                <div class="btn btn-darkgreen instru text-center py-2 px-5">
                                    <a href="" class="text-decoration-none text-white">FAST BELØB</a>
                                </div>
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-center py-md-3">
                                <!-- Button trigger modal -->
                                <button type="button"
                                        class="btn btn-darkgreen instru text-center py-2 px-5"
                                        data-bs-toggle="modal" data-bs-target="#fritModal">
                                    ET BIDRAG
                                </button>

                                <!-- MODAL -->
                                <div class="modal fade" id="fritModal" tabindex="-1" aria-labelledby="fritModalLabel"
                                     aria-hidden="true">
                                    <div class="d-flex justify-content-center align-items-center">
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
                                </div>


                            </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center py-3">
                                <div class="btn btn-outline-darkgreen instru  text-center py-2 w-50">
                                    <a href="" class="text-decoration-none text-darkgreen">TILBAGE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="erhverv-tab-pane" role="tabpanel" aria-labelledby="erhverv-tab"
                     tabindex="0">
                    <div class="container bg-white border-white rounded-3">
                        <div class="row justify-content-center align-items-center">
                            <!-- info-tekst -->
                            <div class="col-12 p-3 d-flex justify-content-center align-items-center text-darkgreen">
                                <p class="m-0 tal text">TAK!</p>
                            </div>

                            <!-- form -->
                            <div class="col-lg-8 d-flex flex-wrap justify-content-between">
                            <div class="col-12">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="number" class="form-control instru" id="exampleFormControlInput1"
                                       placeholder="BELØB I DKK*">
                            </div>
                            <div class="col-12 form-floating mb-3 mt-4">
                                <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                <label for="floatingInput" class="instru px-4">FIRMANAVN<span
                                            class="text-red">*</span></label>
                            </div>
                            <div class="col-12 form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                <label for="floatingInput" class="instru px-4">CVR-NUMMER<span
                                            class="text-red">*</span></label>
                            </div>
                            <div class="col-12 form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                <label for="floatingInput" class="instru px-4">ADRESSE<span
                                            class="text-red">*</span></label>
                            </div>
                            <div class="col-5 form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                <label for="floatingInput" class="instru px-4">POST NR.<span
                                            class="text-red">*</span></label>
                            </div>
                            <div class="col-6 form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                <label for="floatingInput" class="instru px-4">BY<span class="text-red">*</span></label>
                            </div>
                            <div class="col-5 form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                <label for="floatingInput" class="instru px-4">FORNAVN <span class="kontaktpers">PÅ KONTAKTPERSON</span><span
                                            class="text-red">*</span></label>
                            </div>
                            <div class="col-6 form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="skriv her">
                                <label for="floatingInput" class="instru px-4">EFTERNAVN<span
                                            class="text-red">*</span></label>
                            </div>
                            <div class="col-12 form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="skriv her">
                                <label for="floatingInput" class="instru px-4">E-MAIL<span
                                            class="text-red">*</span></label>
                            </div>
                            </div>
                            <!-- img lg-skærm -->
                            <div class="d-none d-lg-inline-block col-lg-4">
                                <img src="images/juletra.png" class="img-fluid" alt="Juletræ">
                            </div>
                            <!-- knapper -->
                            <div class="col-12 col-md-8 d-flex">
                                <div class="col-6 d-flex justify-content-center align-items-center py-3">
                                    <div class="btn btn-darkgreen instru text-center py-2 px-5">
                                        <a href="" class="text-decoration-none text-white">FAST BELØB</a>
                                    </div>
                                </div>
                                <div class="col-6 d-flex justify-content-center align-items-center py-3">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                            class="btn btn-darkgreen instru text-center py-2 px-5"
                                            data-bs-toggle="modal" data-bs-target="#erhvervModal">
                                        ET BIDRAG
                                    </button>

                                    <!-- MODAL -->
                                    <div class="modal fade" id="erhvervModal" tabindex="-1"
                                         aria-labelledby="erhvervModalLabel" aria-hidden="true">
                                        <div class="d-flex justify-content-center align-items-center">
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
                                    </div>


                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center py-3">
                                <div class="btn btn-outline-darkgreen instru  text-center py-2 w-50">
                                    <a href="" class="text-decoration-none text-darkgreen">TILBAGE</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
