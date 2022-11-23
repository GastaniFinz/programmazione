<?php
$servername = "192.168.100.163"; //nome o ip del db
$username = "javamobile"; //username per accesso db
$password = "luglio2022"; //password per accesso db
$dbname = "occhioalprezzo"; //nome del db a cui voglio collegarmi
$table = "utenti"; //nome tabella del db a cui voglio accedere

//Creare connessione
$link = mysqli_connect($servername, $username, $password, $dbname);

//Controllo connessione
if(!$link){
    die("connessione non riuscita");
}

$sql = "SELECT * FROM $table";

$res_utenti = dati_utente($sql,$link);
print_r($res_utenti);
echo "<br>";
for ($i=0; $i < sizeof($res_utenti); $i++) { 
    echo $res_utenti[$i]['nome'] . " ";
}

echo "<br>";
foreach ($res_utenti as $key => $value) {
    echo $res_utenti[$key]['nome'] . " ";
    echo $value           ['cognome'] . " ";
}

function dati_utente ($sql,$link) {
$result = mysqli_query($link,$sql);
$dati = [];
while ($raw = mysqli_fetch_assoc($result)){
$dati [] = $raw;
}
return $dati;
}














