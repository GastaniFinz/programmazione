<html>

<head>
<style>
  body{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
</style>
</head>
<body>
  <h1>Prenotazione biglietti</h1>


  <?php

$musei= [
  ["nome" => "Palazzo Ducale",     "id"=>1],
  ["nome" => "Acquario di Genova",  "id"=>2],
  ["nome" => "Museo di Arte Contemporanea",  "id"=>3],
];

$prezzi=[
  "1" =>[
    ["tipo" => "Unico", "prezzo" =>15]
  ],
  "2" => [
    ["tipo" => "Adulto", "prezzo" => 28],
    ["tipo" => "Bambino", "prezzo" => 0],
    ["tipo" => "Senior", "prezzo" => 18],
  ],
  "3" => [
    ["tipo" => "Intero", "prezzo" => 13],
    ["tipo" => "ridotto", "prezzo" => 8],
  ]
  ];

  //?? se la variabile non è inizializzata metti stringa vuota e non dare l'errore
  $nome = $_POST ["nome"] ?? "";
  $cognome = $_POST ["cognome"] ?? "";
  $email = $_POST ["email"] ?? "";
  $museo_sel = $_POST ["museo"] ?? 0;
  $ordine = $_POST ["ordine"] ?? 0;
  
  $ordine_completato = 0;

  //echo "<script> alert($ordine) </script>";
  //echo "<script> alert($museo_sel) </script>";

  if($ordine && $museo_sel){
    //echo "<script> alert('entro') </script>";
    $tot_quant=0;
    $tot_prezzo=0;

    foreach($prezzi[$museo_sel] as $prezzo){
      $ordQuant=intval($_POST["biglietto_".$prezzo["tipo"]] ?? 0);
      $ordPrezzo = $ordQuant * $prezzo["prezzo"];
      $tot_quant += $ordQuant;
      $tot_prezzo += $ordPrezzo;
    }
    if($tot_quant==0){
      echo display_error("devi scegliere almeno un biglietto!");
    } else if($tot_quant >0 && ($nome == "" || $cognome == "" || $email=="")) {
      echo display_error("Devi compilare tutti i dati!");
    } else {
      echo display_order($tot_quant, $tot_prezzo);
      $ordine_completato = true;
  }
}
  
  if($ordine_completato == false) {
  
  ?>



<form action="esercizioForm.php" method="post">
  Nome titolare <input type="text" name="nome" value="<?php echo $nome ?>"><br>
  <!--minoire, punto di domanda e uguale per non scrivere echo -->
  Cognome titolare <input type="text" name="cognome" value="<?= $cognome ?>"><br>
  Email titolare <input type="text" name="email" value="<?php echo $email ?>"><br>
  Museo <select name="museo" id="" onchange="this.form.submit()">
<!-- <option value="0">--Scegli un museo--</option>
<option value="1" selected >Palazzo Ducale</option>
<option value="2">Acquario di genova</option>
<option value="3">museo di Arte Contemporanea</option> -->
<?php 
echo crea_options($musei, $museo_sel);
?>
</select><br>
  <?php
if ($museo_sel > 0)
echo crea_prezzi($prezzi, $museo_sel);

  ?>
  
</form>

<?php
  }  //Chiusura if $ordine_completato
?>

</body>
</html>
<?php
// FUNZIONI

//crea tag html option per scelta museo
function crea_options($elenco_musei, $museo_selezionato){
  $output ='<option value="0">--Scegli un museo--</option>\n';
  foreach($elenco_musei as $museo){
    $output .= '<option value="';
    $output .= $museo["id"].'"';
    if($museo["id"] == $museo_selezionato) $output .= " selected";
    $output .= '>';
    $output .= $museo["nome"];
    $output .= '</option>';
    $output .= "\n";

    //$output .= '<option value="'.$museo["id"].'">'.$museo["nome"].'</option>\n';
  } //end foreach
  return $output;
}

function crea_prezzi($elenco_prezzi, $museo_selezionato){
  $output = "<br>Scegli i biglietti da acquistare<br>";
  foreach($elenco_prezzi[$museo_selezionato] as $prezzo){
    $output .= "&nbsp;&nbsp;- ".$prezzo["tipo"];
    $output .= " (".$prezzo["prezzo"]. "€)";
    $output .= '&nbsp;<input type="number" name="biglietto_'.$prezzo["tipo"].'"><br>';
  }
  //end foreach
  $output .= "<br><br>";
  $output .= '<input type = "hidden" name="ordine" value="1">'."\n";
  $output .= '<input type="submit" value="Invia">';
  $output .= "<br><br>";
  return $output;
}

function display_error($messaggio = "Non è possibile procedere con l'ordine."){
  $output = '<p><strong>'.$messaggio.'</strong></p>';
  return $output;
}

function display_order($quant, $prezzo, $messaggio = "Il tuo ordine è stato generato con successo"){
  $output = '<p><strong>'.$messaggio.'</strong><br>';
  $output .= 'Totale '.$quant.' biglietti per '.$prezzo.' €.</p>';
  return $output;
}

?>