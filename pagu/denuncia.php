<!DOCTYPE html>
<html lang="pt-br">

  <head>
	 <title> PAGU </title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/slide.css">
    </head>

  <header>
    <div class="menu">
      <a href="index.html"> LOGO </a>
      <a href="info.html"> Informações </a>
      <a href="dados.html"> Dados </a>
      <a href="denuncia.php"> Denúncie </a>
      <a href="ajuda.html"> O que fazer </a>
      <a href="nos.html"> Sobre nós </a>
    </div>   
  </header>

  <body>
   <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1/3</div>
  <img src="./img/foto10.svg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2/3</div>
  <img src="./img/foto11.svg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3/3</div>
  <img src="./img/foto12.svg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>



    <form id="form" method="POST" action="processa.php">
    <fieldset>        
    <h1> Faça sua Denúncia! </h1>
     <input type="text" name="nome" placeholder="Nome Completo" required autocomplete >
    <input type="email" name="email" placeholder="E-mail" required autocomplete>
     <textarea rows="10" name="denuncia" cols="42" required autocomplete placeholder="Denúncie"></textarea>
    <input type="submit" id="btn" value="Enviar" >
   </fieldset>
    </form>

    <footer class="rodape">
      <img src="./img/rosa.jpg">
      
      <div class="pages">
        <a href="info.html">Informações</a><br>
        <a href="dados.html">Dados</a><br>
        <a href="denuncia.php">Denúncie</a><br>
        <a href="ajuda.html">O que fazer</a><br>
        <a href="nos.html">Sobre nós</a><br>
      </div>

      <div class="redes">
        <img src="./img/face.svg">
        <img src="./img/insta.svg">
        <img src="./img/email.svg">
      </div>

      <p> © Copyright 2020 - PAGU © </br> Todos os Direitos Reservados </p> 
    </footer>

    <script src="slide.js"></script>
  </body>
  
</html>


