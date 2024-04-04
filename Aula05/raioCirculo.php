<form action="" method="get">
    <label> Digite o raio do circulo</label>
    <input name="raio" type="text">
    <button type="subimit">Enviar</button>
</form>


<?php

$raio = $_GET['raio'];


$perimetro = 2 * M_PI * $raio;

$area = M_PI * pow($raio, 2);

echo "O número informado foi: " . $raio . "<br>";

echo "O perimetro do circulo é: " . number_format($perimetro, 2) . "<br>";
echo "A área do circulo é: " . number_format($area, 2);

?>