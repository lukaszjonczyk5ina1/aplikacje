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

$wzorzec5='/\d{2}-\d{3}/';
$tekst5="poczta 34-200 Sucha Beskidzka";
if(preg_match($wzorzec5, $tekst5, $matches))
    echo "Znaleziono kod pocztowy ".$matches[0]."<br>";
else
    echo "Nie znaleziono kodu pocztowego <br>";


$wzorzec6='/([01234]?\d)+[-\.\/]+(1[0]?\d)+[-\.\/]+(\d{4})/';
$tekst6="Sucha BEskdizka, dn 04.10.2023";
if(preg_match($wzorzec6, $tekst6, $matches))
    echo "znaleziono datę ".$matches[0]."<br>";
else
    "echo nie znaleziono daty <br>";

/*([01234]?\d)-dzień -pierwsza cyfra może mieć wartość 0, 1, 2 lub 3 i jest opcjonalna. Druga cyfra jest dozwolona.
[-\.\/]-separator-repreznetuje myślnik, ukośnik odwrócony.
(1[0]?\d)-miesiąc-pierwsza cyfra może być 0 lub 1 i jest opcjonalna, druga cyfra jest dozwolona.
(\d{4})-rok-dokładnie cztery cyfry roku.*/
?>