<?php

echo "<center><h1> Arrays </h1></center>";

//$comidas = ['Batata'];
$comidas = array('Batata', 'Miojo', 'Polenta');


echo print_r($comidas);
echo "<br>";

$comidas[3] = 'Arroz';
$comidas[] = 'Feijão';

echo print_r($comidas);
//echo var_dump($comidas);

$totalComidas = count($comidas);
echo "<br><br> Total de Comidas: {$totalComidas}";


echo "<br><br> Lista de compras: ";
for ($i = 0; $i < count($comidas); $i++) {
    echo "<li> Item - " . $comidas[$i];
}

//  Para cada $comida dentro do array $comidas faça:
// Comidas[$i] => $comidas

foreach ($comidas as $comida) {
    echo "<br><br> Item - " . $comida;
}