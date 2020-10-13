<?php

session_start();

include('rodar.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();

}

$email = mysqli_real_escape_string($conec, $_POST['email']);
$senha = mysqli_real_escape_string($conec, $_POST['senha']);

$query = "select id_user, email from usuarios where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conec, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: admin.php');
    exit();
}else{
    header ('Location: index.php');
    exit();
}


?>
