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

<body class="bg-light d-flex flex-column min-vh-100">

    <div class="container app-container my-3 flex-grow-1">

        <div id="page-menu" class="page active">
            <h1 class="text-center fw-bold my-4">Spil</h1>
            <div class="row g-3 px-2">

                <div class="col-12 col-md-6">
                    <div class="bg-white border border-lightgray rounded-1 d-flex justify-content-center align-items-center position-relative overflow-hidden shadow-sm cursor-pointer" onclick="navigateTo('page-game'); newGame();">
                        <span class="fw-bold text-dark fs-5 text-center px-2">Vendespil</span>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="bg-white border border-lightgray rounded-1 d-flex justify-content-center align-items-center position-relative overflow-hidden shadow-sm cursor-pointer">
                        <span class="fw-bold text-dark fs-5 text-center px-2">Match to ord</span>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="bg-white border border-lightgray rounded-1 d-flex justify-content-center align-items-center position-relative overflow-hidden shadow-sm cursor-pointer">
                        <span class="fw-bold text-dark fs-5 text-center px-2">Kommer snart</span>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="bg-white border border-lightgray rounded-1 d-flex justify-content-center align-items-center position-relative overflow-hidden shadow-sm cursor-pointer">
                        <span class="fw-bold text-dark fs-5 text-center px-2">Kommer snart</span>
                    </div>
                </div>

            </div>
        </div>

        <div id="page-game" class="page">
            <div class="d-flex justify-content-between align-items-center mb-3 px-2">
                <button class="btn btn-link link-dark fs-4 p-1" onclick="navigateTo('page-menu')">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button class="btn-link link-dark fs-4 p-1">
                    <i class="fas fa-info-circle"></i>
                </button>
            </div>


        <div class="memoryHeader text-center bg-white p-3 mb-4 mx-auto">
            <h1 class="memoryH1 fw-bold fs-3 mb-3"><i class="fas fa-star"></i> Vendespil <i class="fas fa-star"></i></h1>

            <div class="d-flex justify-content-center gap-2">
                <div class="stat stats-box border border-2 rounded-4 text-center px-3 py-2">
                    <div class="stat-label small opacity-75">Forsøg</div>
                    <div class="stat-value fw-bold" id="moves">0</div>
                </div>

                <div class="stat stats-box border border-2 rounded-4 text-center px-3 py-2">
                    <div class="stat-label small opacity-75">Tid</div>
                    <div class="stat-value fw-bold" id="time">0:00</div>
                </div>
            </div>

            <div class="stat stats-box border border-2 rounded-4 text-center px-3 py-2">
                <div class="stat-label small opacity-75">Par</div>
                <div class="stat-value fw-bold" id="matches">0/8</div>
            </div>
        </div>

        <div class="game-board" id="gameBoard"></div>
    </div>
    </div>

    <?php
    include("includes/navbar.php" );
    ?>



    <div class="modal fade" id="winModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <h2 class="fw-bold mb-4"><i class="fas fa-trophy"></i>Du vinder!<i class="fas fa-trophy"></i></h2>
            <p class="mb-2">Forsøg: <span id="finalMoves"></span></p><br><p class="mb-4">Tid: <span id="finalTime"></span></p>
            <button class="btn memoryBtn px-4 py-2 mx-auto" onclick="newGame()" data-bs-dismiss="modal">Spil igen</button>
        </div>
    </div>


    <script>

        var winModal;

        var images = [
            'https://images.unsplash.com/photo-1425082661705-1834bfd09dca?w=400',
            'https://images.unsplash.com/photo-1548681528-6a5c45b66b42?w=400',
            'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?w=400',
            'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?w=400',
            'https://images.unsplash.com/photo-1535268647677-300dbf3d78d1?w=400',
            'https://images.unsplash.com/photo-1574158622682-e40e69881006?w=400',
            'https://images.unsplash.com/photo-1560807707-8cc77767d783?w=400',
            'https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400'
        ];

        var firstCard = null
        var secondCard = null
        var canFlip = true
        var matches = 0
        var moves = 0
        var seconds = 0
        var timerRunning = false
        var timerInterval;

       function navigateTo(pageId){
           document.querySelectorAll('.page').forEach(page => page.classList.remove('active'));
           document.getElementById(pageId).classList.add('active');
           if (pageId === 'page-menu'){
               clearInterval(timerInterval);
               timerRunning = false;
           }
       }

        function startGame(){
            const gameBoard = document.getElementById("gameBoard")
            gameBoard.innerHTML = "";
            let cardImages = images.concat(images);
            cardImages.sort(() => Math.random() - 0.5);

            for (var i = 0; i < cardImages.length; i++) {
                var card = document.createElement('div');
                card.className = 'memoryCard';
                card.innerHTML = '<div class="card-front"><i class="fas fa-heart"></i></div>' +
                    '<div class="card-back"><img src="' + cardImages[i] + '"></div>';
                card.onclick = flipCard;
                card.dataset.image = cardImages[i];
                gameBoard.appendChild(card);
            }

            firstCard = null;
            secondCard = null;
            canFlip = true;
            matches = 0;
            moves = 0;
            seconds = 0;
            timerRunning = false;

            updateStarts();
            clearInterval(timerInterval);
        }

        function flipCard(){
            if (!canFlip) return;
            if (this.classList.contains('flipped')) return;
            if (this.classList.contains('matched')) return;

            if (!timerRunning){
                startTimer();
            }

            this.classList.add('flipped');

            if (firstCard == null){
                firstCard = this;
            } else {
                secondCard = this;
                canFlip = false;
                moves++;
                updateStarts();
                checkMatch();
            }
        }

        function checkMatch(){
            var match = firstCard.dataset.image == secondCard.dataset.image;

            if (match){
                setTimeout(function(){
                    firstCard.classList.add('matched');
                    secondCard.classList.add('matched');
                    matches++;
                    updateStarts();
                    resetCards();

                    if (matches == 8){
                        endGame();
                    }
                }, 500);
            } else {
                setTimeout(function (){
                    firstCard.classList.remove('flipped');
                    secondCard.classList.remove('flipped');
                    resetCards();
                }, 1000);
            }
        }

        function resetCards(){
            firstCard = null;
            secondCard = null;
            canFlip = true;
        }

        function startTimer(){
            timerRunning = true;
            timerInterval = setInterval(function (){
                seconds++;
                updateStarts();
            }, 1000);
        }


        function updateStarts(){
            document.getElementById('moves').textContent = moves;
            document.getElementById('matches').textContent = matches + '/8';

            var mins = Math.floor(seconds / 60);
            var secs = seconds % 60;
            if (secs < 10) secs = '0' + secs;
            document.getElementById('time').textContent = mins + ':' + secs;
        }

        document.addEventListener("DOMContentLoaded", function() {
            winModal = new bootstrap.Modal(document.getElementById('winModal'));
        });

        function endGame(){
            clearInterval(timerInterval);
            document.getElementById('finalMoves').textContent = moves;
            document.getElementById('finalTime').textContent = document.getElementById('time').textContent;
            winModal.show();;
        }

        function newGame(){
            winModal.hide();
            clearInterval(timerInterval);
            startGame();
        }

        startGame();

    </script>


</body>
</html>
