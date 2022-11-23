<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio2</title>
</head>
<body>


<?php

$strl = "Questa è una lunga stringa in cui ci sono molte parole";

echo strpos ($strl, "lunga");
echo "\n";
echo strpos ($strl, "c");
echo "\n";
echo strpos ($strl, "Que");
echo "\n";
echo strpos ($strl, "pippo");
echo "\n";

echo ucwords($strl);

$parola = explode(" ", $strl);
var_dump($parola);
$parola[3] = implode(" " , $parola);
echo $strl;

// function cerca($pagliaio, $ago) {
//     if (strpos ($pagliaio, $ago) === NULL)}






exit();

echo add (1,2);
echo "\n";
echo add (1,2,3);
echo "\n";
echo sub (2,1);
echo "\n";
echo add (1, sub (2,1));
echo add_two_days ();
echo "\n";
echo time();
echo "\n";
echo strtotime("2022-07-11");

echo "<br><br><br>";

function add ($a, $b, $c=0, $d=0) {

    return $a + $b + $c + $d;
}

function add_two_days($date = "") {
    if ($date == "")   $date = date ("d,m,Y");
    $secondi = strtotime($date);
    $secondi += 60*60*24*2;
    return date ("d/m/Y" , strtotime(date("Y-m-d") . "+ 2 DAYS"));
}


// function add($a, $b) {
//     return $a + $b;
// }

function sub($a, $b) {
    return $a - $b;
}

function mult($a, $b) {
    return $a*$b;
}

function frac($a, $b) {
    return $a / $b;
}



echo 'date_default_timezone:set:' . date_default_timezone_set ("Europe/Rome");
echo "\n";
echo date("l F d/m/Y H:i:s");

?>
    
</body>
</html>

