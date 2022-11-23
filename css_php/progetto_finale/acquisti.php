<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Acquisti</title>
    <link rel="stylesheet" href="stile.css">
</head>

<body>

    <header>
        <?php
        include('navbar.php');
        ?>
    </header>

    <form action="acquisti.php" method="POST" class="styled-table"> 
        Nome <input type="text" name="nome" required> <br>
        Cognome <input type="text" name="cognome" required> <br>
        Mail <input type="text" name="mail" required> <br>
        <select name="biglietti" required>
            <?php
                include ('dbopzioni.php')
            ?>  
        </select> <br>
        Numero di biglietti <input type="number" name="numero_di_biglietti" required> <br>

    
        <input type="submit">
   
    </form>

    <?php

    if(isset($_POST["nome"])){
        //entro solo se il form è compilato
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $mail = $_POST["mail"];
        $biglietti = $_POST["biglietti"];
        $numeroDiBiglietti = $_POST["numero_di_biglietti"];
        
     
        $insert_query = "INSERT INTO `acquisti` ( `nome`, `cognome`, `mail`, `id_biglietto`, `quantita`) 
        VALUES ('$nome', '$cognome', '$mail', '$biglietti', '$numeroDiBiglietti')";
     
        $insertion_result = mysqli_query ($conn, $insert_query);
        if (!$insertion_result) {
             echo  "Siamo spiacenti, qualcosa è andato storto" ;
            } else {
                echo "Grazie, il tuo acquisto è stato elaborato";
        }

    }

 
    ?>

    <hr class="bordo">

    <table class="styled-table">
        <tr>
            <b>
                <th>ID</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Mail</th>
                <th>ID Biglietto</th>
                <th>Quantità</th>
            </b>
        </tr>

    <?php
           $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "progetto_finale";
           $table = "acquisti";
   
           // creazione connessione
           $conn = mysqli_connect($servername, $username, $password, $dbname);
           // controllo connessione
           if (!$conn) {
               die("Connection failed: ");
           }
   
           $sql = "SELECT * FROM $table";
           $result = mysqli_query($conn, $sql);
   
           while ($row = mysqli_fetch_assoc($result)) {
               echo  "<tr><td>" .  $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["cognome"] . "</td>
               <td>" .  $row["mail"] . "</td><td>" . $row["id_biglietto"] . "</td><td>" . $row["quantita"] . "</td></tr>";
           }
    ?>

</body>

</html>