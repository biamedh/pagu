<?php

session_start();

include('verifica.php');

include_once("conexaoBD.php");

$sql = "select * from registros order by id_registro desc";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

mysqli_close($conexao);


?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
	 <title> PAGU </title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/slide.css">
  </head>

   <body>
   <h2>Bem vindo, <?php echo $_SESSION['email'];?></h2>
  <h2> <a href="logout.php"> Sairr </a></h2>
 
<section id="texto">
     <h2 id="h"> Controle de denúncias </h2><br>
     
     <?php 

     print "<h2> $registros denúncias encontradas </h2>";

     print "<br><br>";
     

     while($exibirRegistros = mysqli_fetch_array($consulta)){
         $nome = $exibirRegistros[1];
         $email = $exibirRegistros[2];
         $denuncia = $exibirRegistros[3];
         

         print"<article>";   
         print "<input type='checkbox'><br>";
         print "$nome<br>";
         print "$email<br>";
         print "$denuncia<br><br>";

         print "</article>";
        
     }

     ?>   

     
    </section>
 


<footer class="rodape">
      <img src="./img/rosa.jpg">
           <p> © Copyright 2020 - PAGU ©  Todos os Direitos Reservados </p> 
    </footer>

    <script src="slide.js"></script>
  </body>
  
</html>