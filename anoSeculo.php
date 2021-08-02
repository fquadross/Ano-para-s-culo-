<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Século</title>
</head>
<body>
    <div class="container">
        <h3>Insira o ano para ver a qual século ele pertence</h3>
        <form action="anoSeculo.php" method="POST">
           <label for="ano">Ano:</label><br>
           <input type="number" id="ano" name="ano"><br><br>
           <input type="submit" value="Enviar">
        </form>
    </div>

<?php

if(isset($_POST['ano'])){
$ano=(int)$_POST['ano'];

function getCentury($ano) 
{
    return ceil($ano / 100);
}

echo "<br><br>Ano: $ano<br>Século: ".getCentury($ano);}

     