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
    
    <title>Førstehjælpsexperten</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<img src="images/logozoe.svg" alt="logo" style="height: 80px;">


<div class="container">

<p class="text-center mb-3">Akutte guides</p>

<div class="row g-3 mb-4 justify-content-center">

<div class="col-5 col-sm-3">
    <a href="#hjertestop" class="text-decoration-none text-dark text-center border border-dark d-block bg-white p-3">
        <i class="fa-solid fa-heart-pulse"></i>
        <p class="fw-bold mt-2 text-dark">Hjertestop</p>
    </a>
</div>

<div class="col-5 col-sm-3">
          <a href="#kvælning" class="text-decoration-none text-dark text-center border border-dark d-block bg-white p-3">
        <i class="fa-solid fa-head-side-cough"></i>
    <p class="fw-bold mt-2 text-dark">Kvælning</p>
          </a>
</div>
</div>


<a href="#vendespil" class="text-decoration-none text-dark d-flex justify-content-between align-items-center border border-dark bg-white pt-3 mt-3 p-2 mx-5 pb-1">
    <div>
        <p class="mb-0 small">Forstæt hvor du slap:</p>
        <p class="mb-0 small mt-2">Vendespil</p>
    </div>
<i class="fa-solid fa-arrow-right align-self-end"></i>
</a>

</div>

<?php
include("includes/navbar.php" );
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

