<?php
$wzorzec = '/być/';
$tekst = "być albo nie być";
if(preg_match($wzorzec, $tekst))
    echo "znaleziono wzorzec<br>";
else
    echo "nie znaleziono wzorca";
echo  "znaleziono: ".preg_match_all($wzorzec, $tekst)."<br>";


$wzorzec2 = '/\d/';
$tekst2="mam 4 zeszty'";
if(preg_match($wzorzec2, $tekst2))
    echo "znaleziono cyfrę <br>";
else 
    "nie znaleziono cyfry <br>";

$wzorzec3 = '/\d{5}/';
$tekst3="telefon 564324453";
if(preg_match($wzorzec3, $tekst3))
    echo "znaleziono liczbę <br>";
else
    "nie znaleziono liczby <br>";

$wzorzec4='/\S*\.gif/i';
// i oznacza ignorowanie wielkości liter
$tekst4 = "w pliku obrazek.gif jest ikona";
if(preg_match($wzorzec4, $tekst4))
    echo "znaleziono obrazek <br>";
else
    echo "nie znaleziono obrazka <br>";
?>