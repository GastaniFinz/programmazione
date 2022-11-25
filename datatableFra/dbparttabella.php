<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>DB Tabella</title>
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    <div>
        <table class="tabella">
            <tr class="tr">
                <th>ID</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Data di Nascita</th>
                <th>Codice Fiscale</th>
                <th>Email</th>

            </tr>
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "gestionale";
                $table = "clienti";

                //Creare connessione
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                //Controllo connessione
                if (!$conn) {
                    die("connessione non riuscita");
                }

                $sql = "SELECT * FROM $table";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    $nome = $row["nome"];
                    $cognome = $row["cognome"];
                    $nascita = $row["data_nascita"];
                    $cod_fisc = $row["cod_fiscale"];
                    $email = $row["email"];

                    $output = "<tr class='tr'><td class='td'>" . $id . "</td><td class='td'>" . $nome . "</td><td class='td'>" . $cognome . "</td><td class ='td'>$nascita</td>";
                    $output .= "<td class='td'>" . $cod_fisc . "</td><td class='td'>". $email ."</td></tr>" ;

                    echo $output;
                }



                ?>

            </tr>
        </table>
    </div>

    <footer class="footerfix">
        <a href="../index.php"> <img src="../../img/backarrow.png" alt="back arrow" width="40px"> </a>

    </footer>


</body>

</html>