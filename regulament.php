<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="img/logo-icon.png">
     <!-- BOOTSTRAP INCLUDE -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/regulament.css">
    <title>Regulament - LAN Party</title>
</head>
<body>
  <div id="main">
    <!-- Header -->
    <?php
        include("navbar.php");
    ?>
    <!-- Contents -->
    <div id="inner">
      <div class="row ">
          <div class="hero-image strong_shadow hero-text start">
              <div class="row">
                    <div class="col-md-12">
                        <header>
                            Esti pregatit sa castigi?
                        </header>
                    </div>
                    <div class="col-md-12">
                        Inaite sa te inscrii la oricare dintre competitii nu uita sa consulti regulamentul dupa care se vor desfasura fiecare joc.
                    </div>
                </div>
            </div>
      </div>
      <div class="row regulamente">
        <header>
        Regulament de ordine interioara:
        </header>
        <div>
            <ol>
                <li>
                    Jucatorii isi pot aduce periferice proprii (Casti/Mouse)
                </li>
                <li>
                    Accesul este permis studentilor de la Facultatea de informatica Iasi si a 2 studenti de echipa din afara facultatii.
                </li>
                <li>
                    Accesul in sala se face pe baza de bilet.
                </li>
                <li>
                    Studentii facultatii de informatica Iasi vor avea asupra lor carnetul de student.
                </li>
                <li>
                    Jucatorii vor pastra un limbaj corespunzator, indiferent de tensiunea situatiei.
                </li>
                <li>
                    Jucatorii vor avea grija de echipamentul utilizat.
                </li>
                <li>
                    Pentru orice problema sau nelamurire, apelati la organizatori.
                </li>
                <li>
                    Deconectarea intentionata a unui calculator in timpul meciului atrage dupa sine pierderea meciului prin forfeit.
                </li>
                <li>
                    Pentru fiecare competitie exista o fereastra de 10 minute in care echipa/participantul are timp sa se prezinte.
                </li>
                <li>
                    Ratarea ferestrei de 10 minute de la strigare are ca rezultat descalificarea
                </li>
            </ol>
        </div>
      </div>
    
    
    <!-- CAROUSEL -->
    
