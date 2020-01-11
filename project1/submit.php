<?php
$x=$_POST['email'];
$y=$_POST['username'];
$z=$_POST['password'];
$w=$_POST['password-repeat'];
$username="root";
$password="";
$dbname="db1";

$conn= new mysqli ($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected succesfully. <br>";
$sql = "INSERT INTO `user` (`mail`, `name`, `pass`, `rpass`) VALUES ('$x', '$y', '$z', '$w')";

if ($conn->query($sql) === TRUE) {
    echo "You have been registered successfully. <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


<html>
    <link rel="stylesheet" href="treci.css">
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
    <title>Registred succesfully</title>
    <br>
    <br>
    <br>
    <a href="index.html">Click here</a>
</html>