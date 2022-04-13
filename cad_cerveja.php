<?php 
session_start();
// resgate de dados da tela
$nomec= $_POST["nome"];
$tipo= $_POST["tipo"];
$pais = $_POST["pais"];
$nota = $_POST["nota"];
$coment = $_POST["coment"];


// abrir a conexão com o banco
include_once 'conexao.php';

// montar a instrução para ir ao banco

$sql =  "insert into cervejas values(NULL,'".$nomec."','".$tipo."','".$pais."','".$nota."','".$coment."')";

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