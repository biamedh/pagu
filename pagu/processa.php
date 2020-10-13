<?php

include_once("conexaoBD.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$denuncia = $_POST['denuncia'];

$sql = "insert into registros (nome,email,denuncia) values ('$nome','$email','$denuncia')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>
