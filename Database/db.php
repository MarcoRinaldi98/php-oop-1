<?php
    //definisco la lista dei generi
    $genereFantascienza = new Genre('Fantascienza');
    $genereAvventura = new Genre('Avventura');
    $genereAzione = new Genre('Azione');
    $genereComico = new Genre('Comico');
    $genereHorror = new Genre('Horror');
    $genereDrammatico = new Genre('Drammatico');
    $genereSentimentale = new Genre('Sentimentale');


    //inserisco i dati nei vari film
    $starWars = new Movie('Star Wars', 'img/starwars.jpg', 120, 1999, [$genereFantascienza, $genereAvventura]);

    $matrix = new Movie('Matrix', 'img/matrix.jpg', 136, 1999, [$genereFantascienza, $genereAzione]);

    $fantozzi = new Movie('Fantozzi', 'img/fantozzi.jpg', 120, 1975, [$genereComico]);

    $scream = new Movie('Scream', 'img/scream.jpg', 160, 1998, [$genereHorror]);

    $titanic = new Movie('Titanic', 'img/titanic.jpg', 194, 1997, [$genereDrammatico, $genereSentimentale]);

?>