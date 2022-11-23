<?php
$array[] = array(); 

$array [0] [0] = 6;
$array [0] [1] = 8;
$array [1] [0] = 9;
$array [1] [1] = 1;
$array [1][2] = 44;
$array [1][3] = 11;
$array [2][0] = 99;
$array [2][1] = 1000;
$array [2][2] = 1001;
$array [2][3] = 1002;
$array [2][4] = 1003;
$array [2][5] = 1004;
$array [3][0] = 777;
$array [3][1] = 777;


for ($y=0; $y < sizeof($array); $y++) { 
for ($x=0; $x < sizeof($array[$y]); $x++) { 
    $resto = $array [$y] [$x] % 2;
    echo "resto: $resto =>";
    if($resto == 0){
        echo "pari <br>";
        } else {
            echo "dispari <br>";
        }
    }
}

$counter1 = 0;

for ($y=0; $y < sizeof($array); $y++) { 
    for ($x=0; $x < sizeof($array[$y]); $x++) { 
        $counter1++;
        
    }
    
}

echo "1) Il numero di elementi è $counter1 <br>";

$counter2 = 0;

for ($y=0; $y < sizeof($array); $y++) { 
    $counter2 = $counter2 + count($array[$y]);
    
}
echo "2) Il numero di elementi è $counter2";

$a = 15;

echo "<br>";

if ($a > 10 && ($a < 50 || $a <30) && !($a ==25)) {
    echo "indovinato";
} else {
    echo "fai schifo";
}

echo "<br>";

$array = array();

$array[0] = 17;
$array[1] = 11;
$array[2] = 49;
$array[3] = 3;
$array[4] = 10;
$array[5] = 24;
$array[6] = 1;
$array[7] = 0;


$somma1 = array_sum($array);
$somma2 = 0;

for ($y=0; $y < sizeof($array); $y++) { 
    $somma2+=$array[$y];
}

$media = $somma2 / sizeof($array);

echo "La media è $media";







?>