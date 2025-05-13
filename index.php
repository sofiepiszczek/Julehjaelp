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

<div class="container"></div>

<div class="container-fluid banner m-0 p-0 d-flex flex-wrap overflow-hidden">
    <video autoplay muted loop class="videobg w-100 object-fit-cover position-absolute top-0 bottom-0 z-0">
        <source src="video/herovideoph.mp4" type="video/mp4">
    </video>
    <div class="col-12 z-2">
        <?php
        include 'includes/navbar.php';
        ?>
    </div>
    <div class=" col-12 tekst1 d-flex justify-content-center align-items-center flex-wrap flex-column h-100 z-1 position-relative">
        <div><h1 class="text-yellow text-center">Vi har indsamlet</h1></div>
        <div><a class="fa-solid fa-chevron-down fa-beat-fade fa-2xl text-center text-yellow fs-1 p-3" href="#scrollspyNext"></a></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
