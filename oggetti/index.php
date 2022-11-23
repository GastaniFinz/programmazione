<?php

// impongo gli oggetti
class studenti
{
    public $nome;
    public $cognome;
    public $voto;

    function __construct($var1, $var2, $var3)
    {
        $this->nome = $var1;
        $this->cognome = $var2;
        $this->voto = $var3;
    }

    function esitoEsame()
    {
        if ($this->voto == "Lode") {
            echo "Sei stato: Promosso per meriti mafiosi";
        } else {
            echo "Sei stato: Bocciato";
        }
    }
}

// impongo le istanze
$emanuele = new studenti("", "", "");
$nicholas = new studenti("", "", "");

// impongo il construct


// impongo gli attributi
$emanuele->nome = "Emanuele";
$emanuele->cognome = "Bressani";
$emanuele->voto = "Insufficiente";

$nicholas->nome = "Nicholas";
$nicholas->cognome = "Penco";
$nicholas->voto = "Error 404";

echo $emanuele->nome . "<br>";

// nuovo studente con construct

$francesco = new studenti("Francesco", "Cupido", "Lode");

echo $francesco->nome . "<br>";
var_dump($nicholas);
echo "<br>";

$francesco->esitoEsame(); 
echo "<br>";
$emanuele->esitoEsame(); 
echo "<br>";
$nicholas->esitoEsame(); 
echo "<br>";
