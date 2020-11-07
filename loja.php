<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Nossas lojas - Full Stack Eletro</title>
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


        <div class="container container--normal">
        <div class="">
                    <h2>Nossas lojas</h2>
                    <hr>
                </div>
    
        <div class="row">
                
                <div class="col-sm">
                    <h3>
                        <font face="Arial">São Paulo</font>
                    </h3>
                    <p>Rua Augusta, 472</p>
                    <p>Centro</p>
                    <p>(11) 6666-7777</p>
                </div>
                <div class="col-sm">
                    <h3>
                        <font face="Arial">Ceilândia</font>
                    </h3>
                    <p>Rua João de Santo Cristo</p>
                    <p>Lote 14</p>
                    <p>(61) 2222-1111</p>
                </div>
                <div class="col-sm">
                    <h3>
                        <font face="Arial">Blumenau</font>
                    </h3>
                    <p>Rua Cruzeiro, 5</p>
                    <p>Vila Nova </p>
                    <p>(47) 8888-2626 </p>

                </div>
            </div>
        </div>




        <footer id="rodape">
            <p id="formas_pagamento">
                <b> Formas de pagamentos</b>
            </p>
            <img width="245px" src="./imagens/formas-de-pagamentos.jpg" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>

        </footer>

    </body>
    <html>