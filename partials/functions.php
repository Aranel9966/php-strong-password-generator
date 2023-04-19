<?php

function randomPassword($x) {
    // genero una stringa di lettere e numeri 
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    //genero un array vuoto
    $pass = []; 
    // prendo la lunghezza della stringa
    $alphaLength = strlen($alphabet) - 1;
    // genero un ciclo che dipenda dalla proprieta $x 
    for ($i = 0; $i < $x; $i++) {
        //creo una variabile che che con la funzione rand() camba da 0 alla lunghezza della stringa ad ogni ciclo
        $n = rand(0, $alphaLength);
        //push dentro $pass[] la lettera dell'array $alphabet[] che corrisponde alla posizione $n  
        $pass[] = $alphabet[$n];
    }
    //con la funzione implode() unisci gli elementi dell'array in una stringa
    return implode($pass);
    
};
//variabile per recuperare la lunghezza desiderata 
$lenght=$_GET["length"]??'';
