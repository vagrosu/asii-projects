<?php
    $nr_proiecte = 0;
    function adauga_proiect($nume, $site, $img, $culoare, $descriere)
    {
        global $nr_proiecte, $proiecte;
        $proiecte[$nr_proiecte]["nume"] = $nume;
        $proiecte[$nr_proiecte]["site"] = $site;
        $proiecte[$nr_proiecte]["descriere"] = $descriere;
        $proiecte[$nr_proiecte]["img"] = $img;
        $proiecte[$nr_proiecte]["culoare"] = $culoare;
        $nr_proiecte++;
    }
    adauga_proiect( "Craciun din inima de student", 
                    "https://caritate.asii.ro", 
                    "",
                    "",
                    "Eveniment caritabil organizat de studenţi pentru a fi alături de cei care au nevoie. Ne place sa aducem zâmbetul pe buze, să citim fericirea în ochii unui copil, să aducem spiritul sărbătorilor in sufletele tuturor."
                    
    );
    
    adauga_proiect( "Balul bobocilor FII", 
                    "https://boboci.asii.ro",
                    "",
                    "", 
                    "Pentru că, pe an ce trece, bobocii FII sunt din ce în ce mai talentați și mai frumoși, organizăm in cinstea lor Balul Bobocilor, o petrecere tematică al cărei principal punct de interes este concursul Miss/Mister Boboc."
    );


    adauga_proiect( "Olimpiada Indoor", 
                    "", 
                    "", 
                    "", 
                    ""
    );
    


    // adauga_proiect( "", 
    //                 "", 
    //                 "", 
    //                 "", 
    //                 ""
    // );

    // $proiecte[3]["nume"] = "Lan Party";
    // $proiecte[4]["nume"] = "Fii Practic";
    // $proiecte[5]["nume"] = "Olimpiada Outdoor";
    // $proiecte[6]["nume"] = "FIICode";
    // $proiecte[7]["nume"] = "G.E.T.A.";
    // $proiecte[8]["nume"] = "Ziarul de ASII";
?>  