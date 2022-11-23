<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Esercizio1</title>
</head>
<body>
<h1>Primo esercizio in php</h1> 

<?php

// Assegnazioni variabili

$riga1 = "Hello world!";
$riga2 = "Seconda riga";



?>

<p>Questa è la prima riga: <?php echo $riga1 ?> </p>
<p>Questa è la seconda riga: <?php echo $riga2 ?> </p>

<pre>

<?php

// var_dump($_SERVER);
// echo "\n\n";
// echo $_SERVER["REQUEST_URI"];

$a = 1;
$b ="2";
$c = 3.2;
$d = "4pippo";

if ($b > $a && $d === $a) {
    echo "Vero";
   } else {   
    echo "Falso";

}

echo "<br>";
echo "<br>";
echo "<br>";



function Grassetto($txtBold)
{
  $txtBold = "<b>" . $txtBold . "</b>";
  return $txtBold;
}

print grassetto ("Gioco a premi");

echo "<br>";
echo "<br>";
echo "<br>";



$score = 150;

if ($score > 0 && $score <= 100) {
    echo "Con $score punti hai vinto un peluche";
} elseif ($score > 100 && $score <= 200) {
    echo "Con $score punti hai vinto un pallone";
} elseif ($score > 200) {
    echo "Con $score punti hai vinto un tablet";
} else {
    echo "Spiacente non hai vinto nulla";
}

echo "<br>" . "<br>" . "<br>";


$cliente = [
    "nome" => "Giuseppe Vogliazzi",
    "Tipo" => "adulto",
    "età" => "23",
    "biglietti" => []

];

$cliente ["biglietti"] [] = [
    "luogo" => "stadio",
    "tipo" => "tribuna",
    "prezzo" => "50",

];

$cliente ["biglietti"] [] = [
    "luogo" => "stadio",
    "tipo" => "distinti",
    "prezzo" => "25",
];

$cliente ["biglietti"] [] = [
    "luogo" => "stadio",
    "tipo" => "gradinata",
    "prezzo" => "15",
];


print_r($cliente);

echo "<br><br>" . "<br>";
echo "utente:" . $cliente ["nome"];
echo "<br><br>" . "<br>";
echo "biglietto:" . $cliente ["biglietti"] [0] ["luogo"];

$portafogli = 15;
echo "<br><br><br>";

foreach ($cliente["biglietti"] as $ticket) {
    if ($ticket["prezzo"] <= $portafogli) {
        echo "Puoi acquistare: " . $ticket["tipo"];
    }

    
}

echo "<br><br>" . "<br>";

foreach ($ticket as $key => $value) {
    echo "$key = $value,";
}


for ($i=0; $i < count($cliente["biglietti"]); $i++) { 
    echo "biglietto:" . ($i+1) . $cliente["biglietti"][$i]["luogo"] . "\n";   
}
echo "i è $i\n";


// echo "\n\n\n";
// echo "ciclo WHILE\n";
// echo "cliente;" . $cliente["nome"] . "\n";

// $nr_biglietti = count($cliente["biglietti"]);

// echo "Ha $nr_biglietti biglietti\n";

// $i=0;
// while ($i <= $nr_biglietti) {
//     echo "biglietto n. " . ($i+1) . ":" . $cliente["biglietti"][$i]["luogo"] . "\n";

//     $i++;
// }
// echo "i alla fine è $i\n";





?>

</pre>


</body>
</html>