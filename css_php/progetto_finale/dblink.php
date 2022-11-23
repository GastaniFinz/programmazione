<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progetto_finale";
$table = "biglietti";

// creazione connessione
$link = mysqli_connect($servername, $username, $password, $dbname);
// controllo connessione
if (!$link) {
    die ("Connection failed: ");
}

