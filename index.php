<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo-icon.png">
    <!-- BOOTSTRAP INCLUDE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>LAN Party</title>
</head>
<body>
  <div id="main">
    <!-- Header aka navbar :D -->
    <?php
        include("navbar.php");
    ?>

    <!-- Contents -->
    <div id="inner">
        <div class="banner-heroes">
            <div class="title">
              <p id="title">Participa si tu!</p>
              <p id="subtitle">Pentru a simti spiritul de gamer, inscrie-te la competitiile 5v5 sau 1v1. Iti gasim noi echipa daca nu ti-ai convins inca prietenii sa vina.</p>
            </div>
            <div class="heroes">
            </div>
        </div>
        <!-- banner background taiat succes -->
        <div class="banner-competitive">
            <div class="row title"> 
              <p id="title">Jocuri competitive</p>
              <p id="subtitle">Fiecare joc promite multe premii, de la tricouri geeky si medalii, pana la skin-uri si cosmetice in-game. Gotta win 'em all!</p>
            </div>
            <div class="row gallery">
                <img src="img/bannercompetitive.png" alt="">
            </div>
            <div class="row">
              <a href="" id="regulament">REGULAMENT</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
        include("footer.php");
    ?>
  </div>
</body>
</html>
