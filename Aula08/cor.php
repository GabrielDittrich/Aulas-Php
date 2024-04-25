<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<?php

/* $cor = isset($_GET['cor']) ? $_GET['cor'] : "red"; */

$cor = $_GET['cor'] ?? "azul";

$nome = $_GET['nome'] ?? " "
?>

<body style="background-color: <?= $cor /* $_GET['cor']; */ ?>">

    <h1>Selecionar Cor</h1>

    <form method="get">
        <label for="cor">"Escolha a cor:"</label>
        <input type="color" id="cor" name="cor"><br><br>
        <input type="text" id="cor" name="nome" placeholder="<?php $nome ?>">
        <input type="submit" value="Selecionar"><br><br>
    </form>
    <?php

    echo "oi - " . $nome;

    ?>
</body>

</html>