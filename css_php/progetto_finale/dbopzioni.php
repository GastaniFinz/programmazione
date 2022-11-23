<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progetto_finale";
$biglietti = "biglietti";

// creazione connessione
$conn = mysqli_connect($servername, $username, $password, $dbname);
// controllo connessione
if (!$conn) {
    die("Connection failed: ");
}

$sql = "SELECT * FROM $biglietti";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo  '<option value="' .  $row["id"] . '">' . $row["descrizione"] . "&nbsp" . "€" . $row["prezzo"] . "</option>";
}
?>