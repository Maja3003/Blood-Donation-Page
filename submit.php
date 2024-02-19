<?php
$conn = mysqli_connect('localhost', 'root', '', 'php2');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$blood=$_POST['blood'];

$sql = "INSERT INTO blood (Name, Email, Phone, Blood) VALUES ('$name', '$email', '$phone', '$blood')";
$query = mysqli_query($conn, $sql);

if ($query){
    echo "Pomyslnie dodano do bazy danych";
}

mysqli_close($conn);