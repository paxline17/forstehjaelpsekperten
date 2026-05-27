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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/5458120b39.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <div class="container my-3 flex-grow-1">

        <div id="page-menu" class="page active">
            <h1 class="text-center fw-bold my-4">Spil</h1>
            <div class="row g-3 px-2">

                <div class="col-12 col-md-6">
                    <div class="bg-white border border-lightgray rounded-3 d-flex flex-column justify-content-center align-items-center position-relative overflow-hidden shadow-sm cursor-pointer p-4 menu-card" onclick="navigateTo('page-game'); startNewGame('memory');">
                        <div class="menu mb-2 d-flex align-items-center justify-content-center rounded">
                            <i class="fas fa-th fs-1 text-secondary"></i>
                        </div>
                        <span class="fw-bold text-dark fs-5 text-center px-2">Vendespil</span>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="bg-white border border-lightgray rounded-3 d-flex flex-column justify-content-center align-items-center position-relative overflow-hidden shadow-sm cursor-pointer p-4 menu-card" onclick="navigateTo('page-game'); startNewGame('matchWordImage');">
                        <div class="menu mb-2 d-flex align-items-center justify-content-center rounded">
                            <i class="fas fa-font text-primary fs-1"></i>
                        </div>
                        <span class="fw-bold text-dark fs-5 text-center px-2">Match ord og billede</span>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="bg-white border border-lightgray rounded-3 d-flex flex-column justify-content-center align-items-center position-relative overflow-hidden shadow-sm cursor-pointer p-4 menu-card">
                        <div class="menu mb-2 d-flex align-items-center justify-content-center rounded">
                            <i class="fas fa-clock fs-1"></i>
                        </div>
                        <span class="fw-bold text-dark fs-5 text-center px-2">Kommer snart</span>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="bg-white border border-lightgray rounded-3 d-flex flex-column justify-content-center align-items-center position-relative overflow-hidden shadow-sm cursor-pointer p-4 menu-card">
                        <div class="menu mb-2 d-flex align-items-center justify-content-center rounded">
                            <i class="fas fa-clock fs-1"></i>
                        </div>
                        <span class="fw-bold text-dark fs-5 text-center px-2">Kommer snart</span>
                    </div>
                </div>

            </div>
        </div>

        <div id="page-game" class="page">
            <div class="d-flex justify-content-between align-items-center mb-2 px-2">
                <button class="btn btn-link link-dark fs-4 p-1" onclick="navigateTo('page-menu')">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button class="btn btn-link text-info fs-4 p-1" data-bs-toggle="modal" data-bs-target="#infoModal">
                    <i class="fas fa-info-circle"></i>
                </button>
            </div>


        <div class="memoryHeader text-center bg-white p-3 mb-4 mx-auto shadow-sm rounded-4 border-secondary border border-2">
            <div id="streakBadge" class="badge bg-primary text-white mb-1 d-none">
                <i class="fas fa-fire"></i> <span id="streakCount">0</span> I STREG!
            </div>

            <h1 class="memoryH1 fw-bold fs-4 mb-2 text-secondary" id="gameTitle">Spil</h1>

            <div class="d-flex justify-content-center gap-2 align-items-center flex-wrap">
                <div class="stat stats-box border rounded-3 text-center px-2 py-1">
                    <div class="stat-label small opacity-75">Forsøg</div>
                    <div class="stat-value fw-bold fs-5" id="moves">0</div>
                </div>

                <div class="stat stats-box border rounded-3 text-center px-2 py-1">
                    <div class="stat-label small opacity-75">Tid</div>
                    <div class="stat-value fw-bold fs-5" id="time">0:00</div>
                </div>

                <div class="stat stats-box border rounded-3 text-center px-2 py-1">
                    <div class="stat-label small opacity-75">Par</div>
                    <div class="stat-value fw-bold fs-5" id="matches">0/9</div>
                </div>

                <div class="stat stats-box border rounded-3 text-center px-2 py-1">
                    <div class="stat-label small opacity-75">Point</div>
                    <div class="stat-value fw-bold fs-5" id="score">0</div>
                </div>
            </div>

        </div>

        <div id="gameContainer" class="mb-5"></div>
    </div>

    </div>

    <?php
    include("includes/navbar.php" );
    ?>

    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border border-primary border-2 rounded-4">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body text-center pt-0">
                    <i class="fas fa-info-circle text-info fs-1 mb-3"></i>
                    <h2 class="fw-bold mb-3 text-primary">Hvordan spiller man?</h2>

                    <div id="infoModalText" class="mb-3"></div>

                    <button type="button" class="btn btn-primary px-4 py-2 mt-2 rounded-3 text-white" data-bs-dismiss="modal">Forstået</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="winModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content text-center p-4 border border-secondary border-3 rounded-4">

               <h2 class="fw-bold mb-4 text-center text-primary-emphasis">
                   <i class="fas fa-trophy text-primary me-2"></i>Du vinder!<i class="fas fa-trophy text-primary ms-2"></i>
               </h2>

               <p class="mb-2 fs-5">Forsøg: <span id="finalMoves" class="fw-bold">0</span></p>
               <p class="mb-2 fs-5">Tid: <span id="finalTime" class="fw-bold">0:00</span></p>

               <div class="bg-primary-subtle border border-primary p-3 rounded-3 my-3">
                   <p class="mb-0 fs-4 fw-bold text-dark">Din Score:</p>
                   <p class="mb-0 display-6 fw-bold text-primary" id="finalScore">0</p>
               </div>

               <button class="btn btn-win-retry px-5 py-2 rounded-3 mt-3 w-75 mx-auto" data-bs-dismiss="modal" onclick="restartCurrentGame()">Spil igen</button>

           </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        var winModal;
        var currentGameType = "memory"

        var memoryImages = [
            'https://images.unsplash.com/photo-1425082661705-1834bfd09dca?w=400',
            'https://images.unsplash.com/photo-1548681528-6a5c45b66b42?w=400',
            'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?w=400',
            'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?w=400',
            'https://images.unsplash.com/photo-1535268647677-300dbf3d78d1?w=400',
            'https://images.unsplash.com/photo-1574158622682-e40e69881006?w=400',
            'https://images.unsplash.com/photo-1560807707-8cc77767d783?w=400',
            'https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400',
            'https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=400'
        ];

        var wordImagePairs = [
            { id: 1, word: "Hjertestarter (AED)", image: "https://cdn-icons-png.flaticon.com/128/3004/3004458.png" },
            { id: 2, word: "Forbindingskasse", image: "https://cdn-icons-png.flaticon.com/128/2966/2966327.png" },
            { id: 3, word: "Ambulance", image: "https://cdn-icons-png.flaticon.com/128/1040/1040243.png" },
            { id: 4, word: "Plaster", image: "https://cdn-icons-png.flaticon.com/128/2376/2376104.png" },
            { id: 5, word: "Førstehjælpsbog", image: "https://cdn-icons-png.flaticon.com/128/3308/3308557.png" },
            { id: 6, word: "Sikkerhedsvest", image: "https://cdn-icons-png.flaticon.com/128/9500/9500057.png" },
            { id: 7, word: "Ispose", image: "https://cdn-icons-png.flaticon.com/128/2038/2038164.png" },
            { id: 8, word: "Nødtelefon 112", image: "https://cdn-icons-png.flaticon.com/128/159/159832.png" },
            { id: 9, word: "Engangshandsker", image: "https://cdn-icons-png.flaticon.com/128/4804/4804153.png" }
        ];

        var firstCard = null;
        var secondCard = null;
        var selectedWordCard = null;
        var selectedImageCard = null;
        var canFlip = true;
        var matches = 0;
        var totalPairsNeeded = 0;
        var moves = 0;
        var seconds = 0;

        var score = 0;
        var comboBonusPoints = 0;
        var currentStreak = 0;

        var timerRunning = false
        var timerInterval;

       function navigateTo(pageId){
           document.querySelectorAll('.page').forEach(page => page.classList.remove('active'));
           document.getElementById(pageId).classList.add('active');
           if (pageId === 'page-menu'){
               clearInterval(timerInterval);
               timerRunning = false;
               document.getElementById('streakBadge').classList.add('d-none');
           }
       }

       function startNewGame(type){
           currentGameType = type;
           setupGame();
       }

       function restartCurrentGame(){
           winModal.hide();
           setupGame();
       }

       function setupGame() {
           const container = document.getElementById("gameContainer");
           const gameTitle = document.getElementById("gameTitle");
           const infoModalText = document.getElementById("infoModalText");
           const infoModalTitle = document.querySelector("#infoModal .modal-body h2");


           container.innerHTML = "";
           clearInterval(timerInterval);

           matches = 0;
           moves = 0;
           seconds = 0;
           score = 0;
           comboBonusPoints = 0;
           currentStreak = 0;
           timerRunning = false;

           document.getElementById('streakBadge').classList.add('d-none');

           if (currentGameType === 'memory') {
               totalPairsNeeded = 9;
               gameTitle.innerHTML = '<i class="fas fa-star small"></i> Vendespil <i class="fas fa-star small"></i>'

               infoModalTitle.textContent = "Regler: Vendespil"
               infoModalText.innerHTML =
                   '<p class="mb-2"><strong>Formål:</strong> Find alle de matchende førstehjælpsting på færrest mulige forsøg.</p>' +
                   '<p class="mb-2"><strong>Sådan gør du:</strong> Klik på et kort for at vende det, og prøv derefter at finde dets makker ved at klikke på et andet kort.</p>' +
                   '<p class="mb-2"><strong>Point:</strong> Hvert rigtigt par giver <strong>100 point</strong>.</p>' +
                   '<p class="mb-0 text-secondary"><strong>Combo-bonus:</strong> Hvis du finder flere rigtige par i træk (uden fejl), udløser du en streak, som giver ekstra bonuspoint!</p>';

               var board = document.createElement('div');
               board.className = 'game-board mx-auto px-2';
               container.appendChild(board);

               let deck = memoryImages.concat(memoryImages);
               deck.sort(() => Math.random() - 0.5);

               deck.forEach(imgUrl => {
                   var card = document.createElement('div');
                   card.className = 'memoryCard';
                   card.innerHTML = '<div class="card-front d-flex align-items-center justify-content-center"><img src="images/Logo.svg" alt="Logo" style="width: 70%; height: 70%; object-fit: contain;"></div>' +
                       '<div class="card-back"><img src="' + imgUrl + '"></div>';
                   card.onclick = flipMemoryCard
                   card.dataset.matchKey = imgUrl;
                   board.appendChild(card);
               });

               firstCard = null;
               secondCard = null;
               canFlip = true;

           } else if (currentGameType === 'matchWordImage') {
               totalPairsNeeded = wordImagePairs.length;
               gameTitle.innerHTML = '<i class="fas fa-font small"></i> Match ord og billede <i class="fas fa-font small"></i>'

               infoModalTitle.textContent = "Regler: Match ord & billede";
               infoModalText.innerHTML = '<p class="mb-2"><strong>Formål:</strong> Forbind det rigtige førstehjælpsbegreb med det korrekte piktogram.</p>' +
                   '<p class="mb-2"><strong>Sådan gør du:</strong> Klik først på et <strong>ord</strong> i venstre kolonne, og klik derefter på det <strong>billede</strong> i højre kolonne, som du mener passer til ordet.</p>' +
                   '<p class="mb-2"><strong>Point:</strong> Hvert rigtigt match låser brikkerne og giver <strong>100 point</strong>. Forkerte svar farver brikkerne røde.</p>' +
                   '<p class="mb-0 text-secondary"><strong>Combo-bonus:</strong> Hvis du finder flere rigtige par i træk (uden fejl), udløser du en streak, som giver ekstra bonuspoint!</p>';


               var row = document.createElement('div');
               row.className = 'row g-3 mx-auto px-2';
               row.style.maxWidth = '600px';
               row.innerHTML = '<div class="col-6 d-flex flex-column gap-3" id="wordsCol"></div><div class="col-6 d-flex flex-column gap-3" id="imagesCol"></div>';
               container.appendChild(row);

               const wordsCol = document.getElementById("wordsCol");
               const imagesCol = document.getElementById("imagesCol");

               let wordsDeck = [], imagesDeck = [];
               wordImagePairs.forEach(pair => {
                   wordsDeck.push({id: pair.id, text: pair.word});
                   imagesDeck.push({id: pair.id, imgUrl: pair.image});
               });

               wordsDeck.sort(() => Math.random() - 0.5);
               imagesDeck.sort(() => Math.random() - 0.5);

               wordsDeck.forEach(item => {
                   var card = document.createElement('div');
                   card.className = 'match-card-word bg-white border border-secondary border-2 rounded-3 p-3 mb-2 text-center fw-bold cursor-pointer';
                   card.style.fontSize = '0.9rem';
                   card.textContent = item.text;
                   card.dataset.pairId = item.id;
                   card.onclick = selectWordElement;
                   wordsCol.appendChild(card);
               });

               imagesDeck.forEach(item => {
                   var card = document.createElement('div');
                   card.className = 'match-card-image border border-secondary border-2 cursor-pointer';
                   card.innerHTML = '<img src="' + item.imgUrl + '">';
                   card.dataset.pairId = item.id;
                   card.onclick = selectImageElement;
                   imagesCol.appendChild(card);
               });

               selectedWordCard = null;
               selectedImageCard = null;


           }

           updateStatsDisplay();

       }
        function flipMemoryCard(){
            if (!canFlip) return;
            if (this.classList.contains('flipped') || this.classList.contains('matched')) return;

            if (!timerRunning) startTimer();

            this.classList.add('flipped');

            if (firstCard == null){
                firstCard = this;
            } else {
                secondCard = this;
                canFlip = false;
                moves++;

                if (firstCard.dataset.matchKey == secondCard.dataset.matchKey){
                    score += 100;
                    currentStreak++;
                    handleComboBonus();

                    setTimeout(() => {
                        firstCard.classList.add('matched');
                        secondCard.classList.add('matched');
                        matches++;
                        updateStatsDisplay();

                        firstCard = null;
                        secondCard = null;
                        canFlip = true;

                        if (matches == totalPairsNeeded) endGame();
                    }, 500);
                } else{
                    currentStreak = 0;
                    setTimeout(() => {
                        firstCard.classList.remove('flipped');
                        secondCard.classList.remove('flipped');

                        firstCard = null;
                        secondCard = null;
                        canFlip = true;

                        updateStatsDisplay();
                    }, 1000);
                }
            }
        }

        function selectWordElement(){
            if (this.classList.contains('matched-done')) return;
            if (!timerRunning) startTimer();

            if (selectedWordCard) selectedWordCard.classList.remove('border-primary', 'bg-light');
            selectedWordCard = this;
            selectedWordCard.classList.add('border-primary', 'bg-light');

            checkWordImageMatch();
        }

        function selectImageElement(){
            if (this.classList.contains('matched-done')) return;
            if (!timerRunning) startTimer();

            if (selectedImageCard) selectedImageCard.classList.remove('border-primary', 'bg-light');
            selectedImageCard = this;
            selectedImageCard.classList.add('border-primary', 'bg-light');

            checkWordImageMatch();
        }

        function checkWordImageMatch(){
            if (selectedWordCard && selectedImageCard){
                moves++;

                if (selectedWordCard.dataset.pairId == selectedImageCard.dataset.pairId){
                    score += 100;
                    currentStreak++;
                    handleComboBonus();

                    var correctWord = selectedWordCard;
                    var correctImage = selectedImageCard;

                    selectedWordCard.classList.remove('border-primary', 'bg-light')
                    selectedImageCard.classList.remove('border-primary', 'bg-light')

                    selectedWordCard.classList.add('border-primary', 'bg-light', 'border-secondary')
                    selectedImageCard.classList.add('border-primary', 'bg-light', 'border-secondary')

                    correctWord.classList.add('matched-done');
                    correctImage.classList.add('matched-done');

                    matches++;
                    selectedWordCard = null;
                    selectedImageCard = null;
                    updateStatsDisplay();

                    if (matches == totalPairsNeeded) endGame();
                } else {
                    currentStreak =0;
                    var tempW = selectedWordCard, tempI = selectedImageCard;
                    tempW.classList.add('border-danger', 'bg-danger-subtle');
                    tempI.classList.add('border-danger', 'bg-danger-subtle');



                    selectedWordCard = null;
                    selectedImageCard = null;

                    setTimeout(function (){
                        tempW.classList.remove('border-danger', 'bg-danger-subtle', 'border-primary', 'bg-light');
                        tempI.classList.remove('border-danger', 'bg-danger-subtle', 'border-primary', 'bg-light');
                        updateStatsDisplay();
                    }, 800);
                }
            }
        }

        function handleComboBonus(){
            if (currentStreak > 1){
                var bonus = (currentStreak - 1) * 50;
                score += bonus;
                comboBonusPoints += bonus;
            }
        }



        function startTimer(){
            timerRunning = true;
            timerInterval = setInterval(() => {
                seconds++;
                updateStatsDisplay();
            },  1000);
        }

        function updateStatsDisplay(){
            document.getElementById('moves').textContent = moves;
            document.getElementById('matches').textContent = matches + '/' + totalPairsNeeded
            document.getElementById('score').textContent = score;

            var streakBadge = document.getElementById('streakBadge');
            if (currentStreak >= 2){
                document.getElementById('streakCount').textContent = currentStreak;
                streakBadge.classList.remove('d-none')
            } else{
                streakBadge.classList.add('d-none');
            }

            var mins = Math.floor(seconds / 60);
            var secs = seconds % 60;
            if (secs < 10) secs = '0' + secs;
            document.getElementById('time').textContent = mins + ':' + secs;
        }

        function endGame(){
            clearInterval(timerInterval);
            document.getElementById('streakBadge').classList.add('d-none');

            document.getElementById('finalMoves').textContent = moves;

            var finalTimeText = document.getElementById('time').textContent;
            document.getElementById('finalTime').textContent = finalTimeText;
            document.getElementById('finalScore').textContent = score;

            let memoryHighscore = JSON.parse(localStorage.getItem('memory_highscore')) || { score: 0, time: "99:59", seconds: 99999 };
            let matchHighscore = JSON.parse(localStorage.getItem('memory_highscore')) || { score: 0, time: "99:59", seconds: 99999 };

            if (currentGameType === 'memory') {
                if (score > memoryHighscore.score || (score === memoryHighscore.score && seconds < memoryHighscore.seconds)){
                    localStorage.setItem('memory_highscore', JSON.stringify({score: score, finalTimeText, seconds: seconds}));
                }
            } else if (currentGameType === 'matchWordImage'){
                if (score > matchHighscore.score || (score === matchHighscore.score && seconds < matchHighscore.seconds)){
                    localStorage.setItem('match_highscore', JSON.stringify({score: score, finalTimeText, seconds: seconds}));
            }

            winModal.show();
        }

        document.addEventListener("DOMContentLoaded", function (){
           winModal = new bootstrap.Modal(document.getElementById('winModal'));
        });



    </script>


</body>
</html>
