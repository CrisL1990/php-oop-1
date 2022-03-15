<?php

    class movie{

        public $name;
        public $year;
        public $language;
        public $genre;
        public $cast;

        //Acquisisce il nome del film tramite l'argomento $filmName nell'istanza dell'oggetto
        public function __construct($filmName){
            $this->name =$filmName;
        }

        //Setta l'anno d'uscita del film
        public function setYear($movieYear){
            $this->year = $movieYear;
        }

        //Ritorna l'anno d'uscita del film
        public function getYear(){
            return $this->year;
        }

    };


    //Crea l'istanza dell'oggetto $avengers e imposta nome film, anno di uscita e lingua originale
    $avengers = new movie('Avengers Endgame');
    echo '<h1> Movie name is: ' . $avengers -> name . '</h1>';

    $avengers -> setYear(2019);
    echo '<p> Movie year is: ' . $avengers -> getYear() . '</p>';

    $avengers -> language = 'English';
    echo '<p> Movie language is: ' . $avengers -> language . '</p>';

    $avengers -> genre = 'Action';
    echo '<p> Movie genre is: ' . $avengers -> genre . '</p>';



    echo '<br><br>';



    //Crea l'istanza dell'oggetto $spiderman e imposta nome film, anno di uscita e lingua originale
    $spiderman = new movie('Spider-Man: No Way Home');
    echo '<h1> Movie name is: ' . $spiderman -> name . '</h1>';

    $avengers -> setYear(2021);
    echo '<p> Movie year is: ' . $avengers -> getYear() . '</p>';

    $avengers -> language = 'English';
    echo '<p> Movie language is: ' . $avengers -> language . '</p>';

    $avengers -> genre = 'Action';
    echo '<p> Movie genre is: ' . $avengers -> genre . '</p>';

