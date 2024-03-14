<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>

<body>

    <h2>Calculadora de Fahrenheit para Celcius</h2>

    <form action="" method="get">
        <label>Graus Fahrenheit: </label>
        <Input name="num" type="text">
        <Input name="num2" type="text">

        <button type="submit">Enviar</button>
    </form>

</body>

</html>

<?php
//$fahrenheit = 80.3; // Input Manual
$fahrenheit = $_GET['num'];
$celsius = 5 * ($fahrenheit - 32) / 9;

echo "<p>Você escolheu " . $fahrenheit . " ºF";
echo "<br>Equivale a: " . number_format($celsius, 1) . " ºC </p>";

echo "<h3> Funções úteis</h3>";
echo "<p>";
echo "<br> Abs - Módulo: " . abs($fahrenheit); // | -4| |4| = 4 
echo "<br> Potencia: " . pow($fahrenheit, 2);   //($fahrenheit ** 2);
echo "<br> Raiz Quadrada: " .  sqrt($fahrenheit);
echo "</p>";

$numero = 5.6;
echo "<p>";
echo "<br>Arredondar Normal: " . round($numero);
echo "<br> Arredondar para Baixo: " . floor($numero);
echo "<br> Arredondar para Cima: " . ceil($numero);
echo "<br> Parte inteira: " . intval($numero);
echo "<p>";

echo "<h3> Mini Matematica</h3>";
$a = 4;
$b = 5;


$c = $a + $b;
$c += 5;

$b = $b - 4;
$b -= 4;

$a = $a - $b;
$a -= $b;

$a = $a + 1;
$a += 1;
$a++;

$b = $b - 1;
$b -= 1;
$b--;

$var = 1999;


echo "<br>";
echo "<br> Valor: " . $var++;
echo "<br> Outro Valor: " . $var;


$var = "agua";
$$var = "rob";
$ $$var = "janela";
$ $ $$var = "cobertor";
$ $ $ $$var = "90f";

echo "<br>";
echo "<br>" . $var;
echo "<br>" . $agua;
echo "<br>" . $rob;
echo "<br>" . $cobertor;