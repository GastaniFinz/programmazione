<?php
echo "ciao mondo";
echo "<br>";
$cicciolina = 2;
$rocco = 4;
$marylin = 6;
$risultato = $cicciolina + $rocco + $marylin;
echo "$risultato";
echo "<br>";
if ($risultato % 2 == 0){
    echo "pari!";
}else {
    echo "dispari!";
}

    echo "<br>";

    
$briatore = [
        "ciao",
        7,
        18+2,
];

echo "<br>";
$array = [
    "sasso",
    "carta",
    "forbice",
    "olocausto",
    "ruspa",
    "tanga",
];

// $contatore=0;

// while ($contatore < sizeof($array)) {
//     echo $array [$contatore] . "<br><br><br><br>";
//     $contatore = $contatore + 1;

// }

for ($contatore = 0; $contatore < sizeof($array); $contatore++) {
    echo $array[$contatore] . "<br>";
}

?>