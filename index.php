<!DOCTYPE html>
<html lang="pt-br">
<head> <meta charset="UTF-8">

      <title> Full Stack Eletro </title>
      <link rel="stylesheet" href="./CSS/estilo.css">


    
  </head>

   <body>
     <!--Início Menu  -->
     <header>
      <?php
      include_once("menu.php");
      ?>
  </header>
     <!--Fim do Menu-->


    <main><h1>
      Seja bem Vindo(a)
     </h1>
  <p>Aqui em nossa loja, programadores tem desconto  nos produtos para sua casa</p></main>
  

  
  
<main class="logincliente">
<form  class="login" style="width:500px"> 
<h2>Login</h2>
    <label for="email">E-mail</label><br>
    <input type="email" id="email" name="email2" placeholder="Digite seu e-mail" style="width:400px"><br>

    <label for="senha">Senha</label><br>
    <input type="password" id="senha" name="senha2" placeholder="Digite sua senha" style="width:400px"> <br><br>

    <input type="submit" value="Entrar" style="width:80px">
    <input type="submit" value="Cadastrar" style="width:80px">
</form>
</main>


<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>


   <!--Rodapé  -->
<footer id="rodape"> 
  <p id="formas_pagamento">
    <b> Formas de pagamentos</b>
  </p>
  <img width="245px" src="./imagens/formas-de-pagamentos.jpg" alt="Formas de pagamento">
  <p>&copy; Recode Pro</p>

</footer>
</body> 



</html>