<?php
    // include_once __DIR__.'/movie.php';
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->


<?php

// Ripassare i primi concetti di classe e di attributi e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//     => all'interno della classe sono dichiarati degli attributi
//     => all'interno della classe è definito un costruttore
//     => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

// DICHIARAZIONE CLASSE

class Movie{

// DICHIARAZIONE ATTERIBUTI
public $title;
public $cast;
public $description;

// COSTRUTTORE
function __construct($_title,  $_cast, $_description){
    $this->title = $_title;
    $this->cast = $_cast;
    $this->description = $_description;
}

// METODO PER LA STAMPA
public function print(){
    echo 'Titolo Film: '.$this->title.'<br>';
    echo 'Cast: '.$this->cast.'<br>';
    echo 'Breve descrizione: '.$this->description.'<br><br>';
}
}

$film1 = new Movie('Titanic',
 'Leonardo di Caprio, Cate Winslet',
 'Titanic è un film del 1997 scritto, diretto, co-prodotto e co-montato da James Cameron.

 La pellicola è un colossal epico-romantico di carattere storico interpretato da Leonardo DiCaprio e Kate Winslet nei ruoli di Jack e Rose, due membri di differenti classi sociali che si innamorano durante il tragico viaggio inaugurale della durata di 4 giorni in mezzo all oceano Atlantico del RMS Titanic. È, al 2021, il terzo film con maggiori incassi nella storia del cinema dopo Avatar del 2009 (sempre diretto da Cameron), e Avengers: Endgame del 2019. '
  );

$film2= new Movie('Avenger Endgame',
 'Chris Evans, Chris Hemsworth, Robert Downery Jr',
'Avengers: Endgame è un film del 2019 diretto da Anthony e Joe Russo.

Basato sul gruppo di supereroi dei Vendicatori di Marvel Comics, il film è il seguito di Avengers: Infinity War (2018) e costituisce il ventiduesimo film del Marvel Cinematic Universe. È prodotto dai Marvel Studios ed è distribuito da Walt Disney Studios Motion Pictures. La sceneggiatura del film è stata scritta da Christopher Markus e Stephen McFeely, e la pellicola comprende un cast corale che include molti degli attori comparsi nei precedenti film del MCU. '  );

var_dump($film1);
var_dump($film2);

$film1->print();
$film2->print();