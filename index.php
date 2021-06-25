<?php

/* - è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà */
class Movie
{
    public $title;
    public $language;
    public $desc;
    public $rate;
    public $pref;

    /**
     * Movie constructor
     * 
     * @param string $_title titolo del film
     * @param string $_lenguage lingua del film
     * @param string $_desc descrizione del film
     * @param int $_rate voto medio
     * @param bool $_pref di base falso indica se film è preferito o meno
     */
    public function __construct(string $_title, string $_language, string $_desc, int $_rate, bool $_pref = false) {
        $this->title = $_title;
        $this->language = $_language;
        $this->desc = $_desc;
        $this->rate = $_rate;
        $this->pref = $_pref;
    }

    public function getPref()
    {
        return $this->pref;
    }

    // quando viene invocata questa funzione devo passare un valore set sta per settare un valore
    public function setPref(bool $_pref)
    {
        $this->pref = $_pref;
    }
}
$movie_1 = new Movie('ritorno al futuro', 'it', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum nihil amet ex corrupti id deleniti obcaecati, dicta natus nemo ea est quaerat doloribus facilis! Fugit illo voluptates harum sequi illum?', 8.7); 
$movie_2 = new Movie('lupin', 'fr', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum nihil amet ex corrupti id deleniti obcaecati, dicta natus nemo ea est quaerat doloribus facilis! Fugit illo voluptates harum sequi illum?', 9);


$movie_1->setPref(true);
var_dump($movie_1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-PHP</title>
</head>
<body>
    <h1>Movies</h1>
    <div class="movies">
        <div class="movie">
            <h2>Titolo: <?=$movie_1->title?></h2>
            <p>Trama: <?=$movie_1->desc?></p>
            <h3>Voto: <?=$movie_1->rate?></h3>
        </div>
        <div class="movie">
            <h2>Titolo: <?=$movie_2->title?></h2>
            <p>Trama: <?=$movie_2->desc?></p>
            <h3>Voto: <?=$movie_2->rate?></h3>
        </div>
    </div>
</body>
</html>