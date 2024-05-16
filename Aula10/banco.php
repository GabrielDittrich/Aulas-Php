<pre>
    <?php

    $banco = new mysqli("localhost:3307", "root", "", "db_gd_teste");
    //echo var_dump($banco);

    $busca = $banco->query("SELECT * FROM usuarios");

    //    echo var_dump($busca);
    echo print_r($busca);

    echo "<br><br>--------------------<br><br>";
    $obj = $busca->fetch_object();
    echo print_r($obj);


    echo "<br><br> -------------------------- <br><br>";
    while ($obj = $busca->fetch_object()) {
        echo print_r($obj);
    }


    echo "<br><br> -------------------------- <br><br>";
    $busca = $banco->query("SELECT cod, usuario, nome, senha FROM usuarios WHERE usuario = 'turek'");
    $obj = $busca->fetch_object();
    echo print_r($obj);

    echo "<br> Cod: " . $usu->cod;
    echo "<br> Usu: " . $usu->usuario;
    echo "<br> Nom: " . $usu->nome;
    echo "<br> Sen: " . $usu->senha;

    ?>

</pre>