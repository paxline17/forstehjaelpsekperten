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

    <title>Førstehjælpseksperten</title>
    <link rel="icon" type="" href="">


    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<div class=" profile-page container pt-5">
    <div class="text-center mb-4 pt-4">
        <div class="mx-auto mb-4">
            <i class="fa-solid fa-user fa-2xl"></i>
        </div>
        <h5 class="fw-bold">Emil Østergaard</h5>
        <p class="text-muted small">Emil.oest@mail.dk | +45 52 40 18 39</p>
    </div>
</div>

<div class="card border-dark profile-card mx-4 mt-5">

    <div class="card-header bg-transparent border-dark text-center fw-bold py-3">
        Profilindstillinger
    </div>

    <div class="list-group list-group-flush">

        <button class="list-group-item list-group-item-action bg-transparent text-dark d-flex justify-content-between align-items-center py-3"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#profileSubMenu"
        aria-expanded="false"
        aria-controls="profileSubMenu">
        <div>Ændre profil</div>
            <i class="fa-solid fa-arrow-right"></i>
        </button>

        <div class="collapse" id="profileSubMenu">
        </div>

        <div id="notification" class="list-group-item bg-transparent text-dark d-flex justify-content-between align-items-center py-3">
            <div>Notifikationer</div>
            <div class="status text-muted">On</div>
        </div>

        <div class="list-group-item bg-transparent text-dark d-flex justify-content-between align-items-center py-3">
            <div>Sprog</div>
            <div class="text-muted">Dansk</div>
        </div>

    </div>

</div>





<?php
include("includes/navbar.php" );
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('notification').addEventListener('click', function (){
        const statusElement = this.querySelector('.status');

        if (statusElement.textContent === 'On') {
            statusElement.textContent = 'Off';
        } else {
            statusElement.textContent = 'On';
        }
    });
</script>

</body>
</html>
