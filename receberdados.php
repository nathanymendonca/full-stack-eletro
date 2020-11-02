<?PHP

require_once "conexao.php";

if (isset($_POST['nome']) && isset($_POST['msg'])){
    
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];
     
    $sql = "INSERT INTO comentarios (nome, msg) values ('$nome', '$msg')";
    $result = $conect->query($sql);
}

$sql = "select * from comentarios";
$result = $conect->query( $sql );

if ( $result->num_rows > 0 ) {
    while( $rows = $result->fetch_assoc() ) {

        echo "Nome: ", $rows['nome'], "<br>";
        echo "Mensagem: ", $rows['msg'], "<br>";
        echo "<hr>";
    }
} else {
    echo "Nenhum comentário ainda!";
}
    


?>