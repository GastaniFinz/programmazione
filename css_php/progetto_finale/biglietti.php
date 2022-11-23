<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Biglietti</title>
    <link rel="stylesheet" href="stile.css">
</head>

<body>
    <header>
        <?php 
        
        include("navbar.php");

        ?>
    </header>
    <table class="styled-table">
        <tr>
            <b>
                <th>ID</th>
                <th>Descrizione</th>
                <th>Prezzo</th>
            </b>
        </tr>
        <!-- inserire parte dinamica di inserimento righe prese dal db -->
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "progetto_finale";
        $biglietti = "biglietti";

        // creazione connessione
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // controllo connessione
        if (!$conn) {
            die("Connection failed: ");
        }

        $sql = "SELECT * FROM $biglietti";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo  "<tr><td>" .  $row["id"] . "</td><td>" . $row["descrizione"] . "</td><td>" . $row["prezzo"] . "</td></tr>";
        }


        ?>
    </table>
</body>

</html>