<?php
include './partials/functions.php';
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
        <button type="submit">Genera</button>
    </form>
    <h2>
        <?php
        //richiamo della funzione randomPassword
        $_SESSION['randomN'] = randomPassword($lenght);
        //controllo per randomN
        if(isset($_GET['length']) && ($_GET['length'])>=4 ){
            //OR if(!empty($_SESSION['randomN'])){
            //indirizazione post creazione password
            header('Location: generator.php');
        }
        ?> 
    </h2>
    
</body>
</html>