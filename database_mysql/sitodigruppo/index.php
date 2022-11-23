<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Progetto</title>
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <main>
        <form action="index.php" method="POST" class ="form">

            <label for="nome">PAROLA CHIAVE:</label><br>
            <input type="text" name="chiave" placeholder="parola chiave"><br>

            <label for="cat_prodotto">Categoria/ID prodotto:</label><br>
            <input type="text" name="cat_prodotto" placeholder="categoria/id prodotto"><br>

            <input type="submit" value="invia">

        </form>


        <?php include("include/dblink.php");

        $condition= false;
        $condition2= false;
        $ricerca_cat_prodotto = $_POST["cat_prodotto"] ??"0";
        $ricerca_nome = $_POST["chiave"] ??"";
    

        if($ricerca_cat_prodotto > 0) $condition = true;
        if(strlen($ricerca_nome) > 0) $condition2 = true;

                
        if ($condition == true) {
            
            $sql2 = "SELECT prodotto.*, categoria_prodotto.* FROM `prodotto` LEFT JOIN categoria_prodotto 
            ON prodotto.cat_prodotto = categoria_prodotto.cat_prodotto WHERE categoria_prodotto.cat_prodotto LIKE '%$ricerca_cat_prodotto%' ";
  
            $result = mysqli_query($link, $sql2);
        }

        if ($condition2) {

            $sql2 = "SELECT * FROM `prodotto` WHERE nome LIKE '%$ricerca_nome%' OR descrizione LIKE '%$ricerca_nome%'";

            $result =mysqli_query($link, $sql2);
            
        }

        ?>
        <table class="tabella">
            <tr class="tr">
                <th>id prodotto</th>
                <th>cat prodotto</th>
                <th>nome</th>
                <th>descrizione</th>
                <th>link esterno</th>
            </tr>

            <?php include("include/dbtab.php")?>
            
            
            
            
        </table>

    </main>
    
</body>
</html>