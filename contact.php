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
    <title>Contact - LAN Party</title>
</head>
<body>
  <div id="main">
    <!-- Header aka navbar :D -->
    <?php
        include("assets/php/navbar.php");
    ?>

    <!-- Contents -->
    <div id="inner">
        <header class="major">
          <h1>Contactează-ne !</h1>
        </header>
        <div class="contact-form">
          <h5>Dacă întâmpinați vreo problemă la înscriere, aveți vreo întrebare, sau vreți să ne oferiți un feedback, nu ezitați să ne contactați !</h5>
          <form action="assets\php\contact_form.php" method="post">
            <div class="form-inputs">
                <input type="text" name="name" id="name" placeholder="Nume și prenume" />
                <input type="email" name="email" id="email" placeholder="Adresa de email" />
                <input type="text" name="subject" id="subject" placeholder="Subiect" required />
                <textarea name="message" id="message" placeholder="Mesaj" rows="6" required style="resize:vertical"></textarea>
                <ul class="actions">
                  <li><input type="submit" class="primary" value="Trimite" name="submit" /></li>
                  <li><input type="reset" value="Resetează" /></li>
                </ul>
              </div>
          </form><br><br><br>
          <h5>Puteți contacta și voluntarii noștri pe care îi veți găsi pe holurile Facultății de Informatică.</h5>
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
