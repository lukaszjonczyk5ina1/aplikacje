<style>
table, td, tr {
    border: 1px solid black;
}
</style>
<?php
$a="localhost";
$b="root";
$c="";
$database="5ina1";
$conn = mysqli_connect($a, $b, $c);
if(!$conn) {
    die("Connection failed: ".mysqli_connect_error()."<br>");
}
echo "Connected successfully <br>";
/*$sql="CREATE DATABASE $database";
if (mysqli_query($conn, $sql)){
    echo "Database created successfully <br>";
}else{
    echo "Error creating database: ".mysqli_error($conn)."<br>";
}*/


if (mysqli_select_db($conn, $database)){
    echo "Database $database selected <br>";
}else{
    echo "Error select database: ".mysqli_error($conn)."<br>";
}
/*$sql2 ="CREATE TABLE MyGuests (
                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            firstname VARCHAR(30) NOT NULL,
                            lastname VARCHAR(30) NOT  NULL,
                            email varchar(50),
                            reg_date TIMESTAMP DEFAULT
                                                CURRENT_TIMESTAMP ON UPDATE
                                            CURRENT_TIMESTAMP
                                            )";
if (mysqli_query($conn, $sql2)){
    echo "Table MyGuesys created successfully";
}else{
    echo "Error crating table: ".mysqli_error($conn);
}*/

/*
$sql3="INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@examle.com')";
if(mysqli_query($conn, $sql3)){
    echo "New record created successfully";
}else {
    echo "Error: ".$sql3. "<br>". mysqli_error($conn);
}

$sql4="INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@examle.com');";
$sql4 .="INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julie', 'Dooley', 'julie@examle.com');";
if (mysqli_multi_query($conn, $sql4)) {
    echo "New recrod created successfully";
}else {
    echo "Error: ".$sql4."<br>".mysqli_error($conn);
}*/

/*$sql5="SELECT id, firstname, lastname FROM myguests";
$res = mysqli_query($conn, $sql5);

if (mysqli_num_rows($res)>0){
    echo "<ul>";
    while($row=mysqli_fetch_assoc($res)){
        echo "<li>id: ".$row["id"]." - Name: ". $row["firstname"].$row["lastname"]."</li><br>";
    }echo "</ul>";
}else {
    echo "0 results";
}*/
$sql6="UPDATE MyGuests SET lastname='Doe' WHERE id=6";
if (mysqli_query($conn, $sql6)){
    echo "successfully";
}else {
    echo"Error".mysqli_error($conn);
    
}
?>