<?php
$servername = "localhost";
$usarname = "root";
$password = "";
$database = "fseletro";

//criando a conexão
$conect = mysqli_connect($servername, $usarname, $password, $database);

//inserção do código para leitura dos caractéres especiais do banco de dados
$conect ->query("set names utf8");

//verificando a conexão
if (!$conect) {
    die("A conexão do BD falhou:" . mysqli_connect_error());
}

?>