<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Acquisto</title>
</head>
<body>

<h1>Prenotazione biglietti</h1>    

<?php

$quantità =$_POST["quantità"];
$prezzoBiglietto= $_POST["prezzo"];
$prezzoTotale = $quantità * $prezzoBiglietto;
echo "Totale $quantità biglietti per $prezzoTotale";


?>

</body>
</html>

