<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$cep="01012123";
echo"cep = $cep";
$valor=5124.784;
echo "<br>Valor = $valor";//Valor = 5124.784
echo "<br>R$ ".number_format($valor,2, ",", ".");
echo "<br>R$ ".number_format($valor,0, ",", ".");
$nome = "simsenhora";
echo "<br>Nome = $nome";
echo '<br>Nome = $nome';
$cor = "#3ec19a7a";
echo "<p style = 'color:$cor'>$nome</p>";
$novo_valor = (int)$valor;
$novo_valor1 = $valor - $novo_valor;
echo "<br>Valor inteiro = $novo_valor";
echo "<br>Valor decimal = ".number_format($novo_valor1, 3);
printf("<br>valor = %.3f", $novo_valor1);
define("PI",3.1415);
echo "<br>PI = ".PI;
/*

*/

?>