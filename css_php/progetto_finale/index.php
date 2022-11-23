<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="stile.css">
</head>

<body>
    <header>
        <?php
        include('navbar.php');
        ?>
    </header>
    <main>
        <b>
            <h1 class="titolo">
                Benvenuto nella biglietteria!
            </h1>
        </b>
        <hr class="bordo">
        <div class="contenitore">
            <div class="immagini">
                <!-- Div Foto + Testo -->
                <div>
                    <img src="acquario_di_genova.jpg" alt="Qualcosa è andato storto!" width="500px">
                </div>

                <div>
                    <p class="descrizione">Acquario di Genova</p>
                </div>
            </div>
            <div class="immagini">
                <div>
                    <img src="mostra_del_cinema.jpg" alt="Qualcosa è andato storto!" width="500px">
                </div>

                <div>
                    <p class="descrizione">Museo del cinema</p>
                </div>
            </div>
            <div class="immagini">
                <div>
                    <img src="museo.webp" alt="Qualcosa è andato storto!" width="500px">
                </div>

                <div>
                    <p class="descrizione">Museo di storia naturale</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>