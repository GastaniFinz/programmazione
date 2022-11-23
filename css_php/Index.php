<?php

$NomeVariabile = "4.4";

//echo  "$float";

var_dump($NomeVariabile);

$Messi = array ("a","b","c");

var_dump($Messi);


define('Username', 'danilo@danilo.it');
define('Password' , '123456');

echo Username;
echo Password;

if($NomeVariabile >= 5) {
    echo"maggiore o uguale";
} else {
       echo "minore o uguale"; # code...
}

echo "<br>";

$variable=1;

switch ($variable) {
    case 1:
        echo "Il colore selezionato è blu";# code...
        break;

    case 2:
        echo "Il colore selezionato è giallo";

    case 3:
        echo "il colore selezionato è verde";

    case 4:
        echo "il colore selezionato è arancione";
    
    default:
        echo "Nessun colore corrispondente";

        break;
}

$x=1;

define("NUMERO_DA_SUPERARE" , 1);

$x=10;
while ($x >= NUMERO_DA_SUPERARE) {
    echo "Ciao da while $x <br>";
    $x--;
}

for ($x=10; $x >= NUMERO_DA_SUPERARE; $x--) { 
    echo "Ciao da for $x <br>";
}

$arrayMonodimansionale = array (1, 2, 3, 4, 5);
$arrayMultidimensionale = array(

'Emanuele' => 23,
'Gabriella' => 57,
'Agnese' => 23,
'Simona' => 54,
'Alessandro' => 54

);

foreach ($arrayMultidimensionale as $key => $value) {
    if ($value >= 40){
        echo "nome è $key ed età è $value <br>";
        
    }

    echo "La mia chiave è $key e il mio valore è $value <br>";
}

$a=10;
$b=5;
$risultato=0;

while ($a >= $b) {
    $a=$a-$b;
    $risultato++;
}

echo $risultato;


?>