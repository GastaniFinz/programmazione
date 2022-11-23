<?php 

$servername = "192.168.100.163"; //nome o ip del db
$username = "javamobile"; //username per accesso db
$password = "luglio2022"; //password per accesso db
$dbname = "occhioalprezzo"; //nome del db a cui voglio collegarmi
$table = "prodotto"; //nome tabella del db a cui voglio accedere

//Creare connessione
$link = mysqli_connect($servername, $username, $password, $dbname);

//Controllo connessione
if(!$link){
    die("connessione non riuscita");
}

//Download dati da DB
$sql = "SELECT * FROM $table";
$result = mysqli_query($link, $sql);




?>