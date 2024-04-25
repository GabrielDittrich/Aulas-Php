<?php
session_start();

$_SESSION['nome'] = "joao";

echo print_r($_SESSION);

/*
$_SESSION['pessoa'] = [
    "nome" = "jose",
    "idade" = "19"
];
*/