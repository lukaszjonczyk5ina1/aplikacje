<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Sklep dla uczniów</title>
</head>
<body>
    
    <section class="baner"><h1>Dzisiejsze promocje naszego sklepu</h1></section>
    <div class="calosc">
    <section class="lewy"><h2>Taniej o 30%</h2>
<?php
    $conn = mysqli_connect("localhost", "root", "", "sklep2");
    $sql= "SELECT nazwa  from towary where promocja=1";
    $res = mysqli_query($conn, $sql);
    echo "<ol>";
    while ($row=mysqli_fetch_array($res))
    {
        echo "<li>".$row['nazwa']."</li>";
    }
    echo "</ol>";
    mysqli_close($conn);
?>
</section>
    <section class="srodkowy"><h2>Sprawdź cenę</h2>
    <form action="index.php" method="POST">
        <select name="wybor">
            <option>Gumka do mazania</option>
            <option>Cienkopis</option>
            <option>Pisaki 60 szt.</option>
            <option>Markery 4 szt.</option>
</select>
<input type="submit" value="Sprawdź">
</form>
<?php
     $conn = mysqli_connect("localhost", "root", "", "sklep2");
     $wybor=$_POST["wybor"];
     $sql = "SELECT cena FROM towary where nazwa like '$wybor'";
     $res = mysqli_query($conn, $sql);
     $wiersz=mysqli_fetch_row($res);
     $cena = ($wiersz[0]-($wiersz[0]*0.3));
     echo "<div class='skrypt2'>cena regularna: ".$wiersz[0]."<br>
     cena w promocji: ".$cena."</div>";
     mysqli_close($conn);
     
?>
            
</section>
    <section class="prawy"><h2>Kontakt</h2>
    <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
    <img src="promocja.png" alt="promocja"> 
</section>
</div>
    <section class="stopka"><h4>Autor strony: Łukasz Jończyk</h4></section>
</body>
</html>