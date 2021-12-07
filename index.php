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
              <p class="subtitle">Pentru a simți spiritul de gamer, înscrie-te la competițiile 5v5 sau 1v1. Îți găsim noi echipa dacă nu ți-ai convins încă prietenii să vină.</p>
            </div>
            <div class="heroes">
            </div>
        </div>

        <div id="banner-video" class="container">
          <div class="row mx-0 align-items-center justify-content-center">
            <div class="col col-xl-6 col-lg-0 text-center d-none d-xl-block">
              <iframe width="550" height="380" src="https://www.youtube.com/embed/856KxSrZCFU?fbclid=IwAR3toVsXOJHk44g6uLQe3R1nOlyLKA8mO2DwtramaUkInHko_9vJZT9r_pk" allowfullscreen></iframe>
            </div>
            <div class="col col-xl-6 col-lg-12 text-center">
              <p class="title">Lan Party Iași 2019</p>
              <p class="subtitle">Evenimentul se va desfășura pe parcursul a două săptămâni
                (în weekend), și va da ocazia participanților să își arate
                skill-urile la jocuri de tip competitiv CS:GO, DotA 2,
                HearthStone, sau va oferi o alternativă de a-ți cunoaște 
                colegii mai bine la jocurile de tip For Fun.</p>
            </div>
            <div class="col-12 text-center d-xl-none video-wrapper">
              <iframe width="550" height="380" src="https://www.youtube.com/embed/856KxSrZCFU?fbclid=IwAR3toVsXOJHk44g6uLQe3R1nOlyLKA8mO2DwtramaUkInHko_9vJZT9r_pk" allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <div class="banner-competitive container">
            <div class="row text-center">
              <h2 class="title">Jocuri Competitive</h2>
              <p class="subtitle">Fiecare joc promite multe premii, de la tricouri geeky și medalii, până la skin-uri și cosmetice in-game. Gotta win 'em all!</p>
            </div>
            <div class="row d-none d-md-block">
                <img src="img/bannercompetitive.png" alt="">
            </div>
            <div class="row d-md-none">
                <img src="img/bannercompetitiveMobile.png" alt="">
            </div>
            <br>
        </div>

        <div class="banner-fun container my-5">
            <div class="row text-center">
              <h2 class="title">Jocuri For Fun</h2>
              <p class="subtitle">Fiecare joc promite multe premii, de la tricouri geeky și medalii, până la skin-uri și cosmetice in-game. Gotta win 'em all!</p>
            </div>
            <div class="row d-none d-md-block">
                <img src="img/bannerfun.png">
            </div>
            <div class="row d-md-none">
                <img src="img/bannerfunMobile.png">
            </div><br>
            <div class="row">
              <a href="regulament.php" id="regulament">REGULAMENT</a>
            </div>
        </div>



    <div id="tickets" class="container">
      <div class="title-div">
        <h2 class="title text-center">Bilete</h2>
        <p style="font-size:20px; font-weight:bold; margin:0 20px; text-align:center">
          După ce te-ai înscris poți să iți achiziționezi
          biletul de participare de la voluntarii noștri,
          pe care îi găsești în holurile Facultății de
          Informatică.
          <br>Dacă nu i-ai găsit, poți cumpăra
          bilete chiar la intrarea la Party.
        </p>
      </div>
      <div id="tickets-row" class="container">
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
      <div class="row mx-0">
        <div class="text-center mb-5 title">
          Unde va fi tot fun-ul?
        </div>
      </div>
      <div class="row mx-0">
        <div class="col col-md-12 col-lg-6">
          <div class="row mx-0">
            <div class="text-center mb-5 subtitle">
              Competiția și consolele vor fi toate la sala VooDoo.
              Sala se află pe Bulevardul Independenței 25-27, dar pentru mai multe detalii puteți contacta coordonatorul evenimentului Teodor Drăgoi, la numărul de telefon 0747987693.
            </div>
          </div>
          <div class="row mx-0">
            <div class="col">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1098.074060492574!2d27.588684973082074!3d47.16618150760155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c29ba8d7583d891!2sVooDoo%20Games%20Club!5e0!3m2!1sro!2sro!4v1638656376492!5m2!1sro!2sro" width="100%" height="100%" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
            </div>
          </div>
        </div>
        <div class="col col-md-0 col-lg-6  d-none d-lg-block">
          <img src="img/fantana.png" width="100%" height="100%">
        </div>
      </div>
    </div>

    <div id="inscrieri" class="container mt-5 mb-5 ">
      <div class="text-center title">
        Înscrieri!
      </div>
      <div class="text-center mt-4 subtitle">
        Înscrierile se pot face începând cu data de 5 Martie, de luni pana vineri, la parterul Facultății de Informatică, între orele 10-20
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
