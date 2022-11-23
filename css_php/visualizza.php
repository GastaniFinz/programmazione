<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biglietteria</title>
    //creo un link con il file stileform.css per variare lo stile in css
    <link rel="stylesheet" href="../CSS e PHP/stileform.css">
</head>
<body>

<h1>Prenotazione Biglietti</h1>
//inizio form
<form action="finalizza.php" method="post" class="form">
  Nome titolare <input type="text" name="nome"><br>
  <!--minore, punto di domanda e uguale per non scrivere echo -->
  Cognome titolare <input type="text" name="cognome"><br>
  Email titolare <input type="text" name="email"><br>
<select name="museo" >
<option value="0">Scegli un museo</option>

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
    die ("Connection failed: "); //connessione fallita
}
//connessione andata a buon fine
$sql = "SELECT * FROM $table"; //prendo informazioni dal database
$result = mysqli_query ($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  echo '<option value= "' . $row["id"] .'">' . $row["nome"] . "</option> \n";
}

//array con scelta musei per il menù a tendina
$musei= [
    ["nome" => "Palazzo Ducale",     "id"=>1],
    ["nome" => "Acquario di Genova",  "id"=>2],
    ["nome" => "Museo di Arte Contemporanea",  "id"=>3],
  ];

  //cicla in $museo per restituire i vari musei nel menù a tendina
foreach ($musei as $museo) {
    #<option value ="1"> Nome museo</option>
    echo '<option value="' . $museo["id"] . '">' . $museo["nome"] . "</option> \n";
}

?>

        </select><br> //select ti permette di inserire le opzioni all'interno di un menù a tendina
        Prezzo biglietti <input type="text" name="prezzo"><br>
        Numero di biglietti <input type="text" name="quantità"><br>
        <input type="submit"> //sumbit corrisponde al bottone invia in un form
    </form>
  //fine form
</body>
</html>


