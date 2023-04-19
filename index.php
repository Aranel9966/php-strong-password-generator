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
    
}

$lenght=$_GET["length"]??''

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Genera la tua password</h1>

    <form action="index.php" method="GET">
        <input type="number" min="4" name="length">
        <button type="submit">invia</button>
    </form>
    <h2>
        <?php echo randomPassword($lenght)?>
    </h2>
    
</body>
</html>