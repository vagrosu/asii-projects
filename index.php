<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="img/logo-icon.png">
    <!-- BOOTSTRAP INCLUDE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>LAN Party</title>
</head>
<body>
  <div id="main">
    <!-- Header aka navbar :D -->
    <?php
        include("assets/php/navbar.php");
    ?>

    <!-- Contents -->
    <div id="inner">
        <div class="banner-heroes">
            <div class="title-div">
              <p class="title">Participa si tu!</p>
              <p class="subtitle">Pentru a simti spiritul de gamer, inscrie-te la competitiile 5v5 sau 1v1. Iti gasim noi echipa daca nu ti-ai convins inca prietenii sa vina.</p>
            </div>
            <div class="heroes">
            </div>
        </div>
        <div id="banner-video">
            <div id="left">
            <iframe width="550" height="380" src="https://www.youtube.com/embed/856KxSrZCFU?fbclid=IwAR3toVsXOJHk44g6uLQe3R1nOlyLKA8mO2DwtramaUkInHko_9vJZT9r_pk"></iframe>
            </div>
            <div id="right">
              <p class="title">Lan Party Iasi 2019</p>
              <p>Evenimentul se va desfasura pe parcursul a doua saptamani
                (in week-end), si va da ocazia participantilor sa isi arate
                skill-urile la jocuri de tip competitiv CS:GO, DotA 2,
                HearthStone, sau va oferi o alternativa de a-ti cunoaste
                colegii mai bine la jocurile de tip For Fun.</p>
            </div>
        </div>
        <div class="banner-competitive">
            <div class="row title-div">
              <p class="title">Jocuri Competitive</p>
              <p class="subtitle">Fiecare joc promite multe premii, de la tricouri geeky si medalii, pana la skin-uri si cosmetice in-game. Gotta win 'em all!</p>
            </div>
            <div class="row gallery">
                <img src="img/bannercompetitive.png" alt="">
            </div><br>

        </div>
        <div class="banner-fun">
            <div class="row title-div">
              <p class="title">Jocuri For Fun</p>
              <p class="subtitle">Fiecare joc promite multe premii, de la tricouri geeky si medalii, pana la skin-uri si cosmetice in-game. Gotta win 'em all!</p>
            </div>
            <div class="row gallery">
                <img src="img/bannerfun.png" alt="">
            </div><br>
            <div class="row">
              <a href="regulament.php" id="regulament">REGULAMENT</a>
            </div>
        </div>
    </div>


    <div id="tickets">
      <div class="title-div">
        <p class="title">BILETE</p>
        <p class="subtitle">
          Dupa ce te-ai inscris poti sa iti achizitionezi
          biletul de participare de la voluntarii nostri,
          pe care ii gasesti in holurile Facultatii de
          Informatica. Daca nu i-ai gasit, poti cumpara
          bilete chiar la intrarea la Party.
        </p>
      </div>
      <div id="tickets-row">
        <div class="ticket">
          <div class="ticket-content-wrapper"></div>
          <div class="content">
            <p>LOL 5V5</p>
            <p>FIFA 19</p>
            <a href="#">12 LEI</a>
          </div>
        </div>
        <div class="ticket">
          <div class="ticket-content-wrapper"></div>
          <div class="content">
            <p>DOTA 2 1V1</p>
            <p>LOL 1V1</p>
            <p>HEARTHSTONE</p>

            <a href="#">10 LEI</a>
          </div>
        </div>
        <div class="ticket">
          <div class="ticket-content-wrapper"></div>
          <div class="content">
            <p>METIN 2</p>
            <p>CS:GO 3V3</p>
            <a href="#">5 LEI</a>
          </div>
        </div>
        <div class="ticket">
          <div class="ticket-content-wrapper"></div>
          <div class="content">
            <p>FOR FUN</p>
            <a href="#">4 LEI</a>
          </div>
        </div>
        </div>
    </div>

    <div id="fun" class="container">
      <div class="row">
        <div class="text-center">
          Unde va fi tot fun-ul?
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="row">
            2
          </div>
          <div class="row">
            3
          </div>
        </div>
        <div class="col">
          1
        </div>
      </div>
    </div>


    <!-- Footer -->
    <?php
        include("assets/php/footer.php");
    ?>
  </div>
  <script async src="assets/js/main.js"></script>
</body>
</html>
