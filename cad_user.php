<?php 
session_start();
// resgate de dados da tela
$nome= $_POST["nome"];
$login= $_POST["login"];
$senha = md5($_POST["senha"]);
$perfil = $_POST["perfil"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$ibge = $_POST["ibge"];



// abrir a conexão com o banco
include_once 'conexao.php';

// montar a instrução para ir ao banco

$sql =  "INSERT INTO usuarios VALUES(null,'$nome','$login','$senha','$perfil','$cep','$rua','$bairro','$cidade','$uf','$ibge')";

$result = mysqli_query($con,$sql); 

if($result){
    //echo"Gravado com Sucesso!";
    $msg = "Gravado com sucesso!";
} else {
    //echo"Erro ao Gravar!";
    $msg = "Erro ao Gravar!";
}
// 5 fechar conexão com o banco
mysqli_close($con);
echo"<script> alert('".$msg."');
location.href='index.php';

</script>";
?>