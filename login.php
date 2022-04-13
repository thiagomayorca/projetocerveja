<?php 
session_start();
// resgate de dados da tela
$login = $_POST["login"];
$senha = $_POST["senha"];
$senha = md5($senha);


include_once 'conexao.php';
$sql = "select * from usuarios where login ='".$login."' and senha = '".$senha."'";
$r = mysqli_query($con,$sql); 

if(mysqli_num_rows($r) == 1){
    
    $row = mysqli_fetch_array($r);

    $_SESSION["nome"] = $row["nome"];
    $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["tempo"] = time(); // guarda o momento exato do login

    header("location:painel.php");
}else{
    $msg = "login/senha invalidos!";
  header("location:index.php?msg=".$msg);
}
?>