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

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container py-4">
    <div class="row align-items-center justify-content-center">

        <div class="col-8 col-md-6">

            <div class="position-relative">

                <span class="position-absolute top-50 start-0 translate-middle-y ms-3">
                    <i class="fa-solid fa-magnifying-glass text-dark"></i>
                </span>


                <input type="text" class="form-control rounded-pill border-primary border-2 ps-5 py-2" placeholder="Søg">

                <button class="btn btn-sm rounded-circle position-absolute top-50 end-0 translate-middle-y me-3 d-flex align-items-center justify-content-center p-0">
                    <i class="fa-solid fa-xmark small"></i>
                </button>

            </div>
        </div>

        <div class="col-2 col-md-1 text-center">
            <button class="btn p-0 border-0" data-bs-toggle="modal" data-bs-target="#infoModal">
                <i class="fa-solid fa-circle-info fs-1"></i>
            </button>
        </div>

    </div>
</div>

        <div class="modal fade" id="infoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-lg" style="border-radius: 25px;">

                    <div class="modal-header border-0 pb-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-4 pt-0 text-center">
                        <i class="fa-solid fa-circle-info text-primary mb-3" style="font-size: 3rem;"></i>
                        <h4 class="fw-bold mb-3">Sådan gør du</h4>

                        <p class="mb-4">
                            Her på siden finder du guides til hvad du skal gøre hvis du er ude for en nødsituation.
                        </p>

                        <div class="p-3 mb-4 border">
                            <p class="mb-0 small">
                                <strong>Tip:</strong>
                                Se videoerne for at få en bedre forståelse for de forskellige guides
                            </p>
                        </div>
                        <p>
                            Målet med siden, er at hjælpe folk med at være mere rustet til nødsituationer,
                            så man ved hvad der skal gøres,
                            hvis man eksempelvis skal udføre hjerte lunge redning.
                        </p>
                    </div>

                    <div class="modal-footer border-0 justify-content-center pb-4">
                        <button type="button" class="btn btn-primary bg-primary border-0 rounded-pill px-5 fw-bold" data-bs-dismiss="modal">
                            Kom i gang</button>
                    </div>
                </div>
            </div>
        </div>

<div class="container my-2">
    <div class="row row-cols-2 g-4 justify-content-center" style="max-width: 450px; margin: 0 auto;">

        <div class="col">
            <div class="ratio ratio-1x1">
                <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white border border-2 border-dark rounded p-3" style="cursor: pointer;">
                    <i class="fas fa-heartbeat text-dark mb-2" style="font-size: 2.8rem;"></i>
                    <p class="fw-bold text-dark m-0" style="font-size: 1rem;">Hjertestop</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="ratio ratio-1x1">
                <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white border border-2 border-dark rounded p-3" style="cursor: pointer;">
                    <i class="fas fa-head-side-cough text-dark mb-2" style="font-size: 2.8rem;"></i>
                    <p class="fw-bold text-dark m-0" style="font-size: 1rem;">Kvælning</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="ratio ratio-1x1">
                <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white border border-2 border-dark rounded p-3" style="cursor: pointer;">
                    <i class="fas fa-fire text-dark mb-2" style="font-size: 2.8rem;"></i>
                    <p class="fw-bold text-dark m-0" style="font-size: 1rem;">Forbrænding</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="ratio ratio-1x1">
                <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white border border-2 border-dark rounded p-3" style="cursor: pointer;">
                    <i class="fas fa-tint text-dark mb-2" style="font-size: 2.8rem;"></i>
                    <p class="fw-bold text-dark m-0" style="font-size: 1rem;">Blødning</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="ratio ratio-1x1">
                <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white border border-2 border-dark rounded p-3" style="cursor: pointer;">
                    <i class="fas fa-user-slash text-dark mb-2" style="font-size: 2.8rem;"></i>
                    <p class="fw-bold text-dark m-0" style="font-size: 1rem;">Bevidstløshed</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="ratio ratio-1x1">
                <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white border border-2 border-dark rounded p-3" style="cursor: pointer;">
                    <i class="fas fa-bone text-dark mb-2" style="font-size: 2.8rem;"></i>
                    <p class="fw-bold text-dark m-0" style="font-size: 1rem;">Brud</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="ratio ratio-1x1">
                <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white border border-2 border-dark rounded p-3" style="cursor: pointer;">
                    <i class="fas fa-bolt text-dark mb-2" style="font-size: 2.8rem;"></i>
                    <p class="fw-bold text-dark m-0" style="font-size: 1rem;">Shock</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="ratio ratio-1x1">
                <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white border border-2 border-dark rounded p-3" style="cursor: pointer;">
                    <i class="fas fa-skull-crossbones text-dark mb-2" style="font-size: 2.8rem;"></i>
                    <p class="fw-bold text-dark m-0" style="font-size: 1rem;">Forgiftning</p>
                </div>
            </div>
        </div>
        <div class="py-5"></div>
    </div>
</div>

<?php
include("includes/navbar.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

