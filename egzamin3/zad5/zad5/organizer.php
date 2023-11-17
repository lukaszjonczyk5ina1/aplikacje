<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
    <section class="baner_1"><h1>Organizer: SIERPIEŃ</section>
    <section class="baner_2">
<form action="organizer.php" method="POST">
Zapisz wydarzenie:<input type="text" name="zapisz">
<button type="submit">OK</button>
</form>
<?php
if(isset($_POST["name"])&&isset($_POST["submit"])){
$conn=mysqli_connect("localhost", "root", "", "kalendarz");
$zapisz=$_POST["zapisz"];
$sql="update zadania set wpis='$zapisz' where dataZadania like '2020-08-09'";
$res=mysqli_query($conn, $sql);
mysqli_close($conn);
}

?>
    </section>
    <section class="baner_3"><img src="logo2.png" alt="sierpień"></section>
</header>
    <main><?php skrypt1();?></main>
    <footer><p>Stronę wykonał Łukasz Jończyk</p></footer>
</body>
<?php
function skrypt1(){
$conn=mysqli_connect("localhost", "root", "", "kalendarz");
$sql2="SELECT dataZadania, wpis from zadania where miesiac like 'sierpien'";
$res2=mysqli_query($conn, $sql2);
while($row=mysqli_fetch_array($res2)){
    echo "<section class='kalendarz'><h5>$row[0]</h5><p>$row[1]</p></section>";
}
mysqli_close($conn);}

?>
</html>