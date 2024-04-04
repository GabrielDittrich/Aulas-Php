<form action="" method="get">
    <label> Informe o sexo da pessoa</label>
    <input name="sexo" type="text">
    <!-- <input name="num2" type="text">    EXERCICIO 1 --->
    <button type="subimit">Enviar</button>
</form>


<?php

/* EXERCICIO 1
$numero1 = $_GET['num'];
$numero2 = $_GET['num2'];

echo "Os números informados são: " . $numero1 . " e " . $numero2;
*/

$sexo = $_GET['sexo'];

if ($sexo == 'M') {
    echo " Masculino parabens";
} else if ($sexo == 'F') {
    echo "Muie sinto muito";
} else {
    echo  "Sexo Inválido!, escreva  M ou F para definir o sexo ";
}

?>