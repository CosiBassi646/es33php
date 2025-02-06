<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "Libreria";

try{
    $conn = mysqli_connect($host,$user,$pass,$db);
}catch(e){
    echo"Connessione chiusa";
}

?>