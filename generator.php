    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            <?php
            session_start();
            // richiamo e stampa della funzione 
            echo "<h1>Password : <br>{$_SESSION['randomN']}</h1>";
            session_destroy();
            ?>
        </h1>
        <a href="./index.php">Home</a>
    </body>
    </html>