<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>

<body>
    <main>
        <?php

        class Studente
        {
            public $nome;
            public $cognome;
            public $voto; //SCALA IN 30SIMI
            public $orarioentrata;
            public $orariouscita;

            function __construct($var1, $var2, $var3)
            {
                $this->nome = $var1;
                $this->cognome = $var2;
                $this-> voto = $var3;


            }

            function dammiRisultato($voto_finale)
            {
                if ($voto_finale >= 18) {
                    echo "Salve " . $this->nome . " " . $this->cognome . ", hai passato l'esame con voto " . "[" . $voto_finale . "]";
                } else {
                    echo "Salve " . $this->nome . " " . $this->cognome . ", dato il voto ottenuto" . " [" . ($voto_finale) . "]" . ", non hai superato l'esame";
                }
            }

            function entrata($orEntrata)
            {
                $this-> orarioentrata = $orEntrata;
                echo "Lo studente " . $this->cognome . " è entrato alle ore " . $this -> orarioentrata;
            }

            function uscita($orUscita)
            {
                $this->orariouscita = $orUscita;
                echo "Lo studente " . $this->cognome . " è uscito alle ore " . $this -> orariouscita;

            }

            function oreDiCorso($orEntrata, $orUscita)
            {
                $this -> orarioentrata = $orEntrata;
                $this -> orariouscita = $orUscita;
                $differenza = $orUscita - $orEntrata;

                echo "Lo studente " . $this->cognome . " si è fermato in aula per " . $differenza . "ore";
            }

        }


        // Costruttore istanta oggetti di tipo studente
        $bressani = new Studente("Emanuele", "Bressani", 18);
        // $bressani -> nome = "Emanuele";
        // $bressani -> cognome = "Bressani";
        // $bressani -> voto = "14/30";

        $avanzini = new Studente("Mattia", "Avanzini", 14);
        // $avanzini -> nome = "Mattia";
        // $avanzini -> cognome = "Avanzini";
        // $avanzini -> voto = "12/30";


        print_r($bressani);
        echo "<br><br>";
        var_dump($avanzini);
        echo "<br><br>";

        // Vado a chiamare il metodo dammiRisultato
        $avanzini -> dammiRisultato(12);
        echo "<br><br>";
        $bressani -> dammiRisultato(22);
        echo "<br><br>";

        // Vado a chiamare l'entrata dello studente, che mi richiede un parametro - $orEntrata
        $bressani -> entrata(9);
        echo "<br><br>";
        //Vado a chiamare l'uscita dello studente, che mi richiede un parametro - $orUscita
        $bressani -> uscita(17);
        echo "<br><br>";
        //Vado a chiamare la media del tempo trascorso dallo studente all'interno dell'aula
        $bressani -> oreDiCorso(9, 17)


        ?>

    </main>

</body>

</html>