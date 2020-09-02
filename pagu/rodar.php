<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'denuncias');

$conec = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('não foi possível conectar');

?>