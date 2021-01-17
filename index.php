<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Oop</title>
    </head>
    <body>

        <div id="container">

            <?php

                // Definire la classe Magazzino e la classe Prodotto nel seguente modo:
                // classe magazzini con attributi nome, location e prodotti contenuti
                class Magazzino {
                    public $nome;
                    public $location;
                    public $prodotti = [];

                    // costruttore con solo nome e location obbligatori
                    function __construct($nome, $location) {
                        $this -> nome = $nome;
                        $this -> location = $location;
                    }
                }

                // classe prodotti con attributi per nome, peso e prezzo
                class Prodotto {
                    public $nome;
                    public $peso;
                    public $prezzo;
                }

                // Generare alcune istanze di ogni classe
                $magazzinoC = new Magazzino("Carrozzeria", "Catania");
                $magazzinoM = new Magazzino("Meccanica", "Belpasso");
                $magazzinoA = new Magazzino("Accessori", "Misterbianco");

                $prodotto2 = new Prodotto();
                $prodotto2 -> nome = "paraurti posteriore";
                $prodotto2 -> peso = "17 kg";
                $prodotto2 -> prezzo = "60";

                $prodotto3 = new Prodotto();
                $prodotto3 -> nome = "iniettore";
                $prodotto3 -> peso = "5 kg";
                $prodotto3 -> prezzo = "100";

                $prodotto4 = new Prodotto();
                $prodotto4 -> nome = "tergicristallo";
                $prodotto4 -> peso = "1 kg";
                $prodotto4 -> prezzo = "20";

                $magazzinoA -> $prodotti[] = $prodotto4;
                $magazzinoC -> $prodotti[] = $prodotto2;
                $magazzinoM -> $prodotti[] = $prodotto3;

                var_dump($magazzinoC);
                var_dump($magazzinoA);
                var_dump($magazzinoM);

            ?>



        </div>

    </body>
</html>


