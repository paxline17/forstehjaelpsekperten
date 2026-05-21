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

<body class="bg-light">

<div class="container pt-4">

    <div class="text-center mb-4 mt-4">
        <div class="mx-auto mb-4">
            <i class="fa-solid fa-user fa-2xl mb-3"></i>
        </div>
        <h5 class="fw-bold mb-1">Emil Østergaard</h5>
        <p class="text-muted small">Emil.oest@mail.dk | +45 52 40 18 39</p>
    </div>

    <div class="row g-4">

        <div class="col-12 col-md-6 order-1 order-md-1">
            <div class="card border-dark h-100">

                <div class="card-header text-center fw-bold">
                    Profilindstillinger
                </div>

                <div class="list-group list-group-flush">

                    <button class="list-group-item list-group-item-action bg-transparent text-dark d-flex justify-content-between align-items-center"
                            data-bs-toggle="collapse"
                            data-bs-target="#editProfile"
                        <span>Ændre profil</span>
                        <i class="fa-solid fa-arrow-right rotate-icon"></i>
                    </button>

                    <div class="collapse" id="editProfile"></div>

                    <div id="notification" class="list-group-item bg-transparent text-dark d-flex justify-content-between align-items-center py-3">
                        <span>Notifikationer</span>
                        <span class="status text-muted">On</span>
                    </div>

                    <div class="list-group-item bg-transparent text-dark d-flex justify-content-between align-items-center py-3">
                        <span>Sprog</span>
                        <span class="text-muted">Dansk</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 order-2 order-md-3">
            <div class="card border-dark h-100 mt-2 mb-2">
                <div class="list-group-item d-flex justify-content-between py-3 p-2">
                    <span>Tema</span>
                    <div>
                        <i class="fa-regular fa-sun me-3"></i>
                        <i class="fa-regular fa-moon"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 order-3 order-md-2">
            <div class="card border-dark h-100">
                <div class="card-header text-center fw-bold">
                    Support og info
                </div>

                <div class="list-group list-group-flush">

                    <button class="list-group-item list-group-item-action bg-transparent text-dark d-flex justify-content-between align-items-center"
                            data-bs-toggle="collapse"
                            data-bs-target="#contactUs"
                    <span>Kontakt os</span>
                    <i class="fa-solid fa-arrow-right rotate-icon"></i>
                    </button>

                    <div class="collapse" id="contactUs"></div>

                    <button class="list-group-item list-group-item-action bg-transparent text-dark d-flex justify-content-between align-items-center"
                            data-bs-toggle="collapse"
                            data-bs-target="#points"
                    <span>Point</span>
                    <i class="fa-solid fa-arrow-right rotate-icon"></i>
                    </button>

                    <div class="collapse" id="points"></div>
                </div>
            </div>
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
