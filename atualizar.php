<?php


//pegar os dados da tela
$id = $_POST["id"];
$nomec = $_POST["nomec"];
$tipo = $_POST["tipo"];
$pais= $_POST["pais"];
$nota = $_POST["nota"];
$coment = $_POST["coment"];


// abrir a conexão com o banco

include_once 'conexao.php';

// montar a instrução de atualizar
$sql = "update cervejas set nomec = '".$nomec."',
tipo = '".$tipo."',
pais = '".$pais."',
coment = '".$coment."',
nota = '".$nota."' where idcerveja =".$id;

//executar

$rs = mysqli_query($con,$sql);
if($rs){
    //echo"Atualizado com Sucesso!";
    $msg = "Atualizado com Sucesso!";
}else{
    // echo"Erro ao atualizar!";
    $msg = "Erro ao atualizar!";
}

//fechar conexao com o banco

mysqli_close($con);
echo"<script>alert('".$msg."');
location.href='painel.php';

</script>";

//fechando a conexao , nunca deixa aberta
?>
