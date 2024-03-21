<center>
    <h1> Aula 04 - For, While, DoWhilhe </h1>
</center>

<?php
echo "<h3>FOR</h3>";

for ($i = 0; $i < 6; $i++) {
    echo "<br> Meu for funciona!!! {$i}";
}
echo "<br><br>";

for ($i = 0; $i < 4; $i++) {
    echo "<br> Linha {$i} |";

    for ($j = 0; $j < 10; $j++) {
        echo "| Coluna {$j} |";
    }
}
?>
<br><br>
<h3>WHILE</h3>

<?php
$var = 5;

while ($var <= 10) {

    $var++;
    echo ' - legal - ';
}
?>
<br> <br>

<h3>DO WHILE</h3>

<?php
$a = 0;

do {
    echo "Rodando o Do Whille pela {$a} vez <br>";
    $a++;
} while ($a <= 10);

?>
<br><br>