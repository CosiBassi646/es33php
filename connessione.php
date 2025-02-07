<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "Libreria";

// Creazione connessione
$conn = mysqli_connect($host, $user, $pass, $db);

// Controllo errore connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Rimuovi il commento seguente per verificare che la connessione funzioni
// echo "Connessione riuscita!";

?>
