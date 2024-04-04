<!--MINI FORMULARIO PARA CONSEGUIR DAR INPUT-->

<form action="" method="GET">
    <label for="num">Digite um numero:</label>
    <input name="num" id="num" type="text">

    <button type="submit">Enviar</button>

    <!-- Exercicio 5
    <h2>Exercicio 5</h2>;
    <p>Escreva quantos metros você quer transformar em centimetros: </p>
    <input type="num">
    -->
</form>
<?php
//PARTE DO FORMULARIO QUE É DO PHP
$num = $_GET['num'];
echo "Numero digitado: " . $num;

//Exercicio número 1
echo "<h1> Exercicio número 1 </h1>";

echo "Me informe um número: ";

$numero = 20;

echo "<br>O número informado é: " . $numero;

//Exercicio numero 2

echo "<h2> Exercicio numero 2</h2>";
echo "<br>Informe o raio de um círculo: ";

$raio = 5;
$perimetro = 2;

echo "Perimetro: " . $perimetro;
echo "<br>Raio: " . $raio;

//Exercicio numero 3

echo "<h2>Exercicio número 2</h2>";
echo "Informe 2 números: ";

$n1 = 9;
$n2 = 7;
$soma = 0;

$soma = $n1 + $n2;

echo "<br> A soma de: " . $n1 . " + " . $n2 . " é:" . $soma;

//Exercicio numero 4
echo "<h2> Exercicio número 4</h2>";
echo "Informe 3 notas de um aluno: ";
$nota1 = 6;
$nota2 = 6;
$nota3 = 6;

$media = $nota1 + $nota1 + $nota3;
$media = $media / 3;

echo "<br>A média do aluno é: " . $media;



//TESTE INPUT
echo "<h2>Teste do input</h2>";
echo "<br>Informe 1 número: ";
$num_informado = $_GET['num'];

echo "<br>O número informado é: " . $num_informado;

// Exercicio 5