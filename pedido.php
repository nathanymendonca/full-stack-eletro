<?php
require_once('conexao.php');
if (
    isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['produto']) && isset($_POST['valorunitario'])
    && isset($_POST['quantidade']) && isset($_POST['valortotal'])
) {

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $produto = $_POST['produto'];
    $valorunitario = $_POST['valorunitario'];
    $quantidade = $_POST['quantidade'];
    $valortotal = $_POST['valortotal'];

    $sql = "INSERT INTO pedido (nomecliente, endereco, telefone, produto, valorunitario, quantidade, valortotal) 
                values ('$nome', '$endereco', '$telefone', '$produto', '$valorunitario', '$quantidade', '$valortotal')";
    $result = $conect->query($sql);

    echo "<script> alert('Pedido cadastrado em nossa base de dados')
             location.href ='pedido.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Full Stack Eletro </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="./CSS/estilo.css">
<script src="js/funcoes.js"></script>



</head>

<body>
    <!--Início Menu  -->
    <header>
        <?php
        include_once("menu.php");
        ?>
    </header>
    <!-- end menu-->

    <div class="container">

        
    <div class="col-md-6 offset-md-3">
            <main class="pedido" action="">
                <h2>Meus Pedidos</h2>
                <form method="post" action="" style="width:600px">
                    <h4>Nome</h4>
                    <input name="nome" type="text" required style="width:500px">
                    <h4>Endereço</h4>
                    <input name="endereco" type="text" required style="width:500px">
                    <h4>Telefone</h4>
                    <input name="telefone" type="number" required style="width:500px">
                    <h4>Produto</h4>
                    <input name="produto" type="text-area" required style="width:500px">
                    <h4>Valor unitário</h4>
                    <input name="valorunitario" type="number" required style="width:200px">
                    <h4>Quantidade</h4>
                    <input name="quantidade" type="number" required style="width:100px">
                    <h4>Valor total</h4>
                    <input name="valortotal" type="number" required style="width:200px">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Enviar" style="width:100px">

                </form>
            </main>
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

</html>