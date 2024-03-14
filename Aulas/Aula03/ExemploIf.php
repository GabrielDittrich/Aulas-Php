<?php
echo "<h2>Eu posso dirigir legalmente?</h2>";
?>

<form action="" method="get">
    <label>Informe o ano que você nasceu: </label>
    <Input name="ano" type="text">
    <button type="submit">Enviar</button>
</form>

<?php
$ano = $_GET['ano'];
$idade = 2024 - $ano;

echo "<p>";
echo "Ano: " . $ano;
echo "<br>Idade: " . $idade;
echo "</p>";

if ($idade > 18 && $idade < 70) {
    echo "<p>Você pode dirigir! e votar</p>";
} else if ($idade == 18) {
    echo "Ano Especial, Curta os Dezoitou!!!";
} else if ($idade >= 16 || $idade >= 70) {
    echo "<p>Você tem voto opicional!!</p>";
} else {
    echo "<p>Você não tem idade para dirigir e nem voltar seu <b>careta<b></p>";
}
?>