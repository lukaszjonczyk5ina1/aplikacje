<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formularze.php" method="POST">
    Name:<input type="text" name="imie"><br>
    Lastname:<input type="text" name="nazwisko"><br>
    
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTMl</label><br>
        <input type="radio" id="css"  name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript"  name="fav_language" value="Javascript">
        <label for="javascript">Javascript</label><br>
        <input type="submit">
</form>
<?php if(isset($_POST["nazwisko"])) wyslij(); ?>
<form action="formularze.php" method="POST">
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="html">I have a bike</label><br>
        <input type="checkbox" id="vehicle2"  name="vehicle2" value="Car">
        <label for="css">I have a car</label><br>
        <input type="checkbox" id="vehicle3"  name="vehicle3" value="Plane">
        <label for="javascript">I have a Plane</label><br>
        <input type="submit">
</form>
    <?php if(isset($_POST["vehicle1"]) || isset($_POST["vehicle2"]) || isset($_POST["vehicle3"]) ) wyslij2(); ?>
</form>
</body>
</html>
<?php
function wyslij(){
    $conn = mysqli_connect("localhost", "root", "", "5ina1");
    $imie=$_POST["imie"];
    $nazwisko=$_POST["nazwisko"];
    $fav_language=$_POST["fav_language"];
    $sql = "INSERT INTO MyGuests (firstname, lastname, email, fav_language) values ('$imie', '$nazwisko', 'jankowalski@gmail.com', '$fav_language')";
    $res = mysqli_query($conn, $sql);
    mysqli_close($conn);
}

function wyslij2(){
    $conn = mysqli_connect("localhost", "root", "", "5ina1");
    if (isset($_POST["vehicle1"])) {
        $vehicle1=$_POST["vehicle1"];
    }
    if (isset($_POST["vehicle2"])) {
        $vehicle2=$_POST["vehicle2"];
    }
    if (isset($_POST["vehicle3"])) {
        $vehicle3=$_POST["vehicle3"];
    }
    $sql = "INSERT INTO myguests (vehicle1, vehicle2, vehicle3) VALUES ('$vehicle1', '$vehicle2', '$vehicle3')";
    $res=mysqli_query($conn, $sql);
    echo "pierwszy checkbox: $vehicle1 <br> drugi chceckbox: $vehicle2 <br> trzeci chceckbox: $vehicle3";
    mysqli_close($conn);
}
?>