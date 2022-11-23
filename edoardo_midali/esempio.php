<?php

$nome = $_POST ['nome'];

function saluta(){
    $nome = 'Orazio';
    echo $nome;
    define('INDIRIZZO', 'Pazza Roma');
}

saluta();
echo $nome;


const ADRESS = 'Viale Genova';

echo INDIRIZZO;
echo ADRESS;


?>