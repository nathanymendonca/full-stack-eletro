<?php

include "conexao.php";

if (isset($_POST['nome']) && isset($_POST['msg'])){
    
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];
    
    $sql = "INSERT INTO comentarios (nome, msg) values ('$nome', '$msg')";
    $result = $conect->query($sql);
//-----Fim Conexão----\\
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head> <meta charset="UTF-8"> 
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
   
<head>
        <body>
             <!--Início Menu  -->
             <header>
             <?php
      include_once("menu.php");
      ?>
          </header>
      <!--Fim do Menu-->

      <!--Início Fale Conocso - Whatsapp e E-mail  -->
            <h2>Fale conosco</h2>
            
                 <div id="Fale_conosco">
                <div id="divFormulario"> <img height="40px" src="./imagens/wta.jpg" alt="Contato Whatsapp">Telefone: (11)-99999-9999</div>

                <div id="divContatos"><img height="40px" src="./imagens/email.png" alt="Contato E-mail">Email: contato@fullstackeletro.com.br</div>
            </div>

            </div>
            <!--Fim fale conosco  -->
        
     
    
             <!--Início Fomulário de comentário  -->
             
        <form  class="comentario" method="post" action="receberdados.php"  style="width: 600px">
            Nome:<br>
            <input type="text" name="nome" style="width:500px"><br>
            Menssagem:<br>
            <input type="text" name="msg" style="width:500px"><br>

            <input type="submit" name="submit" value="Enviar" style="width:60px"><br>
        </form>
        

        <!--Fim Fomulário de comentário   -->

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


              <!--Rodapé  -->   
        <footer id="rodape"> 
          <p id="formas_pagamento">
            <b> Formas de pagamentos</b>
          </p>
          <img width="245px" src="./imagens/formas-de-pagamentos.jpg" alt="Formas de pagamento">
          <p>&copy; Recode Pro</p>
        
        </footer>

        </body>
<html>