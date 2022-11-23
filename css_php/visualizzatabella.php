<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table style="width: 100%;">
  <tr>
    <th>ID</th>
    <th>Nome Museo</th>
    <th>CAP</th>
  </tr>
  <!-- inserire parte dinamica di inserimento righe prese dal db -->
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";
$table = "musei";

// creazione connessione
$conn = mysqli_connect($servername, $username, $password, $dbname);
// controllo connessione
if (!$conn) {
    die ("Connection failed: ");
}

$sql = "SELECT * FROM $table";
$result = mysqli_query ($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  echo  "<tr><td>" .  $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["cap"] . "</td></tr>";
}


?>
 
</table>

</body>
</html>

