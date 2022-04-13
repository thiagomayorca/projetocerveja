<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>

    <title>ViaCEP Webservice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

</head>
<body>
    <h3> Novo cadastro </h3>


<form action="cad_user.php" method="post">
Nome.:<br>
<input type="text" name="nome" id="nome" />
<br/>

Login.:<br>
<input type="text" name="login" id="login"/>
<br/>


Senha.:<br>
<input type="password" name="senha" id="senha"/>
<br/>

<!-- Confirmar senha input -->

      <div class="col">
        <div class="form-outline"> 
        <label class="form-label" for="form6Example1"> Confirmar senha </label> <br>
          <input type="password" name="confirmarSenha" id="confirmarSenha"  placeholder="Redigite a sua senha "  onKeyPress="validatePassword()" required />
        </div>
      </div>

      <!--  de verificação de senha -->
      <script>
        var password = document.getElementById("senha");
          var confirm_password = document.getElementById("confirmarSenha");
        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Senhas diferentes!");
            document.getElementById("senha").style.borderColor="#FF0000";
            document.getElementById("confirmarSenha").style.borderColor="#FF0000";
          } else {
            confirm_password.setCustomValidity('');
            document.getElementById("senha").style.borderColor="#028200";
            document.getElementById("confirmarSenha").style.borderColor="#028200";
          }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
      </script>


    <!-- Inicio do formulario -->
    
        <label>Cep: <br>
        <input name="cep" type="text" id="cep" value="" 
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua: <br>
        <input name="rua" type="text" id="rua"  /></label><br />
        <label>Bairro: <br>
        <input name="bairro" type="text" id="bairro"  /></label><br />
        <label>Cidade: <br>
        <input name="cidade" type="text" id="cidade"  /></label><br />
        <label>Estado: <br>
        <input name="uf" type="text" id="uf" /></label><br />
        <label>IBGE: <br>
        <input name="ibge" type="text" id="ibge"   /></label><br /> <br>

        Perfil : <br/>
<select name="perfil" id="perfil">
    <option value="">SELECIONE</option>
    <option value="adm">Administrador</option>
    <option value="user">Usuário</option>
    </select>

    <br> <br>
    <input type="submit" value="Cadastrar" class="btn btn-success"/>
    <input type="reset" value="Limpar Campos" class="btn btn-danger" />
        </form>

      

</body>
</html>

