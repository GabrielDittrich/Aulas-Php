<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require_once "banco-antigo.php";


    $numTarefa = $_GET["t"] ?? null;
    //  echo $numTarefa;

    $busca = $banco->query("SELECT * FROM tarefas WHERE cod='$numTarefa'");


    $objTarefa = $busca->fetch_object();

    $tarefa = $_POST['tarefa'] ?? null;
    if (!is_null($tarefa)) {
        $banco->query("UPDATE tarefas SET tarefa='$tarefa' WHERE cod='$numTarefa'");
        header("Location: lista.php");
    }

    ?>
    <h1>Editar Tarefa: <?= $numTarefa ?></h1>

    <form action="" method="post">
        <input type="text" name="tarefa" value="<?= $objTarefa->tarefa ?>">
        <input type="submit" value="Salvar">
    </form>
</body>

</html>