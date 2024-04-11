<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>

<body>

    <h1>Resposta :3</h1>

    <?php
    /*
    // Get do nomePessoa
    $_GET["nomePessoa"];
    // Mostrando os arrays do get 
    echo print_r($_GET);
    echo "<br>";
    // Imprimindo os nome do get nomePessoa
    echo $_GET["nomePessoa"];
*/

    echo print_r($_GET);
    $nome = $_GET["nomePessoa"];
    $sobrenome = $_GET["sobrenome"];
    $idade = $_GET["idade"];

    echo "<br> Olá {$nome} {$sobrenome}.... vc tem {$idade} anos?";

    ?>
</body>

</html>