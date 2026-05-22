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

    <div class="container memoryContainer">
        <div  class="header memoryHeader">
            <h1 class="memoryH1"><i class="fas fa-star"></i> Vendespil <i class="fas fa-star"></i></h1>
           <div class="stats">
                <div class="stat">
                    <div class="stat-label">Forsøg</div>
                    <div class="stat-value">0</div>
                </div>

                <div class="stat">
                    <div class="stat-label">Tid</div>
                    <div class="stat-value">0:00</div>
                </div>

                <div class="stat">
                    <div class="stat-label">Par</div>
                    <div class="stat-value">0/9</div>
                </div>
            </div>
        </div>

        <div class="game-board" id="gameBoard"></div>

        <div class="controls">
            <button class="btn" onclick="newGame()">
            <i class="fas fa-redo"></i> Nyt spil
            </button>
        </div>
    </div>


    <div class="modal" id="winModal">
        <div class="modal-content">
            <h2 class="memoryH2"><i class="fas fa-trophy"></i>Du vinder!</h2><i class="fas fa-trophy"></i>
            <p>Forsøg: <span id="finalMoves"></span></p><br><p>Tid: <span id="finalTime"></span></p>
            <button class="btn" onclick="newGame()">Spil igen</button>
        </div>
    </div>



</body>
</html>
