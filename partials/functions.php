<?php
session_start();
function randomPassword($x){
    $IowercaseA1phabet = 'abcdefghijklmnopqrstuvwxyz' ;
    $uppercaseAlphabet ='ABCDEFGHIJRLMNOPQRSTUVWXYZ' ;
    $numbers ='01231456789' ;
    $specialChar ='!@#$%^&*()_-+=;:<>/?';
    // genero una stringa di lettere e numeri 
    $alphabet = $IowercaseA1phabet . $uppercaseAlphabet . $numbers . $specialChar;
    //genero un array vuoto
    $pass = "";
    //per oghi tipo inserisco almeno un carattere
    $pass .= $IowercaseA1phabet[rand(0, strlen($IowercaseA1phabet)-1)];
    $pass .= $uppercaseAlphabet[rand(0, strlen($uppercaseAlphabet)-1)];
    $pass .= $numbers[rand(0, strlen($numbers)-1)];
    $pass .= $specialChar[rand(0, strlen($specialChar)-1)];

    // prendo la lunghezza della stringa
    // $alphaLength = strlen($alphabet) - 1;

    // genero un ciclo che dipenda dalla proprieta $x 
    for ($i = 4; $i < $x; $i++) {
        //creo una variabile che che con la funzione rand() camba da 0 alla lunghezza della stringa ad ogni ciclo
        $n = $alphabet[rand(0, strlen($alphabet) - 1)];
        // OR $n = rand(0, $alphaLength);

        //push dentro $pass[] la lettera dell'array $alphabet[] che corrisponde alla posizione $n  
        // OR $pass .= $alphabet[$n];
         $pass .= $n;
    }
    $pass = str_shuffle($pass);
    // echo var_dump($alphabet);

    //con la funzione implode() unisci gli elementi dell'array in una stringa
    return $pass;
    
};
//variabile per recuperare la lunghezza desiderata 
$lenght=$_GET["length"]??'';




