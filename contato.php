<?php

include "conexao.php";

if (isset($_POST['nome']) && isset($_POST['msg'])) {

    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO comentarios (nome, msg) values ('$nome', '$msg')";
    $result = $conect->query($sql);
    //-----Fim Conexão----\\

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        <div class="container container--normal">
            <div class="row">
                <div class="col-md">
                    <h2>Fale conosco</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div id="divFormulario">
                        <img height="40px" src="./imagens/wta.jpg" alt="Contato Whatsapp">Telefone:(11-99999-9999
                    </div>
                </div>
                <div class="col">
                    <div id="divContatos">
                        <img height="40px" src="./imagens/email.png" alt="Contato E-mail">Email: contato@fullstackeletro.com.br
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form class="comentario" method="post" action="receberdados.php">
                        Nome:<br>
                        <input type="text" name="nome" style="width:100%"><br>
                        Menssagem:<br>
                        <input type="text" name="msg" style="width:100%"><br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Enviar" style="width:100px"><br>
                    </form>

                </div>

            </div>

        </div>



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