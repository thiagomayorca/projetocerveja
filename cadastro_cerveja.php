<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3> Novo cadastro </h3>


<form action="cad_cerveja.php" method="post">
nomec:<br>
<input type="text" name="nome" id="nome" />
<br/>

tipo:<br>
<input type="text" name="tipo" id="tipo"/>
<br/>

pais:<br>
<input type="text" name="pais" id="pais"/>

<br> coment:<br> 
<input type="text" name="coment" id="coment"/>

<br/>
nota.: <br/>
<select name="nota" id="nota">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>



    <input type="submit" value="Cadastrar"/>
    <input type="reset" value="Limpar Campos"/>
        </form>



</body>
</html>
