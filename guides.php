<?php
/**
 * @var db $db
 */

require "settings/init.php";

$jsonData = file_get_contents("guides.json");
$guides = json_decode($jsonData, true);

$selectedId = isset($_GET['id']) ? $_GET['id'] : null;
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title><?php echo ($selectedId && isset($guides[$selectedId])) ? $guides[$selectedId]['titel'] . " - Førstehjælp" : "Førstehjælp Guides"; ?></title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
<?php if ($selectedId && isset($guides[$selectedId])):
    $currentGuide = $guides[$selectedId];
    ?>
    <div class="container py-4">
        <a href="guides.php" class="btn mb-3">
            <i class="fas fa-arrow-left"></i> Tilbage
        </a>

        <div class="text-center mb-4">
            <h2 class="fw-bold"><?php echo $currentGuide['titel']; ?></h2>
            <?php if (!empty($currentGuide['billede'])): ?>
                <img src="<?php echo $currentGuide['billede']; ?>" alt="<?php echo $currentGuide['titel']; ?>" class="img-fluid my-3" style="max-height: 200px;">
            <?php endif; ?>
        </div>

        <div class="list-group">
            <?php foreach ($currentGuide['trin'] as $index => $trin): ?>
                <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <div>
                        <strong><?php echo ($index + 1) . ". "; ?></strong>
                        <?php echo $trin; ?>
                    </div>
                    <i class="fas fa-arrow-down text-muted small btn"></i>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="py-4"></div>

<?php else:

    ?>
    <div class="container py-4">

        <div class="row align-items-center justify-content-center mb-4">
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

        <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-center">
            <?php foreach ($guides as $id => $guide): ?>
                <div class="col">
                    <a href="guides.php?id=<?php echo $id; ?>" class="text-decoration-none">
                        <div class="ratio ratio-1x1">
                            <div class="d-flex flex-column justify-content-center align-items-center text-center bg-white border border-2 border-dark py-4 py-md-5 px-3 h-100">
                                <i class="fas <?php echo $guide['ikon']; ?> text-dark mb-2" style="font-size: 2.8rem;"></i>
                                <p class="fw-bold text-dark m-0" style="font-size: 1rem;"><?php echo $guide['titel']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
<div class="py-4"></div>

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
                        så man ved hvad der skal gøres, hvis man eksempelvis skal udføre hjerte lunge redning.
                    </p>
                </div>
                <div class="modal-footer border-0 justify-content-center pb-4">
                    <button type="button" class="btn btn-primary bg-primary border-0 rounded-pill px-5 fw-bold" data-bs-dismiss="modal">
                        Kom i gang
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>



<?php
include("includes/navbar.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

