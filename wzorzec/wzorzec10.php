<?php
$wzorzec='/[-\w.]+@([-A-z0-9]+\.)+[A-z]+/';
$tekst = "email@gmail.com";
if(preg_match($wzorzec, $tekst, $matches)){
    echo "znaleziono email ".$matches[0]."<br>";
}
else{
    echo "nie znaleziono emaila <br>";
}

$wzorzec2='/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst2="https://www.youtube.com/";
if(preg_match($wzorzec2, $tekst2, $matches)){
    echo "znaleziono adres ".$matches[0]."<br>";
}
else{
    echo "nie znaleziono adresu <br>";
}
// [-\w.] myślnik, dowolny znak, kropka
// +      jedno lub więcej wystąpień
// @      znak używany w adresach
// [A-z0-9] jedna litera lub cyfra
// [-A-z0-9]+ pasuje do przynajmniej jednego wystąpienia litery, cyfry lub myślinika
// \.     oznacza kropkę
// ()+    odpowiada przynajmniej jednemu wystąpieniu wzorca
?>


