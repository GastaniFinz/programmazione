<?php
//var_dump($_POST);

//echo "Ciao" . "&nbsp" . $_POST["lname"] . "" . "&nbsp" . $_POST ["fname"] . ", sei appena stato hackerato!"

//$name = $_POST["fname"];
//$nameUpper = strtoupper($name);

//echo "Ciao" . "&nbsp" .  $nameUpper . " " . $_POST["lname"];



// foreach ($_POST as $key => $value) {
//     echo "$key : $value <br>";
// }

if ($_POST["tipoform"]==1) {
    echo "Grazie" . "&nbsp" .  "$_POST[fname]" . "&nbsp" .  "$_POST[lname]" . "&nbsp" .  "per aver effettuato la registrazione";

   } else {
    echo "Acquisto effettuato correttamente con la carta numero" . "&nbsp" .  "$_POST[credit]";
    
}

?>