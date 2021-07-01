<?php

# MOVIES
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