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

<body class="bg-light pb-5">

    <div>
    <img src="images/logozoe.svg" alt="Førstehjælpsexperten logo" class="d-block mx-auto w-50" style="height: 130px;">
    </div>

<div class="container my-4">

    <div class="text-center mb-4 pb-3">
        <h1 class="fs-2 fw-normal text-dark mb-1">Velkommen</h1>
        <h2 id="userGreetingName" class="fs-2 fw-semibold text-dark"></h2>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-10 col-md-11">
            <div class="p-3 border border-dark text-center bg-lightgray">
                <p id="divTips" class="mb-0 small tracking-wide"></p>
            </div>
        </div>
    </div>

    <p class="text-center fw-semibold mb-3">Akutte guides</p>

    <div class="row g-3 mb-4 justify-content-center">
        <div class="col-6 col-sm-4 col-md-3">
            <a href="guides.php?id=hjertestop" class="text-decoration-none text-dark text-center border border-dark d-flex flex-column align-items-center justify-content-center bg-white p-4 h-100 transition-hover">
                <i class="fa-solid fa-heart-pulse fs-2 mb-2"></i>
                <p class="fw-bold text-dark">Hjertestop</p>
            </a>
        </div>

        <div class="col-6 col-sm-4 col-md-3">
            <a href="guides.php?id=kvælning" class="text-decoration-none text-dark text-center border border-dark d-flex flex-column align-items-center justify-content-center bg-white p-4 h-100 transition-hover">
                <i class="fa-solid fa-head-side-cough fs-2 mb-2"></i>
                <p class="fw-bold text-dark">Kvælning</p>
            </a>
        </div>
    </div>


    <div class="row justify-content-center mt-4">
        <div class="col-10 col-md-11">
            <a href="Games.php" class="text-decoration-none text-dark d-flex justify-content-between align-items-center border border-dark bg-white p-3">
        <div>
            <p class="mb-1">Forstæt hvor du slap:</p>
            <p class="mb-0">Vendespil</p>
        </div>
                <i class="fa-solid fa-arrow-right fs-5 mb-1"></i>
            </a>
        </div>

</div>




</div>

<?php
include("includes/navbar.php" );
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    const textSelect = [
        '[ TIP: Stop altid op og få overblik over ulykkesstedet, før du handler ]',
        '[ TIP: Sikr dig selv først – du kan ikke hjælpe andre, hvis du selv kommer til skade ]',
        '[ TIP: Flyt kun en tilskadekommen, hvis der er akut livsfare som brand eller røg ]',
        '[ TIP: Brug tilskuere aktivt til at ringe 1-1-2 eller hente en hjertestarter ]',
        '[ TIP: Ring 1-1-2 med det samme ved mistanke om hjertestop, og brug højttaler ]',
        '[ TIP: Kend din adresse eller brug 112-appen, så ambulancen hurtigt finder frem ]',
        '[ TIP: Stands massive blødninger omgående ved at trykke en hånd hårdt i såret ]',
        '[ TIP: Læg en fast trykforbinding over blødningen for at mindske blodtabet ]',
        '[ TIP: Hæv en kraftigt blødende arm eller et ben over hjerteniveau for at bremse blodet ]',
        '[ TIP: Åbn luftvejen på en bevidstløs person ved at bøje hovedet forsigtigt bagud ]',
        '[ TIP: Fjern synligt opkast eller genstande fra munden inden kunstigt åndedræt ]',
        '[ TIP: Snorkende eller gurglende lyde fra en bevidstløs betyder lukket luftvej ]',
        '[ TIP: Undersøg vejrtrækningen i 10 sekunder: Se, lyt og føl efter luft ]',
        '[ TIP: Gispende eller uregelmæssig vejrtrækning skal behandles som hjertestop. Start HLR ]',
        '[ TIP: Læg en bevidstløs person med normal vejrtrækning i stabilt sideleje ]',
        '[ TIP: Hold øje med personen i stabilt sideleje – vejrtrækningen kan pludselig stoppe ]',
        '[ TIP: Giv altid 30 tryk og 2 indblæsninger ved hjertemassage (HLR) ]',
        '[ TIP: Hold en fast rytme på 100-120 tryk i minuttet under hjertemassage ]',
        '[ TIP: Tryk brystkassen 5-6 cm ned på en voksen, og lad den komme helt op igen ]',
        '[ TIP: Tænd hjertestarteren (AED) med det samme og følg de talte instruktioner ]',
        '[ TIP: Fortsæt hjertemassagen uden stop, mens en anden påsætter elektroderne ]',
        '[ TIP: Rør ikke den tilskadekomne, når hjertestarteren analyserer eller giver stød ]',
        '[ TIP: Opmuntr altid til at hoste, hvis personen har fået noget i den gale hals ]',
        '[ TIP: Giv op til 5 hårde slag med håndroden mellem skulderbladene ved kvælning ]',
        '[ TIP: Brug Heimlich-manøvren (5 tryk på maven), hvis slag i ryggen ikke virker ]',
        '[ TIP: Bleg, kold hud og hurtig vejrtrækning er tegn på chok (kredsløbssvigt) ]',
        '[ TIP: Forebyg chok ved at holde den tilskadekomne varm med et tæppe eller jakke ]',
        '[ TIP: Giv ALDRIG mad eller drikke til en person med svære skader eller i chok ]',
        '[ TIP: Brug psykisk førstehjælp: Skab tæt kontakt, giv ro og tal beroligende ]',
        '[ TIP: Gå aldrig fra en tilskadekommen – chok og smerte kan gøre dem konfuse ]'
    ];

    function getRandomTipsText(){
        const getRandomTipsText = Math.floor(Math.random() * textSelect.length);
        return textSelect[getRandomTipsText];
    }

    function loadTipText(){
        const myDiv = document.getElementById('divTips');
        myDiv.innerHTML = getRandomTipsText();
    }

    document.addEventListener("DOMContentLoaded", function (){
        loadTipText();

        const savedName = localStorage.getItem('user_profile_name');
        if (savedName){
            const firstName = savedName.split(' ')[0]
            document.getElementById('userGreetingName').textContent = firstName;
        }

    });



</script>

</body>
</html>

