<?php

/* - è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */
require __DIR__ . '/class.php';

// aggiunti nuovi film
$movies = [
    new Movie('Lupin','FR','descrizione film',8),
    new Movie('Ritorno al futuro','EN','descrizione film',7),
    new Movie('YesMan','EN','descrizione film',6),
    new Movie('Hitman','JP','descrizione film',9),
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-PHP</title>
    <link rel="stylesheet" href="./app.css">
</head>

<body>

    <h1>Movies</h1>

    <div class="movies">
    
            <?php

                foreach ($movies as $movie) : ?>
                    <div class="movie">
                        <h3>Titolo: <?=$movie->title?></h3>
                        <h4>Lingua: <?=$movie->language?> </h4>
                        <p>Descrizione: <?=$movie->desc?></p>
                        <h4>Voto: <?=$movie->rate?></h4>
                    </div>
                    
                <?php endforeach;

            ?>
        
    </div>

</body>
</html>