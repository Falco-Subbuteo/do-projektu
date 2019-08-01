<?php
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION['questions'][0][0] = array(
    "question" => "Jaka część mowy odpowiada na pytanie: kto? co?",
    "answer" => array(
        "rzeczownik","przymiotnik","zaimek","czasownik",
    ),
    "correctAnswer" => 0,
    "guaranteed" => true
);
$_SESSION['questions'][0][1] = array(
    "question" => "Wynikiem podniesienia liczby 4 do kwadratu jest:",
    "answer" => array(
        "16","8","40","44"
    ),
    "correctAnswer" => 0,
    "guaranteed" => true
);
$_SESSION['questions'][1][0] = array(
    "question" => "Drugim największym miastem Polski pod względem ilości mieszkańców jest:",
    "answer" => array(
        "Kraków","Warszawa","Łódź","Lublin",
    ),
    "correctAnswer" => 0,
    "guaranteed" => true
);
$_SESSION['questions'][1][1] = array(
    "question" => "Najdłuższą rzeką Polski jest?",
    "answer" => array(
        "Noteć","Ren","Odra","Wisła",
    ),
    "correctAnswer" => 3,
    "guaranteed" => true
);
$_SESSION['questions'][2][0] = array(
    "question" => "W herbie Warszawy widnieje?",
    "answer" => array(
        "Orzeł","Ryba","Syrena","Okręt",
    ),
    "correctAnswer" => 2,
    "guaranteed" => false
);
$_SESSION['questions'][2][1] = array(
    "question" => "\"Klocek\" to slangowe określenie jakiej ilości pieniędzy?",
    "answer" => array(
        "Stu zlotych","Tysiąca złotych","Dziesięciu tysięcy złotych","Stu tysiecy złotych",
    ),
    "correctAnswer" => 1,
    "guaranteed" => false
);
$_SESSION['questions'][3][0] = array(
    "question" => "Co nie jest nazwą stylu pływackiego?",
    "answer" => array(
        "Piesek","Delfin","Kraul","Rekin",
    ),
    "correctAnswer" => 3,
    "guaranteed" => false
);
$_SESSION['questions'][3][1] = array(
    "question" => "Kto według przysłowia ma łeb obdarty?",
    "answer" => array(
        "Ten, kto pod kimś kopie dołki.", "Ten, kto gra w karty.","Ten, kto jest krótko ostrzyżony.","Ten, kto opowiada głupie żarty",
    ),
    "correctAnswer" => 1,
    "guaranteed" => false
);
$_SESSION['questions'][4][0] = array(
    "question" => "Orbity planet mają kształt:",
    "answer" => array(
        "Elipsy","Okręgu","Kuli","Nieregularnej krzywej",
    ),
    "correctAnswer" => 0,
    "guaranteed" => false
);
$_SESSION['questions'][4][1] = array(
    "question" => "Kto jest obecnym prezydentem Warszawy",
    "answer" => array(
        "Hanna Gronkiewicz-Waltz","Patryk Jaki","Rafał Trzaskowski","Jarosław Kaczyński",
    ),
    "correctAnswer" => 2,
    "guaranteed" => false
);
$_SESSION['questions'][5][0] = array(
    "question" => "Która z galaktyk jest najbliższą do Drogi Mlecznej?",
    "answer" => array(
        "Galaktyka Trójkąta","Galaktyka Andromedy","Galaktyka Sombrero","Galaktyka Cygaro",
    ),
    "correctAnswer" => 1,
    "guaranteed" => false
);
$_SESSION['questions'][5][1] = array(
    "question" => "W którym roku miało miejsce pierwsze lądowanie na Księżycu?",
    "answer" => array(
        "1969","1957","1968","1972",
    ),
    "correctAnswer" => 0,
    "guaranteed" => false
);
$_SESSION['questions'][6][0] = array(
    "question" => "Która z tych małp jest największa?",
    "answer" => array(
        "Bonobo","Szympans","Orangutan","Goryl",
    ),
    "correctAnswer" => 3,
    "guaranteed" => true
);
$_SESSION['questions'][6][1] = array(
    "question" => "Kogo uratowała Calineczka?",
    "answer" => array(
        "Ślimaka","Psa","Jaskółkę","Żabę",
    ),
    "correctAnswer" => 2,
    "guaranteed" => true
);
$_SESSION['questions'][7][0] = array(
    "question" => "Produktem syntezy dwutlenku siarki i wody jest:",
    "answer" => array(
        "Kwas siarkawy","Kwas siarkowy (VI)","Kwas siarkowy (IV)","Kwas solny",
    ),
    "correctAnswer" => 1,
    "guaranteed" => false
);
$_SESSION['questions'][7][1] = array(
    "question" => "Który z wymienionych języków nie jest językiem indoeuropejskim?",
    "answer" => array(
        "Polski","Rumuńaki","Węgierski","Hindi",
    ),
    "correctAnswer" => 2,
    "guaranteed" => false
);
$_SESSION['questions'][8][0] = array(
    "question" => "Do ilu punktów liczy się set w tenisie stołowym?",
    "answer" => array(
        "Do ilu punktów liczy się set w tenisie stołowym?",
    ),
    "correctAnswer" => 2,
    "guaranteed" => false
);
$_SESSION['questions'][8][1] = array(
    "question" => "Który numer nosiła misja Apollo, która jako pierwsza wylądowałą na Księżycu?",
    "answer" => array(
        "8","11","12","14",
    ),
    "correctAnswer" => 1,
    "guaranteed" => false
);
$_SESSION['questions'][9][0] = array(
    "question" => "Która z tych substancji została zakazana w Polsce najpóźniej?",
    "answer" => array(
        "Amfetamina","Mefedron","Klefedron","Marihuana",
    ),
    "correctAnswer" => 2,
    "guaranteed" => false
);
$_SESSION['questions'][9][1] = array(
    "question" => "Która z wymienionych planet wykonuje ruch obrotowy w przeciwnym kierunku niż większość planet Układu Słonecznego?",
    "answer" => array(
        "Wenus","Mars","Jowisz","Neptun",
    ),
    "correctAnswer" => 0,
    "guaranteed" => false
);
$_SESSION['questions'][10][0] = array(
    "question" => "Który pierwiastek nie należy do grupy pierwiastków ziem rzadkich?",
    "answer" => array(
        "Lutet","Holm","Glin","Samar",
    ),
    "correctAnswer" => 2,
    "guaranteed" => false
);
$_SESSION['questions'][10][1] = array(
    "question" => "\"Laniakea\" to nazwa:",
    "answer" => array(
        "Galaktyki", "Egzoplanety","Gwiazdy","Supergromady galaktyk",
    ),
    "correctAnswer" => 3,
    "guaranteed" => false
);
$_SESSION['questions'][11][0] = array(
    "question" => "Która tajemnica różańcowa nie jest Tajemnicą Światła?",
    "answer" => array(
        "Narodzenie Pana Jezusa","Chrzest Pana Jezusa w Jordanie","Głoszenie Królestwa Bożego i wzywanie do nawrócenia","Objawienie na weselu w Kanie Galilejskiej",
    ),
    "correctAnswer" => 0,
    "guaranteed" => false
);
$_SESSION['questions'][11][1] = array(
    "question" => "Który naukowiec nie brał udziału w projekcie Manhattan?",
    "answer" => array(
        "Niels Bohr","Max Planck","Enrico Fermi","Erwin Schroedinger"
    ),
    "correctAnswer" => 1,
    "guaranteed" => false
);

function getQuestion($questionIndex)
{
    $randomQuestionIndex = mt_rand(0, sizeof($_SESSION['questions'][$questionIndex]) - 1);
    return $_SESSION['questions'][$questionIndex][$randomQuestionIndex];
}
