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

<body class="bg-light pb-5">

<div class="container pt-4">

    <div class="text-center mb-4 mt-4 pb-3 pt-3">
        <div class="mx-auto mb-2 fs-2">
            <i class="fa-solid fa-user fa-2xl mb-3"></i>
        </div>
        <h5 id="profileDisplayName" class="fw-bold mb-1 fs-4">Emil Østergaard</h5>
        <p class="text-muted small">
            <span id="profileDisplayEmail">Emil.oest@mail.dk</span>
            <span class="mx-1">|</span>
            <span id="profileDisplayPhonenumber">+45 52 40 18 39</span>
        </p>
    </div>

    <div class="row g-4 mb-5">

        <div class="col-12 col-md-6 order-1 order-md-1">
            <div class="card border-dark h-100 rounded-3 border-light-subtle shadow-sm overflow-hidden">

                <div class="card-header text-center fw-bold bg-body-lightgray py-3">
                    Profilindstillinger
                </div>

                <div class="list-group list-group-flush">

                    <button class="list-group-item list-group-item-action bg-transparent text-dark d-flex justify-content-between align-items-center py-3"
                            data-bs-toggle="collapse"
                            data-bs-target="#editProfile"
                            aria-expanded="false"
                        <span>Ændre profil</span>
                        <i class="fa-solid fa-arrow-right rotate-icon"></i>
                    </button>

                    <div class="collapse bg-body-tertiary border-bottom border-light-subtle" id="editProfile">
                        <div class="p-3">
                            <form id="form-edit-profile">
                                <div class="mb-3">
                                    <label for="inputName" class="form-label small fw-bold">Nyt navn</label>
                                    <input type="text" class="form-control form-control-sm" id="inputName" value="Emil Østergaard" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label small fw-bold">Ny e-mail</label>
                                    <input type="text" class="form-control form-control-sm" id="inputEmail" value="emil.oest@mail.dk" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputPhoneNumber" class="form-label small fw-bold">Nyt telefonnummer</label>
                                    <input type="text" class="form-control form-control-sm" id="inputPhoneNumber" value="+45 52 40 18 39" required>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <button type="button" class="btn btn-outline-danger btn-sm" id="btnDeleteProfile">
                                        <i class="fa-solid fa-trash me-1"></i> Slet Profil
                                    </button>

                                    <button type="submit" class="btn btn-dark btn-sm px-3">Gem ændringer</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="notification" class="list-group-item bg-transparent text-dark d-flex justify-content-between align-items-center py-3 user-select-none cursor-pointer">
                        <span>Notifikationer</span>
                        <span class="status text-muted">On</span>
                    </div>

                    <div class="list-group-item bg-transparent text-dark d-flex justify-content-between align-items-center py-3">
                        <span>Sprog</span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light bor' dropdown-toggle text-muted fw-medium"
                            type="button"
                            id="languageDropdown"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                                Dansk
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-light-subtle" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item small cursor-pointer lang-option" href="#">Dansk</a></li>
                                <li><a class="dropdown-item small cursor-pointer lang-option" href="#">Engelsk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 order-2 order-md-3">
            <div class="card rounded-3 border-light-subtle shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center py-3">
                    <span>Tema</span>
                    <div class="d-flex align-items-center py-1">
                        <i id="themeLight" class="fa-regular fa-sun fs-5 cursor-pointer me-3 text-dark"></i>

                        <div class="vr opacity-75 py-2"></div>

                        <i id="themeDark" class="fa-regular fa-moon fs-5 cursor-pointer ms-3 text-muted"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 order-3 order-md-2">
            <div class="card border-dark h-100 rounded-3 border-light-subtle shadow-sm overflow-hidden">
                <div class="card-header text-center bg-body-lightgray fw-bold border-light-subtle py-3">
                    Support og info
                </div>

                <div class="list-group list-group-flush">

                    <button class="list-group-item list-group-item-action bg-transparent text-dark d-flex justify-content-between align-items-center py-3"
                            data-bs-toggle="collapse"
                            data-bs-target="#contactUs"
                            aria-expanded="false"
                    <span>Kontakt os</span>
                    <i class="fa-solid fa-arrow-right rotate-icon"></i>
                    </button>

                    <div class="collapse bg-body-tertiary border-bottom border-light-subtle" id="contactUs">
                        <div class="p-3">
                            <p class="small text-muted mb-2">Har du brug for hjælp? Du kan fange os her:</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-envelope me-2"></i>
                                <a href="info@nhls.dk" class="text-dark small text-decoration-none">info@nhls.dk</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-phone me-2"></i>
                                <a href="tel:+45 29 42 30 37" class="text-dark small text-decoration-none">+45 29 42 30 37</a>
                            </div>
                        </div>
                    </div>

                    <button class="list-group-item list-group-item-action bg-transparent text-dark d-flex justify-content-between align-items-center py-3"
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

    document.getElementById('form-edit-profile').addEventListener('submit',function (e){
        e.preventDefault();
        const newName = document.getElementById('inputName').value;
        const newEmail = document.getElementById('inputEmail').value;
        const newPhonenumber = document.getElementById('inputPhoneNumber').value;

        if (newName.trim() !==""){
            document.getElementById('profileDisplayName').textContent = newName;
        }
        if (newEmail.trim() !==""){
            document.getElementById('profileDisplayEmail').textContent = newEmail;
        }
        if (newPhonenumber.trim() !==""){
            document.getElementById('profileDisplayPhonenumber').textContent = newPhonenumber;
        }

        alert("Profilen blev opdateret");
    });

    document.getElementById('btnDeleteProfile').addEventListener('click', function (){
        if(confirm("Er du sikker på, at di vil slette din profil? Dette kan ikke fortrydes.")){
            alert("Profil markeret som slettet!");
        }
    });

    document.querySelectorAll('.lang-option').forEach(option => {
        option.addEventListener('click', function (e){
            e.preventDefault();

            const selectedLanguage = this. textContent;
            document.getElementById('languageDropdown').textContent = selectedLanguage;
        });
    });

    const sunIcon = document.getElementById('themeLight');
    const moonIcon = document.getElementById('themeDark');

    sunIcon.addEventListener('click', function (){
        sunIcon.classList.replace('text-muted', 'text-dark');
        moonIcon.classList.replace('text-dark', 'text-muted');
    });

    moonIcon.addEventListener('click', function (){
        moonIcon.classList.replace('text-muted', 'text-dark');
        sunIcon.classList.replace('text-dark', 'text-muted');
    });

</script>

</body>
</html>
