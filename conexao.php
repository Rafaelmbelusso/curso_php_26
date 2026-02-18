<?php

$conexao = mysqli_connect("localhost", "aluno", "1234", "curso_php_26");


if (!$conexao){
    echo "Error: Fala ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}