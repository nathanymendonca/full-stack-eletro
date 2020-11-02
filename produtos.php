<?php
$servername = "localhost";
$usarname = "root";
$password = "";
$database = "fseletro";

//criando a conexão
$conn = mysqli_connect($servername, $usarname, $password, $database);

//inserção do código para leitura dos caractéres especiais do banco de dados
$conn ->query("set names utf8");

//verificando a conexão
if (!$conn) {
    die("A conexão do BD falhou:" . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <script src="js/funcoes.js"></script>

    <head>

    <body>

        <header>
        <!--Início Menu  -->
        <?php
      include_once("menu.php");
      ?>
      <!--Fim Menu  -->
        </header>
        <main id="copor">
            <!--Início categoria  -->
            <h2>Produtos</h2>
            <hr>
            <div id="principal">
                <nav id="menu-lateral">
                    <h3>Categorias</h3>
                    <ul>
                        <li onclick="exibir_todos()">Todos (12)</li>
                        <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                        <li onclick="exibir_categoria('fogao')">Fogão (2)</li>
                        <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                        <li onclick="exibir_categoria('lavadora')">Lavadora (2)</li>
                        <li onclick="exibir_categoria('lavalouca')">Lava-louças (2)</li>
                    </ul>
                </nav>

                <!--fim categoria  -->
                
                <!--Início Produto  -->
                <section id="Produtos">

                <?php
                $sql = "select * from produto";
                $result = $conn->query($sql);
                
                if($result->num_rows >0){
                    while($rows = $result->fetch_assoc()){
                       
                        
                ?>
                
                <div class="produto" id="<?php echo $rows["categoria"];?>" style="display:block;">
                        <img src="<?php echo $rows["imagem"];?>" width="140px" onclick="destaque(this)">
                        <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                        <hr>
                        <p class="valorProduto">R$<?php echo $rows["preco"];?></p>
                        <p class="promocao">R$<?php echo $rows["precofinal"];?></p>
                        <button class="comprar" name="botao" title="clique aqui para comprar">Comprar</button>
                    </div>

                <?php
                }
                } else {
                    echo "Nenhum produto cadastrado!";
                }
                
                ?>
                <!--Fim Produto  -->
                  </section>
            </div>
        </main>
        
        <!--Rodapé  -->
        <footer id="rodapeprodutos">
            <p id="formas_pagamento">
                <b> Formas de pagamentos</b>
            </p>
            <img width="245px" src="./imagens/formas-de-pagamentos.jpg" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>

        </footer>
    </body>


    <html>