<div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
    <div class="carousel-indicators">   

    <!-- THUMBNAILS -->
            <img src="./media_regulament/cs.png" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
        

            <img src="./media_regulament/lol1V1.png"  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" >
        
            <img src="./media_regulament/lol5V5.png" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
    
            <img src="./media_regulament/hs.png" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3">
            
            <img src="./media_regulament/dota.png" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4">
            
            <img src="./media_regulament/metin2.png" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5">

    </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="regulamente hero-image cs">
            <header>
                3v3 CS:GO, 30 RON/echipa
            </header>
            <div>
                <ol class="center-list">
                    <li>Un turneu de tip single elimination cu meciurile best of 3.</li>
                    <li>Inainte de inceperea fiecarui meci va fi un warmup de 5 minute in modul deathmatch.</li>
                    <li>Prima runda va fi jucata pe o harta aleatorie, urmatoarele harti fiind selectate de echipa invinsa.</li>
                    <li>Runda se joaca pana la 16.</li>
                    <li>La mijlocul rundei, se face switch intre Counter-Terrorists si Terrorists.</li>
                    <li>Maxim 1 jucator din afara facultatii de informatica.</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="regulamente hero-image lol1">
                <header>
                1v1 League of Legends, 10 RON/participant
                </header>
                    <div>
                        <ol class="center-list">
                            <li>Modul de joc va fi ARAM blind pick cu banuri din lobby in chat, single elimination</li>
                            <li>3 banuri de fiecare jucator in modul urmator, fiecare va scrie pe chat cate un campion pe care vrea sa il banez pe rand.</li>
                            <li>In champion select este interzisa selectarea campionilor banati, acest lucru duce la eliminare.</li>
                            <li>Se va juca pana la 100 minioni sau primul turn sau first blood.</li>
                            <li>Warm up 5 minute inainte de inceperea propriu-zisa a competitiei.</li>
                            <li>Se poate intarzia maxim 10 minute.</li>
                        </ol>
                    </div>
            </div>
    </div>

    <div class="carousel-item">
        <div class="regulamente hero-image lol5">
                <header>
                    5v5 League of Legends, 60 RON/echipa
                </header>
                <div>
                    <ol class="center-list">
                        <li>Modul de joc 5 vs 5 tournament draft double elimination, cu finala best of 3</li>
                        <li>Fiecare echipa va fi formata din 5 jucatori.</li>
                        <li>Fiecare echipa va avea un capitan care va fi legatura dintre echipa si organizatori</li>
                        <li>Fiecare echipa are dreptul la maxim 10 minute de pauza in timpul jocului,in cazul problemelor tehnice.</li>
                        <li>In cazul in care un jucator intarzie, echipa are nevoie sa amane jocul pentru maxim 10 minute.</li>
                        <li>Warm up 5 minute inainte de inceperea propriu-zisa a competitiei.</li>
                        <li>In cazul in care nu este toata echipa, aceasta va pierde prin forfeit,ne fiind permise meciurile in handicap numeric ( ex. 4 vs 5, 3vs5 etc.)</li>
                        <li>FIECARE ECHIPA TREBUIE SA SE INSCRIE PE <a href="">PAGINA EVENTULUI</a> PENTRU A PUTEA PRIMII PREMIILE RIOT.</li>
                    </ol>
                </div>
        </div>
    </div>

    
    <div class="carousel-item">
        <div class="regulamente hero-image hs">
            <header>
            1v1 HearthStone, 10 RON/participant
            </header>
            <div>
                <ol class="center-list">
                    <li>Un turneu de tip conquest cu meciurile best of 3, finala fiind best of 5</li>
                    <li>Fiecare jucator ba avea 3 deckuri pregatite, iar finalistii 4 deckuri, fiecare pentru o clasa diferita</li>
                    <li>Odata ce o runda este castigata cu o clasa, acea clasa nu va mai putea fi folosita in meciul respectiv</li>
                    <li>La inceputul meciului ambii jucatori cad de acord asupra banarii unei clase din cele alese.</li>
                    <li>In cazul in care un jucator joaca cu o clasa banata, celalalt participant are dreptul de a alege daca se repeta runda sau daca winul se duce automat la el.</li>
                    <li>Utilizarea aplicatiilor auxiliare(i.e. deck tracker etc.), precum si a cartii Whizbang drept deck nu sunt permise(fiind penalizate cu descalificarea).</li>
                    <li>Jucatorii nu vor iesi din challengeuri decat dupa ce se termina toate rundele.</li>
                </ol>
            </div>
        </div>
    </div>

    
    <div class="carousel-item">
        <div class="regulamente hero-image dota">
            <header>
            1v1 Dota 2, 10 RON/participant
            </header>
            <div>
                <ol class="center-list">
                    <li>Un turneu de tip single elimination best of 3, cu finala bo3.</li>
                    <li>Modul de joc va fi "1v1 Solo Mid".</li>
                    <li>Primul set de rune nu se va spawna.</li>
                    <li>Se poate folosi voice-chat.</li>
                    <li>Jucatorii pot da surrender prin "gg" sau iesirea din meci.</li>
                    <li>Side towers sunt invulnerabile, iar creepi se spawneaza doar pe mid.</li>
                    <li>Runda se declara castigata cand un jucator reuseste sa faca 2 killuri sau sa distruga un turn.</li>
                    <li>Inainte de fiecare meci se acorda un warmup de 5 minute.</li>
                    <li>Ambii jucatori joaca cu acelasi erou, ales in felul urmator: prima runda se va juca Shadow Fiend, iar pentru urmatoarele doua pierzatorul rundei precedente alege eroul.</li>
                    <li>Nu se perminte jungling.</li>
                    <li>Curierii sunt valabili automat pentru ambii jucatori.   </li>
                </ol>
            </div>
        </div>
    </div>

    
    <div class="carousel-item">
        <div class="regulamente hero-image  metin">
            <header>
            1v1 Metin2, 5 RON/participant
            </header>
            <div>
                <ol class="center-list">
                    <li>Un turneu de tip single elimination.</li>
                    <li>Un meci consta din 5 runde(un duel este considerat o runda)</li>
                    <li>Singura potiune permisa este BLUE.</li>
                    <li>Itemele vor fi oferite de GM si vor avea aceleasi bonusuri.</li>
                    <li>Daca un participant se da pe liber, va primi kick.</li>
                    <li>Fiecare participant va primi automat lvl 99.</li>
                    <li>Fiecare participant va avea caracterul pe regatul Albastru.</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- 
    <div class="carousel-item">
    </div>
    -->
  </div>
  <button class="carousel-control-prev prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    <!-- Footer -->
    <?php
        include("footer.php");
    ?>
    <script src="assets/js/carousel-script.js"></script>
</body>
</html>
