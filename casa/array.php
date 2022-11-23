<?php

$frutti = array('banana' , 'pesca' , 'lampone');
$frutti2 = ['banana' , 'pesca' , 'lampone'];

print_r($frutti);

echo "<br>";
echo "Il mio frutto preferito è" . "&nbsp" . $frutti[2];

$annoDiNascita = [
'Simone' => '1986' ,
'Gabriele' => '1991' ,
'Giuseppe' => '1992' ,
'Renato' => '1988'
];

echo '<br>';
echo "L'anno di nascita di Gabriele è" . "&nbsp" . $annoDiNascita['Gabriele'];

echo "<br>";
print_r($annoDiNascita);

echo '<br>';
$partecipanti= [
'Eminem' => [
    'anno' => '1972' ,
    'sesso' => 'M' ,
    'email' => 'slimshady@gmail.com'
] ,
'Dr_Dre' => [
    'anno' => '1965' ,
    'sesso' => 'M' ,
    'email' => 'doctor@gmail.com' ,
] ,
'Royce_Da_5.9' => [
    'anno' => '1977' ,
    'sesso' => 'M' ,
    'email' => 'fastlane@gmail.com'
] ,
];

print_r($partecipanti);
echo '<br>';
echo "La mail di Eminem è" . '&nbsp' . $partecipanti['Eminem']['email'];

$partecipanti ['Dr_Dre'] ['email'] = 'eminemnigga@icloud.com';
print_r($partecipanti);

$partecipanti ['Tupac'] = [
    'anno' => '1971' , 
    'sesso' => 'M' , 
    'email' => 'lasvegas@gmail.com'
];

echo '<br>';
print_r($partecipanti);





