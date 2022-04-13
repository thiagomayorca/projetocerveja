<!DOCTYPE html>

<html lang="en">
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="deion" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></>
        <src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></>
        <src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></>


<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4"></div>
       
        <div class="col-md-4">
          <form class="form-signin text-center" action="login.php" method="post">
          <i class="bi bi-person-circle"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> <br>
<br> 
      <h1 class="h3 mb-3 font-weight-normal">Faça o login </h1>
      <label for="inputEmail" class="sr-only">Insira o e-mail</label>
      <input type="text" id="inputEmail" class="form-control" name="login" placeholder="login" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name ="senha" id="inputPassword" class="form-control" placeholder="senha" required>
      <div class="checkbox mb-3">
        
      </div>
      <button class="btn btn-lg btn-secondary btn-block" type="submit" value="login">Fazer login</button>
      
    </form>
    </div>
        <div class="col-md-4"></div>      
        </div>
        </div>  




    <hr>
    <center> Ainda não tem seu cadastro ? <a href="cadastro_user.php">Faça agora !</a></center>

    <?php 
    if(isset($_GET["msg"])){
        echo $_GET["msg"];
    }

    ?>

<?php include "rodape.php"; ?>    

</body>
<src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></>
      <script>window.jQuery || document.write('<src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/>')</>< src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
</html>





