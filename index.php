<?php

$message= 'ciao';
$paragraph= $_GET['paragraph'];
var_dump($_GET);
echo $paragraph;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input{
            width: 300px;
        }
    </style>
</head>
<body>
    <form action="script.php" method="get">
        <input type="text" name="paragraph" placeholder="Inserisci un paragrafo" required>
        <input type="text" name="word" placeholder="Inserisci la parola da censurare" required>
        <button type="submit">Invia</button>
    </form>
    <h1><?php echo $paragraph ?></h1>
</body>
</html>