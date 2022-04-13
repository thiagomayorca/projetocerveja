<?php include_once 'topo.php';

// resgate de dados da URL
$id= base64_decode($_GET["id"]);
// montar a instrução para selecionar o registro na base de dados
$sql= "select * from cervejas where idcerveja =".$id; 

// abrir conexão com o banco
include_once 'conexao.php';

// executar

$rs =mysqli_query($con,$sql);
if(mysqli_num_rows($rs) ==1){
    $reg = mysqli_fetch_array($rs);

}

?>

<h3> Atualizar produto </h3>


<form class = "formgroup" action="atualizar.php" method="post">
nomec:<br>
<input type = "text" name="nomec" id="nomec" class"form-control"  value="<?php echo $reg["nomec"]; ?>"/>
<br/>

tipo:<br>
<input type = "text" name="tipo" id="tipo" class"form-control" value="<?php echo $reg["tipo"]; ?>" />
<br/>

pais:<br>
<input type = "text" name="valor" id="pais" class"form-control" value="<?php echo $reg["pais"]; ?>"  />
<br/>
coment.:<br>
<input type = "text" name="coment" id="coment" class"form-control" value="<?php echo $reg["coment"]; ?>" />
<br/>

<br/>
nota : <br/>
<select name = "nota" id="nota" class = "form-control" >
    <option value="<?php echo $reg["nota"]; ?>"><?php echo $reg["nota"]; ?></option> 
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<br/><br/>

<input type="hidden" name="id" value = "<?php echo $reg["idcerveja"]; ?>" />
<input type="submit" value = "Atualizar Produto" class="btn btn-success" />
<input type="reset" value = "Limpar campos" class="btn btn-danger" />


</form>


<?php include_once 'rodape.php'; ?>