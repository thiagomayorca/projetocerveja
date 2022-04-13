<?php

    echo"<h1>Consultar Produto</h1>";
        // abrir a conexão com o banco
    include_once 'topo.php';
    include_once 'conexao.php';
        // montar a instrução para buscar os produtos cadastrados
    $sql = "select * from cervejas ORDER BY nomec ASC";
    // listando e ordenando de forma ascedente 
    
        // executar a consulta na base de dados
    $rs = mysqli_query($con,$sql);
        // vou verificar se tem produto no banco
    if(mysqli_num_rows($rs) > 0){
        //echo"imprimir produtos na tela";
 // SAIR NO PHP
?>

<table class="table" width="100%" border="20">
                <thead class="table-dark">
    <tr>
        <td>Nome da cerveja</td>
        <td>Tipo de Cerveja</td>
        <td>País</td>
        <td>Nota</td>
        <td>Comentario</td>
<br/>

    </tr>
    </thead>   
    
      <!-- vou escrever php agora -->
      <?php
            //<th>Exclusão</th> faltando colocar na tabela acima
            //<th>Editar</th>

            // ENTRAR NO PHP
            // transformando a variavel "$rs" em vetor
            while($linha = mysqli_fetch_array($rs)){
                ?>
                <tr>
                    <td><?php echo $linha["nomec"]; ?></td>
                    <td><?php echo $linha["tipo"]; ?></td>
                    <td><?php echo $linha["pais"]; ?></td>
                    <td><?php echo $linha["nota"]; ?></td>
                    <td><?php echo $linha["coment"]; ?></td>
              <!--  <td><a href="editar.php?id=??php echo base64_encode($linha["idcerveja"]); ?>">editar</a></td>
                     CHAMA A EXCLUSÃO-->
                    <!-- iremos codificar id na URL-->
                  <!--  <td><a href="#" onclick="excluir(?php echo($linha["idcerveja"]); ?>)">excluir</a></td>-->
                </tr>
            <?php   }?>
            </table>
            
            <br/>
            <br/>
            <br/>
            <h4><a href="painel.php">Voltar</a></h4>
            <?php
    }else{
        echo"Não existe produto cadastrado";
    }
    mysqli_close($con);
   // include_once 'rodape.php';

   include_once 'rodape.php';

    ?>  

</body>
</html>




