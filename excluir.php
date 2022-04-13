<?php
include_once 'topo.php';

$id = $_GET["id"];

$sql = "delete from cervejas where idcerveja =".$id;

include_once 'conexao.php';

if(mysqli_query($con,$sql)){
    $msg = "Produto excluido com Sucesso!";
}else{
    $msg = "Erro ao Excluir";
}
mysqli_close($con);
echo "<script> alert('".$msg."');
location.href='menu_adm.php';
</script>";

include_once 'rodape.php';


?>