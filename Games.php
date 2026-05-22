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
            <button class="btn memoryBtn" onclick="newGame()">
            <i class="fas fa-redo"></i> Nyt spil
            </button>
        </div>
    </div>


    <div class="modal memoryModal" id="winModal">
        <div class="modal-content">
            <h2 class="memoryH2"><i class="fas fa-trophy"></i>Du vinder!</h2><i class="fas fa-trophy"></i>
            <p>Forsøg: <span id="finalMoves"></span></p><br><p>Tid: <span id="finalTime"></span></p>
            <button class="btn memoryBtn" onclick="newGame()">Spil igen</button>
        </div>
    </div>


    <script>
        const memoryCardHTML = '<div class="card-front"><i class="fas fa-heart"></i></div>
            <div class="card-back"><img src="" alt=""></div>'


        var images = [
            "https://unsplash.com/photos/orange-erste-hilfe-med-kit-j-ped4HD32Q",
            "https://unsplash.com/photos/person-with-band-aid-on-middle-finger-SwWjCbIIoFE",
            "https://unsplash.com/photos/man-in-white-t-shirt-and-blue-pants-sitting-on-floor-8ByBvAXwFEc",
            "https://unsplash.com/photos/white-and-black-earbuds-on-white-textile-S1v7hVUiCg0",
            "https://unsplash.com/photos/a-fire-hydrant-mounted-to-the-side-of-a-building-t5rm4f-HYmY",
            "https://unsplash.com/photos/human-x-ray-result-chart-ouyjDk-KdfY",
            "https://unsplash.com/photos/green-tree-on-grassland-during-daytime-EPy0gBJzzZU",
        ];

        var firstCard = null
        var secondCard = null
        var canFlip = true
        var matches = 0
        var moves = 0
        var seconds = 0
        var timeRunning = false
        var timerInterval;

        function startGame{
            var gameBoard = document.getElementById("gameBoard")
            gameBoard.innerHTML = ""

            var card
        }

    </script>


</body>
</html>
