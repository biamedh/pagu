<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "denuncias";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if (!$conexao){
    print "Falha na conexão com o Banco de dados";
}

?>