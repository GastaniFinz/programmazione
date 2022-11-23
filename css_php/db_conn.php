<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";
$table = "musei";

// creazione connessione
$conn = mysqli_connect($servername, $username, $password, $dbname);
// controllo connessione
if (!$conn) {
    die ("Connection failed: ");
}


$id = rand(0,100);
// Inserimento di una riga su db definito dalla variabile sopra dbname, sulla tabella table
$sql ="INSERT INTO $table (id, nome, cap) VALUES ($id , 'Nome museo nr.$id' , $id+17800)";
if (mysqli_query($conn, $sql)) {
    echo "Records inserted succesfully";
}else {
    echo "ERROR: Couldn't execute";

}

// selezione di tutto quello che c'è nella tabella valorizzata dentro alla var $table
// $sql = "SELECT * FROM musei";

// $result = mysqli_query($conn, $sql);

// while ($row = mysqli_fetch_assoc($result)) {
//     echo "ID: " . $row["id"] . "- NOME:" . $row["nome"] . "CAP:" . $row["cap"] . "<br>";
// }